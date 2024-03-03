<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login',[AuthController::class,'login'])->name('api.login');
// Route::get('/user/{id}',[UserController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>[
    'auth:sanctum',
]], function (){
    Route::resource('user', UserController::class);
    Route::post('logout',[AuthController::class,'logout'])->name('api.logout');
    // Route::get('user', UserController::class);

}
);
