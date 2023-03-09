<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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

// Home
Route::get('/', [HomeController::class, 'index']);

// products
Route::prefix('product')->group(function() {
    Route::get('/main', [ProductsController::class, 'index']);
});

// News
// Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show']);

// Program
Route::prefix('program')->group(function() {
    Route::get('/main', [ProgramController::class, 'index']);
});

// About
Route::get('/about-us', [AboutController::class, 'index']);

// Contact
Route::resource('/contact-us', ContactController::class)->only(['index']);

// Profile
Route::get('/profile/{id}', fn($id)=> view('profile', ['id' => $id]));

// Experience
Route::get('/experience', fn()=> view('experience'));
