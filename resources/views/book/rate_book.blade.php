@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/rate_book.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/book/rate_book.js') }}" defer></script>
@endsection

@section('content')
<div class="rate-section">
    <div class="rate-title">
        図書評価
    </div>
    <div class="rate-content">
        <form class="rate-form" action="/book/rate/{{ $book['id'] }}" method="POST">
        @csrf
            <div class="rate-item">
                <label class="rate-item__name">評価数</label>
                <label for="star1" class="rate-item__star-image image1">★</label>
                    <input class="rate-item__star star1" id="star1" type="radio" name="rate" value="1" @if (old('rate') == 1) checked @endif>
                <label for="star2" class="rate-item__star-image image2">★</label>
                    <input class="rate-item__star star2" id="star2" type="radio" name="rate" value="2" @if (old('rate') == 2) checked @endif>
                <label for="star3" class="rate-item__star-image image3">★</label>
                    <input class="rate-item__star star3" id="star3" type="radio" name="rate" value="3" @if (old('rate') == 3) checked @endif>
                <label for="star4" class="rate-item__star-image image4">★</label>
                    <input class="rate-item__star star4" id="star4" type="radio" name="rate" value="4" @if (old('rate') == 4) checked @endif>
                <label for="star5" class="rate-item__star-image image5">★</label>
                    <input class="rate-item__star star5" id="star5" type="radio" name="rate" value="5" @if (old('rate') == 5) checked @endif>
                <p class="rate-item__error">
                @error('rate')
                    {{ $errors->first('rate') }}
                @enderror
                </p>
            </div>
            <div class="rate-item">
                <lable class="rate-item__name" for="comment">コメント</lable>
                <textarea name="comment" id="comment" rows="3" class="rate-item__textarea">{{ old('comment') }}</textarea>
                <p class="rate-item__error">
                @error('comment')
                    {{ $errors->first('comment') }}
                @enderror
                </p>
            </div>
            <button class="rate-button update">評価する</button>
            <a class="rate-button back" href="/book/detail/{{ $book['id'] }}">戻る</a>
        </form>
    </div>
</div>
@endsection