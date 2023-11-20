@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-section">
    <div class="login-title">
        ログイン
    </div>
    <div class="login-content">
        <form class="login-form" action="/login" method="POST">
        @csrf
            <div class="login-item">
                <lable class="login-item__name">メールアドレス</lable>
                <input class="login-item__input" type="text" name="email" value="{{ old('email') }}" placeholder="入力欄" autofocus>
                <p class="login-item__error">
                @error('email')
                    {{ $errors->first('email') }}
                @enderror
                </p>
            </div>
            
            <div class="login-item">
                <lable class="login-item__name">パスワード</lable>
                <input class="login-item__input" type="password" name="password" placeholder="入力欄">
                <p class="login-item__error">
                @error('password')
                    {{ $errors->first('password') }}
                @enderror
                </p>
            </div>
            
            <button class="login-button">ログインする</button>
            <a class="login-click" href="{{ route('password.request') }}">
                パスワードを忘れた方はこちら
            </a>
        </form>
    </div>
</div>
@endsection