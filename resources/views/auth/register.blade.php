@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<div class="register-section">
    <div class="register-title">
        新規登録
    </div>
    <div class="register-content">
        <form class="register-form" action="/register" method="POST">
        @csrf
            <div class="register-item">
                <lable class="register-item__name">ユーザー名</lable>
                <input class="register-item__input" type="text" name="name" value="{{ old('name') }}" placeholder="入力欄" autofocus>
                <p class="register-item__error">
                @error('name')
                    {{ $errors->first('name') }}
                @enderror
                </p>
            </div>
            
            <div class="register-item">
                <lable class="register-item__name">メールアドレス</lable>
                <input class="register-item__input" type="text" name="email" value="{{ old('email') }}" placeholder="入力欄">
                <p class="register-item__error">
                    @error('email')
                        {{ $errors->first('email') }}
                    @enderror
                </p>
            </div>
            
            <div class="register-item">
                <lable class="register-item__name">パスワード</lable>
                <input class="register-item__input" type="password" name="password" placeholder="入力欄">
                <p class="register-item__error">
                @error('password')
                    {{ $errors->first('password') }}
                @enderror
                </p>
            </div>
            
            <div class="register-item">
                <lable class="register-item__name">確認用パスワード</lable>
                <input class="register-item__input" type="password" name="password_confirmation" placeholder="入力欄">
                <p class="register-item__error">
                @error('password_confirmation')
                    {{ $errors->first('password_confirmation') }}
                @enderror
                </p>
            </div>

            <button class="register-button">登録する</button>
        </form>
    </div>
</div>
@endsection