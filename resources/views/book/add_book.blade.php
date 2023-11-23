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
        <form class="add-form" action="/add" method="POST">
        @csrf
            <div class="add-item">
                <lable class="add-item__name">タイトル</lable>
                <input class="add-item__input" type="text" name="email" value="{{ old('email') }}" placeholder="入力欄" autofocus>
                <p class="add-item__error">
                @error('email')
                    {{ $errors->first('email') }}
                @enderror
                </p>
            </div>
            
            <div class="add-item">
                <lable class="add-item__name">著者名</lable>
                <select class="add-item__select">
                    <option class="add-item__option" value="">キャベツ</option>
                    <option class="add-item__option" value="">レタス</option>
                    <option class="add-item__option" value="">ピーマン</option>
                </select>
                <p class="add-item__error">
                </p>
            </div>
            <div class="add-item">
                <lable class="add-item__name">ジャンル</lable>
                <select class="add-item__select">
                    <option class="add-item__option" value="">キャベツ</option>
                    <option class="add-item__option" value="">レタス</option>
                    <option class="add-item__option" value="">ピーマン</option>
                </select>
                <p class="add-item__error">
                </p>
            </div>
            <div class="add-item">
                <lable class="add-item__name">内容</lable>
                <textarea class="add-item__textarea" name="" id="" maxlength="100" rows="3"></textarea>
                <p class="add-item__error">
                    @error('password')
                    {{ $errors->first('password') }}
                    @enderror
                </p>
            </div>
            
            <div class="add-item">
                <lable class="add-item__name">メモ</lable>
                <textarea class="add-item__textarea" name="" id="" rows="5"></textarea>
                <p class="add-item__error">
                @error('password')
                    {{ $errors->first('password') }}
                @enderror
                </p>
            </div>
            
            <button class="add-button">追加する</button>
            <a class="add-button back" href="/book">戻る</a>
        </form>
    </div>
</div>
@endsection