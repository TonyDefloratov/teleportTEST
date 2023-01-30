<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('list');
});


//Route::get('/', function () {
//    return view('signIn');
//});
Route::post('/logIn/submit', [\App\Http\Controllers\AuthController::class, 'login'])->name('user-login-form');

Route::post('/signIn/submit', [\App\Http\Controllers\UserController::class, 'submit'])->name('user-form');

Route::get('/list', [\App\Http\Controllers\TodoListController::class, 'index'])->name('index');
Route::post('/list', [\App\Http\Controllers\TodoListController::class, 'store'])->name('store');
Route::delete('/list{todo_lists:id}', [\App\Http\Controllers\TodoListController::class, 'destroy'])->name('destroy');
