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

Route::delete('/items/{item}', [\App\Http\Controllers\ItemController::class, 'destroy'])
    ->name('items.destroy');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])
    ->name('register.create');

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginForm'])
    ->name('login');

Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('logout');

Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('users.index');
