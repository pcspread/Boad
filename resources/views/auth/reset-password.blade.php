@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/reset.css') }}">
@endsection

@section('content')
<div class="reset-section">
    <div class="reset-title">
        パスワード変更
    </div>
    <div class="reset-content">
        <form class="reset-form" action="{{ route('password.update') }}" method="POST">
        @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <div class="reset-item">
                <lable class="reset-item__name">メールアドレス</lable>
                <input class="reset-item__input" type="text" name="email" value="{{ old('email') }}" placeholder="入力欄">
                <p class="reset-item__error">
                @error('email')
                    {{ $errors->first('email') }}
                @enderror
                </p>
            </div>
            
            <div class="reset-item">
                <lable class="reset-item__name">パスワード</lable>
                <input class="reset-item__input" type="password" name="password" placeholder="入力欄">
                <p class="reset-item__error">
                @error('password')
                    {{ $errors->first('password') }}
                @enderror
                </p>
            </div>
            
            <div class="reset-item">
                <lable class="reset-item__name">確認用パスワード</lable>
                <input class="reset-item__input" type="password" name="password_confirmation" placeholder="入力欄">
                <p class="reset-item__error">
                @error('password_confirmation')
                    {{ $errors->first('password_confirmation') }}
                @enderror
                </p>
            </div>

            <button class="reset-button">変更する</button>
        </form>
    </div>
</div>
@endsection