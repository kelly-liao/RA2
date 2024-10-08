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

Route::resource('category', 'App\Http\Controllers\CategoryController');
Route::resource('food', 'App\Http\Controllers\FoodController');
// Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create']);
// Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/foods/{id}',[App\Http\Controllers\FoodController::class, 'view'])->name('food.view');