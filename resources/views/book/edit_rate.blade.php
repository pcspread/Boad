@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/edit_rate.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/edit_rate.js') }}" defer></script>
@endsection

@section('content')
<div class="edit-section">
    <div class="edit-title">
        図書評価編集
    </div>
    <div class="edit-content">
        <form class="edit-form" action="/book/rate/{{ $book['id'] }}" method="POST">
        @method('PATCH')
        @csrf
            <div class="edit-item">
                <label class="edit-item__name">評価数</label>
                <label for="star1" class="edit-item__star-image image1">★</label>
                    <input class="edit-item__star star1" id="star1" type="radio" name="rate" value="1" @if ($book['rate'] == 1) checked @endif>
                <label for="star2" class="edit-item__star-image image2">★</label>
                    <input class="edit-item__star star2" id="star2" type="radio" name="rate" value="2" @if ($book['rate'] == 2) checked @endif>
                <label for="star3" class="edit-item__star-image image3">★</label>
                    <input class="edit-item__star star3" id="star3" type="radio" name="rate" value="3" @if ($book['rate'] == 3) checked @endif>
                <label for="star4" class="edit-item__star-image image4">★</label>
                    <input class="edit-item__star star4" id="star4" type="radio" name="rate" value="4" @if ($book['rate'] == 4) checked @endif>
                <label for="star5" class="edit-item__star-image image5">★</label>
                    <input class="edit-item__star star5" id="star5" type="radio" name="rate" value="5" @if ($book['rate'] == 5) checked @endif>
                <p class="edit-item__error">
                @error('rate')
                    {{ $errors->first('rate') }}
                @enderror
                </p>
            </div>
            <div class="edit-item">
                <lable class="edit-item__name" for="comment">コメント</lable>
                <textarea name="comment" id="comment" rows="3" class="edit-item__textarea">{{ $book['comment'] }}</textarea>
                <p class="edit-item__error">
                @error('comment')
                    {{ $errors->first('comment') }}
                @enderror
                </p>
            </div>
            <button class="edit-button update">更新する</button>
            <a class="edit-button delete" href="/book/rate/{{ $book['id'] }}/delete" onclick="return confirmDel()">削除する</a>
            <a class="edit-button back" href="/book/detail/{{ $book['id'] }}">戻る</a>
        </form>
    </div>
</div>
@endsection