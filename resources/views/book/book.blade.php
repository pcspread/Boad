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
        <h2 class="main-title">ケンタの冒険</h2>
        <div class="main__top-block">
            <p class="main-genre">冒険</p>
            <p class="main-author">新井白石作</p>
            <div class="main-favorite">
                <form class="main-favorite__form" action="">
                    <button class="main-favorite__button">♥</button>
                </form>
                <form class="main-favorite__form" action="">
                    <button class="main-favorite__button on"></button>
                </form>
            </div>
        </div>
        <div class="main-content">
            <label class="main-content__title" for="">内容</label>
            <p class="main-content__text">ケンタが冒険に出るストーリーです。途中で様々な敵と出会う中で成長していく姿をご覧ください。</p>
        </div>
        <div class="main-rate">
            <label class="main-rate__title" for="">評価</label>
            <p class="main-rate__instance">★★★★★</p>
            <p class="main-rate__text">素晴らしい内容で、感動した。</p>
        </div>
        <div class="main-memo">
            <label class="main-memo__title" for="">メモ</label>
            <p class="main-memo__text">32ページまで読破。ケンタが冒険にでるきっかけとなった出来事に感動。今後、どういう風にケンタが成長していくのかとても楽しみ。</p>
        </div>
    </div>
</div>
@endsection