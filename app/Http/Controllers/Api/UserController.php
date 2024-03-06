<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = User::all();
        // return response()->json(['data' => $data]);

        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //

    }


    /**
     * Store a newly created resource in storage..
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        try{

                User::create([
                    "id" => $request['id'],
                    "name" => $request['name'],
                    "last_name" => $request['last_name'],
                    "email" => $request['email'],
                    "password" => $request['password'],
                    "phone_number" => $request['phone_number'],
                    "department" => $request['department'],

                ]);
                return response()->json([
                    "status" => "200",
                    "message" => "Success",
                ]);
                }catch(\Exception $e) {
                    return response()->json([
                        "status" => "500",
                        "message" => $e,
                    ]);
                };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data = User::find($id);

        // if(!$data){
        //     return response()->json(['message' => 'Data not found'],404);
        // }

        // return response()->json($data,200);

        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            User::where('id', $id)
            ->update([
                'name' => $request['name'],
                'user_id' => $request['user_id'],
            ]);
            return response()->json([
                "status" => "200",
                "message" => "User updated successfully"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => "500",
                "message" => $e,
            ]);
        }
    }

    public function insert(Request $request, string $name)
    {
        try {
            User::where('name', $name)
            ->insert([
                'name' => $request['name'],
                'user_id' => $request['user_id'],
            ]);
            return response()->json([
                "status" => "200",
                "message" => "Insert successfully"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => "500",
                "message" => $e,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            User::where('id', $id)->delete();
            return response ()->json([
                "status" => "200",
                "message" => "User deleted successfully"
            ]);
    }
    catch (\Exception $e) {
        return response()->json([
            "status" => "500",
            "message" => $e,
        ]);
    };
    }
}
