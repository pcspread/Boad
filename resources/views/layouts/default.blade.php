<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This application is Boad.">
    <title>Boad</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layouts/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/default.css') }}">
    @yield('css')
    <script src="{{ asset('js/layouts/default.js') }}" defer></script>
    @yield('js')
</head>
<body>
    <header class="header" id="top">
        <div class="header-icon">
            <a class="header-icon__text" href="/">Boad</a>
        </div>

        <nav class="header-nav">
            <ul class="nav-list">
                @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/book">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/author">著者リスト</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/genre">ジャンルリスト</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/book/add">図書追加</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="favorite">お気に入り</a>
                </li>
                <li class="nav-item">
                    <form class="nav-form" action="/logout" method="POST">
                    @csrf
                        <button class="nav-button">ログアウト</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="register">新規登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">ログイン</a>
                </li>
                @endif
            </ul>
        </nav>
        
        <div class="burger">
            <div class="burger-line first"></div>
            <div class="burger-line second"></div>
            <div class="burger-line third"></div>
        </div>
        
        <div class="mask"></div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <aside class="aside">
        @if (session('message'))
            <div class="message">
                {{ session('message') }}
            </div>
        @endif

        <div class="upper">
            <a class="upper-click" href="#top"><</a>
        </div>
    </aside>
</body>
</html>