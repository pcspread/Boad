@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/favorite_books.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/favorite_books.js') }}" defer></script>
@endsection

@section('content')
<div class="favorite-section">
    <div class="favorite-top">
        <h1 class="favorite-title">お気に入り</h1>
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
    @if (count($books) === 0)
    <div class="favorite-item__none">
        図書情報がございません
    </div>
    @endif
</div>
@endsection