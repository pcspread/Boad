@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/edit_book.css') }}">
@endsection

@section('content')
<div class="edit-section">
    <div class="edit-title">
        図書編集
    </div>
    <div class="edit-content">
        <form class="edit-form" action="/book/edit/{{ $book['id'] }}" method="POST">
        @csrf
            <div class="edit-item">
                <lable class="edit-item__name" for="title">タイトル</lable>
                <input class="edit-item__input" type="text" name="title" value="{{ $book['title'] }}" placeholder="入力欄" autofocus>
                <p class="edit-item__error">
                @error('title')
                    {{ $errors->first('title') }}
                @enderror
                </p>
            </div>
            
            <div class="edit-item">
                <lable class="edit-item__name">著者名</lable>
                <select class="edit-item__select" name="author_id">
                    @foreach ($authors as $author)
                    <option class="edit-item__option" value="{{ $author['id'] }}" @if ($book['author_id'] == $author['id']) selected @endif>{{ $author['name'] }}</option>
                    @endforeach
                </select>
                <p class="edit-item__error">
                </p>
            </div>
            <div class="edit-item">
                <lable class="edit-item__name">ジャンル</lable>
                <select class="edit-item__select" name="genre_id">
                    @foreach ($genres as $genre)
                    <option class="edit-item__option" value="{{ $genre['id'] }}" @if ($book['genre_id'] == $genre['id']) selected @endif>{{ $genre['name'] }}</option>
                    @endforeach
                </select>
                <p class="edit-item__error">
                </p>
            </div>
            <div class="edit-item">
                <lable class="edit-item__name" for="content">内容</lable>
                <textarea class="edit-item__textarea" name="content" id="content" maxlength="100" rows="3" placeholder="入力欄">{{ $book['content'] }}</textarea>
                <p class="edit-item__error">
                    @error('content')
                    {{ $errors->first('content') }}
                    @enderror
                </p>
            </div>
            
            <div class="edit-item">
                <lable class="edit-item__name" for="memo">メモ</lable>
                <textarea class="edit-item__textarea" name="memo" id="memo" rows="5" placeholder="入力欄">{{ $book['memo'] }}</textarea>
                <p class="edit-item__error">
                @error('memo')
                    {{ $errors->first('memo') }}
                @enderror
                </p>
            </div>
            
            <button class="edit-button">更新する</button>
            <a class="edit-button back" href="/book/detail/{{ $book['id'] }}">戻る</a>
        </form>
    </div>
</div>
@endsection