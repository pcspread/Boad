<?php

use Illuminate\Support\Facades\Route;

// Controller読込
use App\Http\Controllers\BookController;

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
    Route::get('/book', [BookController::class, 'indexBooks']);
});