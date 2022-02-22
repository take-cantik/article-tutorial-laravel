<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\Article\IndexController;
use App\Http\Controllers\v1\Article\StoreController;
use App\Http\Controllers\v1\Article\CreateController;
use App\Http\Controllers\v1\Article\ShowController;
use App\Http\Controllers\v1\Article\UpdateController;
use App\Http\Controllers\v1\Article\DestroyController;
use App\Http\Controllers\v1\Article\EditController;

Route::get('', IndexController::class)->name('index');
Route::post('', StoreController::class)->name('store');
Route::get('/create', CreateController::class)->name('create');
Route::get('/{articleId}', ShowController::class)->name('show');
Route::put('/{articleId}', UpdateController::class)->name('update');
Route::delete('/{articleId}', DestroyController::class)->name('destroy');
Route::get('/{articleId}/edit', EditController::class)->name('edit');