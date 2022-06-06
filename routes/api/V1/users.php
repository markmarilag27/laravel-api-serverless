<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\UserController;

/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/

Route::name('users.')->prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('{uuid}', [UserController::class, 'show'])->name('show');
    Route::put('{user:uuid}', [UserController::class, 'update'])->name('update');
    Route::delete('{user:uuid}', [UserController::class, 'destroy'])->name('delete');
});
