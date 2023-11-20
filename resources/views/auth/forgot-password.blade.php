@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/forgot.css') }}">
@endsection

@section('content')
<div class="forgot-section">
    <div class="forgot-title">
        パスワードリセット
    </div>
    <div class="forgot-content">
        <form class="forgot-form" action="{{ route('password.email') }}" method="POST">
        @csrf
            <div class="forgot-item">
                <lable class="forgot-item__name">メールアドレス</lable>
                <input class="forgot-item__input" type="text" name="email" value="{{ old('email') }}" placeholder="入力欄" autofocus>
                <p class="forgot-item__error">
                @error('email')
                    {{ $errors->first('email') }}
                @enderror
                </p>
            </div>

            <button class="forgot-button">変更申請する</button>
            <a class="forgot-click" href="/login">
                ログインはこちら
            </a>
        </form>
    </div>
</div>
@endsection