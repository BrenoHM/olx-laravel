<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('register_action');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login_action'])->name('loginAction');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');
Route::get('/select-state', [AuthController::class, 'select_state'])->name('select-state');
Route::post('/select-state', [AuthController::class, 'state_action'])->name('state_action');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard/my-account', [DashboardController::class, 'my_account'])->name('my_account');
    Route::post('/dashboard/my-account', [DashboardController::class, 'action_my_account'])->name('action.my_account');
});
Route::get('/dashboard/my-ads', [DashboardController::class, 'my_ads'])->name('my_ads');