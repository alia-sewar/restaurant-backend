<?php

declare(strict_types=1);

use App\Http\Controllers\Api\V1\Authentication\LoginController;
use App\Http\Controllers\Api\V1\Authentication\LogoutController;
use App\Http\Controllers\Api\V1\Categories\CreateCategoryController;
use App\Http\Controllers\Api\V1\Categories\GetCategoriesController;
use App\Http\Controllers\Api\V1\Items\CreateItemController;
use App\Http\Controllers\Api\V1\Items\GetItemsController;
use App\Http\Controllers\Api\V1\SubCategories\CreateSubCategoryController;
use App\Http\Controllers\Api\V1\SubCategories\GetSubCategoriesController;
use Illuminate\Support\Facades\Route;

Route::name('app.')->prefix('app/')->whereNumber(['id'])->group(function (): void {
    Route::name('account.')->prefix('account/')->group(function (): void {

        Route::post(
            'login',
            LoginController::class
        )->name('login');
    });

    /**
     * Protected endpoints.
     */
    Route::middleware(['auth:sanctum'])->group(function (): void {

        //Logout
        Route::post(
            'logout',
            LogoutController::class
        )->name('logout');

        //Items
        Route::name('items.')->prefix('items/')->group(function (): void {
            Route::post(
                '',
                GetItemsController::class
            )->name('index');

            Route::post(
                'create',
                CreateItemController::class
            )->name('create');
        });
        //Categories
        Route::name('categories.')->prefix('categories/')->group(function (): void {
            Route::post(
                '',
                GetCategoriesController::class
            )->name('index');

            Route::post(
                'create',
                CreateCategoryController::class
            )->name('create');
        });
        //Sub Categories
        Route::name('sub-categories.')->prefix('sub-categories/')->group(function (): void {
            Route::post(
                '',
                GetSubCategoriesController::class
            )->name('index');

            Route::post(
                'create',
                CreateSubCategoryController::class
            )->name('create');
        });
    });
});
