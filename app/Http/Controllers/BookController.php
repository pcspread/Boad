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
     * books
     * @param void
     * @return view
     */
    public function indexBooks()
    {
        return view('book.books');
    }
}
