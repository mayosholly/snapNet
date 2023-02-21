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


Route::get('/citizen', [CitizenController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/citizen/{citizen}', [CitizenController::class, 'show'])->middleware(['auth:sanctum']);;
Route::post('userLogin', [UserController::class, 'userLogin']);
Route::post('userLogout', [\App\Http\Controllers\Auth\LoginController::class, 'userLogout']);


Route::post('/register', [RegisteredUserController::class, 'store']);
