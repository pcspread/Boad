<?php

use Illuminate\Support\Facades\Route;

// Controller読込
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// view表示：top
Route::get('/', [BookController::class,'indexHome'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    // view表示：図書一覧ページ
    Route::get('/book', [BookController::class, 'indexBooks']);

    // view表示：図書追加ページ
    Route::get('/book/add', [BookController::class, 'createBook']);
    
    // view表示：著者一覧ページ
    Route::get('/author', [AuthorController::class, 'indexAuthors']);
    
    // view表示：ジャンル一覧ページ
    Route::get('/genre', [GenreController::class, 'indexGenres']);
});