@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/books.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/books.js') }}"></script>
@endsection

@section('content')
<div class="books-section">
    <div class="books-top">
        <h1 class="books-title">図書リスト</h1>
        <div class="books-search">
                <svg class="books-search__img" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
            <input class="books-search__input" type="text">
        </div>
    </div>
    <div class="books-main">
        @for ($i = 0; $i < 10; $i++)
        <div class="books-item">
            <p class="book-title">ケンタの冒険</p>
            <p class="book-genre">冒険</p>
            <p class="book-author">新井白石作</p>
            <p class="book-content">ケンタが冒険に出るストーリーです。途中で様々な敵と出会う中で成長していく姿をご覧ください。</p>
            <button class="book-button">詳細</button>
        </div>
        @endfor
    </div>
</div>
@endsection