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

    /**
     * view表示
     * 著者編集ページ
     * @param int $author_id
     * @return view
     */
    public function editAuthor($author_id)
    {
        return view('author.edit_author');
    }
}
