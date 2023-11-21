@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/genre/genres.css') }}">
@endsection

@section('content')
<div class="genres-section">
    <div class="genres-top">
        <h1 class="genres-title">ジャンルリスト</h1>
        <div class="genres-add">
            <form class="genres-add__form" action="">
                <div class="genres-add__main">
                    <input class="genres-add__input" type="text">
                    <button class="genres-add__button">追加</button>
                </div>
                <p class="genres-add__error"></p>
            </form>
        </div>
    </div>
    <div class="genres-main">
        @for ($i = 0; $i < 10; $i++)
        <div class="genres-item">
            <p class="genre-name">キャベツ</p>
            <div class="genre-buttons">
                <a class="genre-click edit" href="">編集</a>
                <a class="genre-click delete" href="">削除</a>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection