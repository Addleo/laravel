<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\ItemController::class, 'index'])
    ->name('items.index');

Route::get('/items/create', [\App\Http\Controllers\ItemController::class, 'create'])
    ->name('items.create');

Route::post('/items', [\App\Http\Controllers\ItemController::class, 'store'])
    ->name('items.store');

Route::get('/items/{item}', [\App\Http\Controllers\ItemController::class, 'show'])
    ->name('items.show');

