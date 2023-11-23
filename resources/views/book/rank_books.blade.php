@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/rank_books.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/rank_books.js') }}" defer></script>
@endsection

@section('content')
<div class="rank-section">
    <div class="rank-top">
        <h1 class="rank-title">ランキングリスト</h1>
    </div>
    <div class="rank-main">
        <div class="rank-main__block">
            1位<h2 class="rank-main__block-title"></h2>
            @for ($i = 0; $i < 3; $i++)
            <div class="rank-item">
                <p class="book-title">ケンタの冒険</p>
                <p class="book-genre">冒険</p>
                <p class="book-author">新井白石作</p>
                <a class="book-button" href="/book/detail/1"></a>
            </div>
            @endfor
        </div>
        <div class="rank-main__block">
            1位
        </div>
        <div class="rank-main__block">
            1位
        </div>
        <div class="rank-main__block">
            1位
        </div>
        <div class="rank-main__block">
            1位
        </div>
    </div>
</div>
@endsection