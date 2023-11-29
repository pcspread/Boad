@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/genre/genres.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/genre/genres.js') }}" defer></script>
@endsection

@section('content')
<div class="genres-section">
    <div class="genres-top">
        <h1 class="genres-title">ジャンルリスト</h1>
        <div class="genres-add">
            <form class="genres-add__form" action="/genre" method="POST">
            @csrf
                <div class="genres-add__main">
                    <input class="genres-add__input" type="text" name="name" value="{{ old('name') }}" placeholder="新規ジャンル名入力欄">
                    <button class="genres-add__button">追加</button>
                </div>
                <p class="genres-add__error">
                @error('name')
                    {{ $errors->first('name') }}
                @enderror
                </p>
            </form>
        </div>
    </div>
    <div class="genres-main">
        @foreach ($genres as $genre)
        <div class="genres-item">
            <p class="genre-name">{{ $genre['name'] }}</p>
            <div class="genre-buttons">
                <a class="genre-click edit" href="/genre/{{ $genre['id'] }}">編集</a>
                <form class="genre-click__form" action="/genre/{{ $genre['id'] }}" method="POST">
                @method('DELETE')
                @csrf
                    <button class="genre-click delete" onclick="return confirmDel()">削除</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection