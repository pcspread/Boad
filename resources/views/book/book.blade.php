@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/book.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/book.js') }}" defer></script>
@endsection

@section('content')
<div class="book-section">
    <div class="book-top">
        <h1 class="book-title">図書詳細</h1>
        <div class="book-buttons">
            <a class="book-button back" href="/book">戻る</a>
            <a class="book-button edit" href="/book/edit/1">編集</a>
            <a class="book-button rate" href="/book/rate/1">評価</a>
            <a class="book-button delete" href="">削除</a>
        </div>
    </div>

    <div class="book-main">
        <h2 class="main-title">{{ $book['title'] }}</h2>
        <div class="main__top-block">
            <p class="main-genre">{{ $book->genre['name'] }}</p>
            <p class="main-author">{{ $book->author['name'] }}</p>
            <div class="main-favorite">
                @if (empty($favorite))
                <form class="main-favorite__form" action="/book/detail/{{ $book['id'] }}" method="POST">
                @csrf
                    <button class="main-favorite__button">♥</button>
                </form>
                @else
                <form class="main-favorite__form" action="/book/detail/{{ $book['id'] }}" method="POST">
                @method('DELETE')
                @csrf
                    <button class="main-favorite__button on">♥</button>
                </form>
                @endif
            </div>
        </div>
        <div class="main-content">
            <label class="main-content__title" for="">内容</label>
            <p class="main-content__text">{{ $book['content'] }}</p>
        </div>
        @if ($book['comment'])
        <div class="main-rate">
            <label class="main-rate__title" for="">評価</label>
            <p class="main-rate__instance">{{ $book['rate'] }}</p>
            <p class="main-rate__text">{{ $book['comment'] }}</p>
        </div>
        @endif
        <div class="main-memo">
            <label class="main-memo__title" for="">メモ</label>
            <p class="main-memo__text">{{ $book['memo'] ?? 'メモがございません' }}</p>
        </div>
    </div>
</div>
@endsection