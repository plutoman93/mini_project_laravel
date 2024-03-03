<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\SUpport\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' =>'required|email|max:200',
            'password' => 'required|min:2'
        ]);
        if($validator -> fails()) {
            return response() -> json([
                'message' => "ส่งข้อมูลไม่ถูกต้อง",
                'status_code' => "400",
            ]);
        }
        $data = request(['email','password']);

        if(!Auth::attempt($data)){
            return response() ->json([
                'message' => "ไม่พบผู้ใช้",
                'status_code' => '500',
            ]);
        }
        $user = User::where('email',$request->email)->first();
        $token = $user->createToken('authToken')->plainTextToken;

        return response()-> json([
            'token' => $token,
            'message' => 'login สำเร็จ',
            'user' => auth()->user(),
        ]);
}
    public function logout(Request $request){
        $request ->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'ออกจากระบบสำเร็จ',
        ]);
}
}
