<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Book;
use App\Models\Favorite;

class BookController extends Controller
{
    /**
     * view表示
     * top
     * @param void
     * @return view
     */
    public function indexHome()
    {
        return view('home');
    }

    /**
     * view表示
     * 図書一覧ページ
     * @param void
     * @return view
     */
    public function indexBooks()
    {
        // 図書情報の取得
        $books = Book::all();

        return view('book.books', compact('books'));
    }

    /**
     * view表示
     * お気に入り一覧ページ
     * @param void
     * @return view
     */
    public function indexFavoriteBooks()
    {
        return view('book.favorite_books');
    }

    /**
     * view表示
     * ランキング一覧ページ
     * @param void
     * @return view
     */
    public function indexRankBooks()
    {
        return view('book.rank_books');
    }

    /**
     * view表示
     * 図書詳細ページ
     * @param int $book_id
     * @return view
     */
    public function showBook($book_id)
    {
        // 図書詳細データを取得
        $book = Book::find($book_id);

        // お気に入り情報の取得
        $favorite = Favorite::where('book_id', $book_id)->first();

        return view('book.book', compact('book', 'favorite'));
    }

    /**
     * お気に入り追加処理
     * @param int $book_id
     * @return back
     */
    public function addFavorite($book_id)
    {
        // お気に入り追加処理
        Favorite::create([
            'book_id' => $book_id,
        ]);

        return back()->with('success', 'お気に入りに追加しました');
    }

    /**
     * お気に入り解除処理
     * @param int $book_id
     * @return back
     */
    public function destroyFavorite($book_id)
    {
        // お気に入り解除処理
        Favorite::where('book_id', $book_id)->first()->delete();

        return back()->with('success', 'お気に入りを解除しました');
    }

    /**
     * view表示
     * 図書追加ページ
     * @param void
     * @return view
     */
    public function createBook()
    {
        return view('book.add_book');
    }

    /**
     * view表示
     * 図書編集ページ
     * @param int $book_id
     * @return view
     */
    public function editBook($book_id)
    {
        return view('book.edit_book');
    }

    /**
     * view表示
     * 図書評価ページ
     * @param int $book_id
     * @return view
     */
    public function editRateBook($book_id)
    {
        return view('book.rate_book');
    }
}
