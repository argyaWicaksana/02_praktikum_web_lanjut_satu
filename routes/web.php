<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
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

// Category
Route::prefix('category')->group(function() {
    Route::redirect('/marble-edu-games', 'https://www.educastudio.com/category/marbel-edu-games');
    Route::redirect('/marbel-and-friends-kids-games ', 'https://www.educastudio.com/category/marbel-and-friends-kids-games');
    Route::redirect('/riri-story-books', 'https://www.educastudio.com/category/riri-story-books');
    Route::redirect('/kolak-kids-songs', 'https://www.educastudio.com/category/kolak-kids-songs ');
});

// News
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show']);

// Program
Route::prefix('program')->group(function() {
    Route::redirect('/karir', 'https://www.educastudio.com/program/karir');
    Route::redirect('/magang', 'https://www.educastudio.com/program/magang');
    Route::redirect('/kunjungan-industri', 'https://www.educastudio.com/program/kunjungan-industri');
});

// About
Route::redirect('/about-us', 'https://www.educastudio.com/about-us');

//Contact
Route::resource('/contact-us', ContactController::class)->only(['index']);