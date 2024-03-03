<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/anucha', function () {
    return view('news');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/project', function () {
        return view('projects');
    })->name('projects');

    Route::get('/project-edit/{id}', function($id){
        //dd($id);
        return view('project.edit',compact('id'));
    })->name('project-edit');

    Route::get('/project-view/{id}', function($id){
        //dd($id);
        return view('project.view',compact('id'));
    })->name('project-view');
});
//สำหรับไปที่หน้าโปรเจ็ค Add

Route::get('/project-add',function(){
    return view('project.add');
})->name('project-add');

