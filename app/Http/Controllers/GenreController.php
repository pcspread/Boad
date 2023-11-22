<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * view表示
     * ジャンル一覧ページ
     * @param void
     * @return view
     */
    public function indexGenres()
    {
        return view('genre.genres');
    }

    /**
     * view表示
     * ジャンル編集ページ
     * @param int $genre_id
     * @return view
     */
    public function editGenre($genre_id)
    {
        return view('genre.edit_genre');
    }
}
