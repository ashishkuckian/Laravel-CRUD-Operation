<?php

use App\Http\Controllers\UserController; //import this
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class,'loadAllUsers']);
Route::get('/adduser',[UserController::class,'loadAddUserForm']);

Route::post('/adduser',[UserController::class,'AddUser'])->name('AddUser');

Route::get('/edit/{id}',[UserController::class,'loadEditForm']);
Route::get('/delete/{id}',[UserController::class,'deleteUser']);

Route::post('/edituser',[UserController::class,'EditUser'])->name('EditUser');


Route::get('/search', [UserController::class, 'search'])->name('user.search');


?>