<?php

declare(strict_types=1);

use App\Http\Controllers\Api\V1\Authentication\LoginController;
use App\Http\Controllers\Api\V1\Authentication\LogoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::name('app.')->prefix('app/')->whereNumber(['id'])->group(function (): void {
    Route::name('account.')->prefix('account/')->group(function (): void {
        Route::post(
            'login',
            LoginController::class
        )->name('login');

        Route::post(
            'logout',
            LogoutController::class
        )->name('logout');
    });
});
