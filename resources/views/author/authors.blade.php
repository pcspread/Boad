@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/author/authors.css') }}">
@endsection

@section('content')
<div class="authors-section">
    <div class="authors-top">
        <h1 class="authors-title">著者リスト</h1>
        <div class="authors-add">
            <form class="authors-add__form" action="">
                <div class="authors-add__main">
                    <input class="authors-add__input" type="text">
                    <button class="authors-add__button">追加</button>
                </div>
                <p class="authors-add__error"></p>
            </form>
        </div>
    </div>
    <div class="authors-main">
        @for ($i = 0; $i < 10; $i++)
        <div class="authors-item">
            <p class="author-name">キャベツ</p>
            <div class="author-buttons">
                <a class="author-click edit" href="">編集</a>
                <a class="author-click delete" href="">削除</a>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection