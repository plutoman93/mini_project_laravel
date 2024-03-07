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
    return view('auth.login');
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

    Route::get('/news', function () {
        return view('index');
    })->name('news');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/addtask', function () {
        return view('addtask');
    })->name('addtask');

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

    Route::get('/project-edittask/{id}', function($id){
        //dd($id);
        return view('project.edittask',compact('id'));
    })->name('project-edittask');

    Route::get('/project-viewtask/{id}', function($id){
        //dd($id);
        return view('project.viewtask',compact('id'));
    })->name('project-viewtask');
});
//สำหรับไปที่หน้าโปรเจ็ค Add

Route::get('/project-add',function(){
    return view('project.add');
})->name('project-add');

<<<<<<< HEAD
Route::get('/project-addtask',function(){
    return view('livewire.project.addtask');
})->name('project-addtask');

=======
Route::get('addtask',function(){
    return view('addtask');
})->name('addtask');
>>>>>>> a6a9ea0e42e0cfe1d3f7888f338b9288c884181a
