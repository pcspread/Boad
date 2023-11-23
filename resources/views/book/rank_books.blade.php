@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/rank_books.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/rank_books.js') }}" defer></script>
@endsection

@section('content')
<div class="favorite-section">
    <div class="favorite-top">
        <h1 class="favorite-title">お気に入りリスト</h1>
    </div>
    <div class="favorite-main">
        @for ($i = 0; $i < 10; $i++)
        <div class="favorite-item">
            <p class="book-title">ケンタの冒険</p>
            <p class="book-genre">冒険</p>
            <p class="book-author">新井白石作</p>
            <p class="book-content">ケンタが冒険に出るストーリーです。途中で様々な敵と出会う中で成長していく姿をご覧ください。</p>
            <a class="book-button" href="/book/detail/1">詳細</a>
        </div>
        @endfor
    </div>
</div>
@endsection