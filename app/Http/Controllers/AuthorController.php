<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * view表示
     * 著者一覧ページ
     * @param void
     * @return view
     */
    public function indexAuthors()
    {
        return view('author.authors');
    }
}
