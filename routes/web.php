<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserRole;
use App\Livewire\Admin\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware(['checkRole:admin']);

// For user login
Route::get('login', [UserController::class, 'loginPage'])->name('blade.login');
Route::get('register', [UserController::class, 'registerPage'])->name('blade.register');
Route::post('savelogin', [UserController::class, 'login'])->name('user.login');
Route::post('saveregister', [UserController::class, 'register'])->name('user.register');

Route::middleware('checkRole:admin')->group(function(){
    Route::resource('dashboard/school', SchoolController::class);
});