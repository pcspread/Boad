@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/books.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/books.js') }}" defer></script>
@endsection

@section('content')
<div class="books-section">
    <div class="books-top">
        <div class="books-title__group">
            <h1 class="books-title__text">図書リスト</h1>
            <a class="books-title__click" href="/book/add">図書追加</a>
        </div>
        <div class="books-search">
            <svg class="books-search__img" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
            <input class="books-search__input" type="text">
            <a class="books-search__fresh" href="/book">✖</a>
        </div>
    </div>
    <div class="books-main">
        @foreach ($books as $book)
        <div class="books-item">
            <p class="book-title">{{ $book['title'] }}</p>
            <p class="book-genre">{{ $book->genre['name'] }}</p>
            <p class="book-author">{{ $book->author['name'] }}</p>
            <p class="book-content">{{ $book['content'] }}</p>
            <a class="book-button" href="/book/detail/{{ $book['id'] }}">詳細</a>
        </div>
        @endforeach
        <div class="books-item__none"></div>
    </div>
</div>
@endsection