@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/verify.css') }}">
@endsection

@section('content')
<div class="verify-section">
    <div class="verify-title">
        <h1 class="verify-title__text">メール認証</h1>
    </div>
    <div class="verify-content">
        <p class="verify-text">
            この度は、Boadをご利用いただき、誠にありがとうございます。<br />
            ご本人様確認のため、メールアドレスに、メール認証用のメールを送信しました。<br />
            メールに記載のリンクへアクセスいただくと、本登録が完了します。<br />
        </p>
        
        <a class="verify-click" href="/login">
            ログインはこちら
        </a>
    </div>
</div>
@endsection