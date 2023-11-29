@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/author/authors.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/author/authors.js') }}"></script>
@endsection

@section('content')
<div class="authors-section">
    <div class="authors-top">
        <h1 class="authors-title">著者リスト</h1>
        <div class="authors-add">
            <form class="authors-add__form" action="/author" method="POST">
            @csrf
                <div class="authors-add__main">
                    <input class="authors-add__input" type="text" name="name" value="{{ old('name') }}" placeholder="新規著者名入力欄">
                    <button class="authors-add__button">追加</button>
                </div>
                <p class="authors-add__error">
                @error('name')
                    {{ $errors->first('name') }}
                @enderror
                </p>
            </form>
        </div>
    </div>
    <div class="authors-main">
        @foreach ($authors as $author)
        <div class="authors-item">
            <p class="author-name">{{ $author['name'] }}</p>
            <div class="author-buttons">
                <a class="author-click edit" href="author/{{ $author['id'] }}">編集</a>
                <form class="author-click__form" action="/author/{{ $author['id'] }}" method="POST">
                @method('DELETE')
                @csrf
                    <button class="author-click delete" onclick="return confirmDel()">削除</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection