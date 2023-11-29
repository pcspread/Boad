@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/author/edit_author.css') }}">
@endsection

@section('content')
<div class="edit-section">
    <div class="edit-title">
        著者編集
    </div>
    <div class="edit-content">
        <form class="edit-form" action="/author/{{ $author['id'] }}" method="POST">
        @csrf
            <div class="edit-item">
                <lable class="edit-item__name">著者名</lable>
                <input class="edit-item__input" type="text" name="name" value="{{ $author['name'] }}" placeholder="入力欄" autofocus>
                <p class="edit-item__error">
                @error('name')
                    {{ $errors->first('name') }}
                @enderror
                </p>
            </div>
            <button class="edit-button update">更新する</button>
            <a class="edit-button back" href="/author">戻る</a>
        </form>
    </div>
</div>
@endsection