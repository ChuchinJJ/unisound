<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ConfigClienteController;
use App\Http\Controllers\ValoracionController;
use App\Http\Livewire\ChangeCountries;

Route::middleware('guest')->group(function () {
    Route::get('registrar', [RegisteredUserController::class, 'create'])->name('registrar');
    Route::post('registrar', [RegisteredUserController::class, 'store']);
    Route::get('completar-registro', [RegisteredUserController::class, 'completar'])->name('completar-registro');
    Route::post('completar-registro', [RegisteredUserController::class, 'registrar']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('checkout', [CarritoController::class, 'checkout']);
    Route::get('cliente', [ConfigClienteController::class, 'index']);
    Route::post('cliente', [ConfigClienteController::class, 'index']);
    Route::post('cliente/update', [ConfigClienteController::class, 'update']);
    Route::post('cliente/newPass', [ConfigClienteController::class, 'newPass']);
    Route::get('cliente/{id}/detalleVenta', [ConfigClienteController::class, 'clienteDetalle']);
    Route::post('valoracion/product', [ValoracionController::class, 'index']);
});
