@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/rate_book.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/rate_book.js') }}"></script>
@endsection

@section('content')
<div class="rate-section">
    <div class="rate-title">
        図書評価
    </div>
    <div class="rate-content">
        <form class="rate-form">
            <div class="rate-item">
                <label class="rate-item__name">評価数</label>
                <label for="star1" class="rate-item__star-image 1">★</label>
                    <input class="rate-item__star 1" id="star1" type="radio" name="star" value="star1">
                <label for="star2" class="rate-item__star-image 2">★</label>
                    <input class="rate-item__star 2" id="star2" type="radio" name="star" value="star2">
                <label for="star3" class="rate-item__star-image 3">★</label>
                    <input class="rate-item__star 3" id="star3" type="radio" name="star" value="star3">
                <label for="star4" class="rate-item__star-image 4">★</label>
                    <input class="rate-item__star 4" id="star4" type="radio" name="star" value="star4">
                <label for="star5" class="rate-item__star-image 5">★</label>
                    <input class="rate-item__star 5" id="star5" type="radio" name="star" value="star5">
            </div>
            <div class="rate-item">
                <lable class="rate-item__name" for="comment">コメント</lable>
                <textarea name="comment" id="comment" rows="3" class="rate-item__textarea"></textarea>
                <p class="rate-item__error">
                @error('comment')
                    {{ $errors->first('comment') }}
                @enderror
                </p>
            </div>
            <button class="rate-button update">評価する</button>
            <a class="rate-button back" href="/book/detail/1">戻る</a>
        </form>
    </div>
</div>
@endsection