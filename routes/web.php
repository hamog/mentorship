<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->name('admin.')->group(function () {
    //auth
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});


Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    //auth
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    //Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    //menu
    Route::get('/menu/groups', [MenuController::class, 'groups'])->name('menu.groups');
    Route::patch('/menu/sort', [MenuController::class, 'sortMenu'])->name('menu.sort');
    Route::apiResource('/menu', MenuController::class);
});
