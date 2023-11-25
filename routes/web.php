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

    // view表示：お気に入り一覧ページ
    Route::get('/book/favorite', [BookController::class, 'indexFavoriteBooks']);

    // view表示：ランキングページ
    Route::get('//book/rank', [BookController::class, 'indexRankBooks']);

    // view表示：図書詳細ページ
    Route::get('/book/detail/{book_id}', [BookController::class, 'showBook']);

    // view表示：図書追加ページ
    Route::get('/book/add', [BookController::class, 'createBook']);

    // view表示：図書編集ページ
    Route::get('/book/edit/{book_id}', [BookController::class, 'editBook']);
    
    // view表示：図書評価ページ
    Route::get('/book/rate/{book_id}', [BookController::class, 'editRateBook']);
    
    // view表示：著者一覧ページ
    Route::get('/author', [AuthorController::class, 'indexAuthors']);
    
    // view表示：著者編集ページ
    Route::get('/author/{author_id}', [AuthorController::class, 'editAuthor']);

    // view表示：ジャンル一覧ページ
    Route::get('/genre', [GenreController::class, 'indexGenres']);

    // view表示：ジャンル編集ページ
    Route::get('/genre/{genre_id}', [GenreController::class, 'editGenre']);
});