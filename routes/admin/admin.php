<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Citizen\CitizenController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    /**
     * Authentication Route
     */

    Route::get('/login', [AdminLoginController::class, 'getAdminLogin'])->name('login.getAdminLogin');
    Route::post('/login', [AdminLoginController::class, 'postAdminLogin'])->name('login.postAdminLogin');

    Route::get('/logout', [AdminLoginController::class, 'adminLogout'])->name('logout.adminLogout');

    /**
     * Citizen Route
     */
    Route::get('/dashboard', [CitizenController::class, 'index'])->name('index.adminDashboard');
    Route::get('/citizen/create', [CitizenController::class, 'create'])->name('citizen.create');
    Route::post('/citizen', [CitizenController::class, 'store'])->name('citizen.store');
    Route::get('/citizen/{citizen}', [CitizenController::class, 'show'])->name('citizen.show');
});
