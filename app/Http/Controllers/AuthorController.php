<?php

namespace App\Http\Controllers;

// Request読込
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Http\Requests\AuthorEditRequest;
// Model読込
use App\Models\Author;

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
        // 著者情報の取得
        $authors = Author::orderBy('id', 'desc')->get();

        return view('author.authors', compact('authors'));
    }

    /**
     * 著者追加処理
     * @param object $request
     * @return back
     */
    public function storeAuthor(AuthorRequest $request)
    {
        // フォーム情報の取得
        $name = $request->only('name');

        // create処理
        Author::create($name);

        return back()->with('success', '著者を追加しました');
    }

    /**
     * view表示
     * 著者編集ページ
     * @param int $author_id
     * @return view
     */
    public function editAuthor($author_id)
    {
        // 著者情報の取得
        $author = Author::find($author_id);

        return view('author.edit_author', compact('author'));
    }

    /**
     * 著者編集処理
     * @param int $author_id
     * @param object $request
     * @return back
     */
    public function updateAuthor($author_id, AuthorEditRequest $request)
    {
        // フォーム情報を取得
        $name = $request->only('name');
        // update処理
        Author::find($author_id)->update($name);

        return back()->with('success', '更新が完了しました');
    }

    /**
     * 著者削除処理
     * @param int $author_id
     * @return back
     */
    public function destroyAuthor($author_id)
    {
        // delete処理
        Author::find($author_id)->delete();

        return back()->with('success', '削除が完了しました');
    }
}
