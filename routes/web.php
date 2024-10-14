<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/my-account', function () {
    return view('home');
})->name('myAccount');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('register_action');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login_action'])->name('loginAction');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/select-state', [AuthController::class, 'select_state'])->name('select-state');

Route::post('/select-state', [AuthController::class, 'state_action'])->name('state_action');
