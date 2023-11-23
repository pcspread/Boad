<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('book.books');
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
        return view('book.book');
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
