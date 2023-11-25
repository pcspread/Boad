@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/rank_books.css') }}">
@endsection

@section('content')
<div class="rank-section">
    <div class="rank-top">
        <h1 class="rank-title">ランキングリスト</h1>
    </div>
    <div class="rank-main">
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">1位</h2>
            <div class="rank-item__group">
                @for ($i = 0; $i < 3; $i++)
                <div class="rank-item">
                    <p class="book-title">ケンタの冒険</p>
                    <div class="rank-item__content">
                        <p class="book-genre">冒険</p>
                        <p class="book-author">新井白石作</p>
                    </div>
                    <a class="book-button" href="/book/detail/1"></a>
                </div>
                @endfor
            </div>
        </div>
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">2位</h2>
            <div class="rank-item__group">
                @for ($i = 0; $i < 3; $i++)
                <div class="rank-item">
                    <p class="book-title">ケンタの冒険</p>
                    <div class="rank-item__content">
                        <p class="book-genre">冒険</p>
                        <p class="book-author">新井白石作</p>
                    </div>
                    <a class="book-button" href="/book/detail/1"></a>
                </div>
                @endfor
            </div>
        </div>
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">3位</h2>
            <div class="rank-item__group">
                @for ($i = 0; $i < 3; $i++)
                <div class="rank-item">
                    <p class="book-title">ケンタの冒険</p>
                    <div class="rank-item__content">
                        <p class="book-genre">冒険</p>
                        <p class="book-author">新井白石作</p>
                    </div>
                    <a class="book-button" href="/book/detail/1"></a>
                </div>
                @endfor
            </div>
        </div>
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">4位</h2>
            <div class="rank-item__group">
                @for ($i = 0; $i < 3; $i++)
                <div class="rank-item">
                    <p class="book-title">ケンタの冒険</p>
                    <div class="rank-item__content">
                        <p class="book-genre">冒険</p>
                        <p class="book-author">新井白石作</p>
                    </div>
                    <a class="book-button" href="/book/detail/1"></a>
                </div>
                @endfor
            </div>
        </div>
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">5位</h2>
            <div class="rank-item__group">
                @for ($i = 0; $i < 3; $i++)
                <div class="rank-item">
                    <p class="book-title">ケンタの冒険</p>
                    <div class="rank-item__content">
                        <p class="book-genre">冒険</p>
                        <p class="book-author">新井白石作</p>
                    </div>
                    <a class="book-button" href="/book/detail/1"></a>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection