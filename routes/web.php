<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/authentificate', [AuthController::class, 'authentificate'])->name('authentificate');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register/add', [AuthController::class, 'add'])->name('add');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get("/logout", [AuthController::class , "logout"])->name("logout");
});