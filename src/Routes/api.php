<?php

use Illuminate\Support\Facades\Route;
use KeycloakIntegration\Controllers\AuthController;

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('send-verification-email', [AuthController::class, 'sendVerificationEmail']);
    Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('reset-password', [AuthController::class, 'resetPassword']);
});

