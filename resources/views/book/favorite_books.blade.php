@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/favorite_books.css') }}">
@endsection

@section('content')
<div class="favorite-section">
    <div class="favorite-top">
        <h1 class="favorite-title">お気に入りリスト</h1>
    </div>
    <div class="favorite-main">
        @foreach ($books as $book)
        <div class="favorite-item">
            <p class="book-title">{{ $book['title'] }}</p>
            <p class="book-genre">{{ $book->genre['name'] }}</p>
            <p class="book-author">{{ $book->author['name'] }}</p>
            <p class="book-content">{{ $book['content'] }}</p>
            <a class="book-button" href="/book/detail/{{ $book['id'] }}">詳細</a>
        </div>
        @endforeach
    </div>
</div>
@endsection