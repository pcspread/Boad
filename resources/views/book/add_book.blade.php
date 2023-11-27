@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/add_book.css') }}">
@endsection

@section('content')
<div class="add-section">
    <div class="add-title">
        図書追加
    </div>
    <div class="add-content">
        <form class="add-form" action="/book/add" method="POST">
        @csrf
            <div class="add-item">
                <lable class="add-item__name" for="title">タイトル</lable>
                <input class="add-item__input" id="title" type="text" name="title" value="{{ old('title') }}" placeholder="入力欄" autofocus>
                <p class="add-item__error">
                @error('title')
                    {{ $errors->first('title') }}
                @enderror
                </p>
            </div>
            
            <div class="add-item">
                <lable class="add-item__name">著者名</lable>
                <select class="add-item__select" name="author_id">
                    @foreach ($authors as $author)
                    <option class="add-item__option" value="{{ $author['id'] }}">{{ $author['name'] }}</option>
                    @endforeach
                </select>
                <p class="add-item__error">
                </p>
            </div>
            <div class="add-item">
                <lable class="add-item__name">ジャンル</lable>
                <select class="add-item__select" name="genre_id">
                    @foreach ($genres as $genre)
                    <option class="add-item__option" value="{{ $genre['id'] }}">{{ $genre['name'] }}</option>
                    @endforeach
                </select>
                <p class="add-item__error">
                </p>
            </div>
            <div class="add-item">
                <lable class="add-item__name" for="content">内容</lable>
                <textarea class="add-item__textarea" name="content" id="content" maxlength="100" rows="3" placeholder="入力欄">{{ old('content') }}</textarea>
                <p class="add-item__error">
                    @error('content')
                    {{ $errors->first('content') }}
                    @enderror
                </p>
            </div>
            
            <div class="add-item">
                <lable class="add-item__name" for="memo">メモ</lable>
                <textarea class="add-item__textarea" name="memo" id="memo" rows="5" placeholder="入力欄">{{ old('memo') }}</textarea>
                <p class="add-item__error">
                @error('memo')
                    {{ $errors->first('memo') }}
                @enderror
                </p>
            </div>
            
            <button class="add-button">追加する</button>
            <a class="add-button back" href="/book">戻る</a>
        </form>
    </div>
</div>
@endsection