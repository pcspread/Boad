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
        <form class="edit-form" action="/edit" method="POST">
        @csrf
            <div class="edit-item">
                <lable class="edit-item__name">タイトル</lable>
                <input class="edit-item__input" type="text" name="email" value="{{ old('email') }}" placeholder="入力欄" autofocus>
                <p class="edit-item__error">
                @error('email')
                    {{ $errors->first('email') }}
                @enderror
                </p>
            </div>
            
            <div class="edit-item">
                <lable class="edit-item__name">著者名</lable>
                <select class="edit-item__select">
                    <option class="edit-item__option" value="">キャベツ</option>
                    <option class="edit-item__option" value="">レタス</option>
                    <option class="edit-item__option" value="">ピーマン</option>
                </select>
                <p class="edit-item__error">
                </p>
            </div>
            <div class="edit-item">
                <lable class="edit-item__name">ジャンル</lable>
                <select class="edit-item__select">
                    <option class="edit-item__option" value="">キャベツ</option>
                    <option class="edit-item__option" value="">レタス</option>
                    <option class="edit-item__option" value="">ピーマン</option>
                </select>
                <p class="edit-item__error">
                </p>
            </div>
            <div class="edit-item">
                <lable class="edit-item__name">内容</lable>
                <textarea class="edit-item__textarea" name="" id="" maxlength="100" rows="3"></textarea>
                <p class="edit-item__error">
                    @error('password')
                    {{ $errors->first('password') }}
                    @enderror
                </p>
            </div>
            
            <div class="edit-item">
                <lable class="edit-item__name">メモ</lable>
                <textarea class="edit-item__textarea" name="" id="" rows="5"></textarea>
                <p class="edit-item__error">
                @error('password')
                    {{ $errors->first('password') }}
                @enderror
                </p>
            </div>
            
            <button class="edit-button">更新する</button>
            <a class="edit-button back" href="/book/detail/1">戻る</a>
        </form>
    </div>
</div>
@endsection