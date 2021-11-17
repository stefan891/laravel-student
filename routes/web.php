<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');


//da riguardare
Route::prefix('/dashboard')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
});
Route::prefix('/students')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Students');
    })->name('students');

    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
});
