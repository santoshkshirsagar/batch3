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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('recipe','App\Http\Controllers\RecipeController');

Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('user','App\Http\Controllers\UserController');
    Route::resource('category','App\Http\Controllers\CategoryController');
    Route::resource('banner','App\Http\Controllers\BannerController');
    Route::resource('page','App\Http\Controllers\PageController');
});