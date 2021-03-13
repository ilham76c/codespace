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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/space', [App\Http\Controllers\SpaceController::class, 'index'])->name('space.index');

Route::get('/space/create', [App\Http\Controllers\SpaceController::class, 'create'])->name('space.create');

Route::post('/space/store', [App\Http\Controllers\SpaceController::class, 'store'])->name('space.store');

Route::get('/space/browse', [App\Http\Controllers\SpaceController::class, 'browse'])->name('space.browse');