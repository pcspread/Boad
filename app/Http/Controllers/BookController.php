<?php

namespace App\Http\Controllers;

// Request読込
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Http\Requests\RateRequest;
// Model読込
use App\Models\Book;
use App\Models\Favorite;
use App\Models\Author;
use App\Models\Genre;

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
        // ページ遷移用に値をセッションに格納
        session()->put('page', 'list');

        // 図書情報の取得
        $books = Book::orderBy('id', 'desc')->get();

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
        // ページ遷移用の値をセッションに格納
        session()->put('page', 'favorite');

        // お気に入り情報を全件取得
        $favorites = Favorite::orderBy('id', 'desc')->get();

        // データ格納用の配列を用意
        $array = [];

        foreach ($favorites as $favorite) {
            // お気に入りIDから図書データを取得
            if (Book::find($favorite['book_id'])) {
                // 配列に格納
                $array[] = Book::find($favorite['book_id']);
            }
        }
        // コレクション作成
        $books = collect($array);

        return view('book.favorite_books', compact('books'));
    }

    /**
     * view表示
     * ランキング一覧ページ
     * @param void
     * @return view
     */
    public function indexRankBooks()
    {
        // ページ遷移用の値をセッションに格納
        session()->put('page', 'rank');

        // 1位の図書情報を取得
        $first = Book::where('rate', 5)->orderBy('id', 'desc')->get();
        
        // 2位の図書情報を取得
        $second = Book::where('rate', 4)->orderBy('id', 'desc')->get();
        
        // 3位の図書情報を取得
        $third = Book::where('rate', 3)->orderBy('id', 'desc')->get();
        
        // 4位の図書情報を取得
        $fourth = Book::where('rate', 2)->orderBy('id', 'desc')->get();
        
        // 5位の図書情報を取得
        $fifth = Book::where('rate', 1)->orderBy('id', 'desc')->get();

        return view('book.rank_books', compact('first', 'second', 'third', 'fourth', 'fifth'));
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
     * ページ遷移処理
     * @param void
     * @return redirect
     */
    public function backPage()
    {
        // 詳細に訪問する前に経由したページに戻る処理
        switch(session('page')) {
            case 'list':
                return redirect('/book');
                break;
            case 'favorite':
                return redirect('/book/favorite');
                break;
            case 'rank':
                return redirect('/book/rank');
                break;
        }
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
        // 著者名情報の取得
        $authors = Author::all();

        // ジャンル名情報の取得
        $genres = Genre::all();

        return view('book.add_book', compact('authors', 'genres'));
    }

    /**
     * 図書追加処理
     * @param object $request
     * @return redirect
     */
    public function storeBook(BookRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only(['title', 'author_id', 'genre_id', 'content', 'memo']);

        // create処理
        Book::create($form);

        return redirect('/book')->with('success', '図書を追加しました');
    }

    /**
     * view表示
     * 図書編集ページ
     * @param int $book_id
     * @return view
     */
    public function editBook($book_id)
    {
        // 図書情報の取得
        $book = Book::find($book_id);

        // 著者情報の取得
        $authors = Author::all();

        // ジャンル情報の取得
        $genres = Genre::all();

        return view('book.edit_book', compact('book', 'authors', 'genres'));
    }

    /**
     * 図書更新処理
     * @param int $book_id
     * @param object $request
     * @return redirect
     */
    public function updateBook($book_id, BookRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only(['title', 'author_id', 'genre_id', 'content', 'memo']);

        // update処理
        Book::find($book_id)->update($form);
        
        return redirect("/book/detail/{$book_id}")->with('success', '図書情報を更新しました');
    }

    /**
     * view表示
     * 図書評価ページ
     * @param int $book_id
     * @return view
     */
    public function createRateBook($book_id)
    {
        // 図書情報の取得
        $book = Book::find($book_id);

        if ($book['rate']) {
            return view('book.edit_rate', compact('book'));
        } else {
            return view('book.rate_book', compact('book'));
        }
    }

    /**
     * 図書評価処理
     * @param int $book_id
     * @param object $request
     * @return redirect
     */
    public function storeRateBook($book_id, RateRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only('rate', 'comment');

        // create処理
        Book::find($book_id)->update($form);

        return redirect("/book/detail/{$book_id}")->with('success', '評価を追加しました');
    }

    /**
     * 図書評価更新処理
     * @param int $book_id
     * @param object $request
     * @return redirect
     */
    public function updateRateBook($book_id, RateRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only('rate', 'comment');

        // update処理
        Book::find($book_id)->update($form);
        
        return redirect ("/book/detail/{$book_id}")->with('success', '評価を更新しました');
    }

    /**
     * 図書評価削除処理
     * @param int $book_id
     * @return redirect
     */
    public function destroyRateBook($book_id)
    {
        // delete処理
        Book::find($book_id)->update([
            'rate' => 0,
            'comment' => '',
        ]);

        return redirect("/book/detail/{$book_id}")->with('success', '評価を削除しました');
    }

    /**
     * 図書削除処理
     * @param int $book_id
     * @return redirect
     */
    public function destroyBook($book_id)
    {
        // 削除対象の著書名を取得
        $name = Book::find($book_id)['title'];

        // delete処理
        Book::find($book_id)->delete();

        return redirect('/book')->with('success', "「{$name}」を削除しました");
    }
}
