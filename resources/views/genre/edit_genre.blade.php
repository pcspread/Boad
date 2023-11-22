@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/genre/edit_genre.css') }}">
@endsection

@section('content')
<div class="edit-section">
    <div class="edit-title">
        ジャンル編集
    </div>
    <div class="edit-content">
        <form class="edit-form">
            <div class="edit-item">
                <lable class="edit-item__name">ジャンル名</lable>
                <input class="edit-item__input" type="text" name="name" value="{{ old('name') }}" placeholder="入力欄" autofocus>
                <p class="edit-item__error">
                @error('name')
                    {{ $errors->first('name') }}
                @enderror
                </p>
            </div>
            <button class="edit-button update">更新する</button>
            <a class="edit-button back" href="/genre">戻る</a>
        </form>
    </div>
</div>
@endsection