<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);

Route::prefix('category')->group(function() {
    Route::get('marbel-edu-games', fn()=>
        view('categories.edu-games')
    );
    Route::get('marbel-and-friends-kids-games', fn()=>
        view('categories.kids-games')
    );
    Route::get('riri-story-books-animations', fn()=>
        view('categories.story-books')
    );
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show']);

Route::prefix('program')->group(function() {
    Route::get('karir', fn()=>
        view('program.karir')
    );
    Route::get('magang', fn()=>
        view('program.magang')
    );
    Route::get('kunjungan-industri', fn()=>
        view('program.kunjungan-industri')
    );
});