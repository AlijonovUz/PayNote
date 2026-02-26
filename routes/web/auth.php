<?php

use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerifyEmailController;

Route::prefix('auth')->group(function () {

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('logout', [LoginController::class, 'destroy'])->name('logout');
    });

    Route::middleware('guest')->group(function () {
        Route::get('google/redirect', [GoogleController::class, 'redirect'])->name('google-redirect');
        Route::get('google/callback', [GoogleController::class, 'callback'])->name('google-callback');

        Route::get('login', [LoginController::class, 'create'])->name('login');
        Route::post('login', [LoginController::class, 'store'])->name('login.store');

        Route::get('register', [RegisterController::class, 'create'])->name('register');
        Route::post('register', [RegisterController::class, 'store'])->name('register.store');

        Route::get('terms', [RegisterController::class, 'terms'])->name('terms');
    });

    Route::prefix('email')->middleware(['auth', 'unverified'])->group(function () {

        Route::get('verify', [VerifyEmailController::class, 'notice'])
            ->name('verification.notice');

        Route::get('verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])
            ->middleware(['signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('verification-notification', [VerifyEmailController::class, 'resend'])
            ->middleware('throttle:6,1')
            ->name('verification.resend');
    });
});
