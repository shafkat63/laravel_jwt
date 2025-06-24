<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use App\Http\Middleware\CheckTokenVersion;

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name("login");
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

// Route::controller(TodoController::class)->group(function () {
//     Route::get('todos', 'index');
//     Route::post('todo', 'store');
//     Route::get('todo/{id}', 'show');
//     Route::put('todo/{id}', 'update');
//     Route::delete('todo/{id}', 'destroy');
// }); 


// Route::middleware([CheckTokenVersion::class])->group(function () {
    Route::controller(TodoController::class)->group(function () {
        Route::get('todos', 'index');
        Route::post('todo', 'store');
        Route::get('todo/{id}', 'show');
        Route::put('todo/{id}', 'update');
        Route::delete('todo/{id}', 'destroy');
    });
// });