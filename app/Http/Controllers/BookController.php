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
     * 図書追加ページ
     * @param void
     * @return view
     */
    public function createBook()
    {
        return view('book.add_book');
    }
}
