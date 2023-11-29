<?php

namespace App\Http\Controllers;

// Request読込
use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;
use App\Http\Requests\GenreEditRequest;
// Model読込
use App\Models\Genre;

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
        // ジャンル情報の取得
        $genres = Genre::orderBy('id', 'desc')->get();

        return view('genre.genres', compact('genres'));
    }

    /**
     * ジャンル追加処理
     * @param object $request
     * @return back
     */
    public function storeGenre(GenreRequest $request)
    {
        // フォーム情報の取得
        $name = $request->only('name');

        // create処理
        Genre::create($name);
        
        return back()->with('success', 'ジャンルを追加しました');
    }

    /**
     * view表示
     * ジャンル編集ページ
     * @param int $genre_id
     * @return view
     */
    public function editGenre($genre_id)
    {
        // ジャンル情報の取得
        $genre = Genre::find($genre_id);

        return view('genre.edit_genre', compact('genre'));
    }

    /**
     * ジャンル更新処理
     * @param int $genre_id
     * @param object $request
     * @return back
     */
    public function updateGenre($genre_id, GenreEditRequest $request)
    {
        // フォーム情報の取得
        $name = $request->only('name');

        // update処理
        Genre::find($genre_id)->update($name);

        return back()->with('success', '更新が完了しました');
    }

    /**
     * ジャンル削除処理
     * @param int $genre_id
     * @return back
     */
    public function destroyGenre($genre_id)
    {
        // delete処理
        Genre::find($genre_id)->delete();

        return back()->with('success', '削除が完了しました');
    }
}
