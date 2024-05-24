<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware(['checkRole:admin']);


Route::get('login', [UserController::class, 'loginPage'])->name('blade.login');
Route::get('register', [UserController::class, 'registerPage'])->name('blade.register');
Route::post('savelogin', [UserController::class, 'login'])->name('user.login');
Route::post('saveregister', [UserController::class, 'register'])->name('user.register');