<?php

use App\Http\Controllers\Api\CitizenController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/citizen', [CitizenController::class, 'index']);
    Route::get('/citizen/{citizen}', [CitizenController::class, 'show']);
    Route::post('userLogout', [UserController::class, 'userLogout']);
});


Route::post('userLogin', [UserController::class, 'userLogin']);
Route::post('userRegister', [UserController::class, 'userRegister']);
