@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book/rank_books.css') }}">
@endsection

@section('content')
<div class="rank-section">
    <div class="rank-top">
        <h1 class="rank-title">ランキング</h1>
    </div>
    <div class="rank-main">
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">1位</h2>
            <div class="rank-item__group">
                @foreach ($first as $item)
                <div class="rank-item">
                    <p class="book-title">{{ $item['title'] }}</p>
                    <div class="rank-item__content">
                        <p class="book-genre">{{ $item->genre['name'] }}</p>
                        <p class="book-author">{{ $item->author['name'] }}</p>
                    </div>
                    <a class="book-button" href="/book/detail/{{ $item['id'] }}"></a>
                </div>
                @endforeach
                @if (count($first) === 0)
                <div class="none-rank">
                    図書情報がございません
                </div>
                @endif
            </div>
        </div>
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">2位</h2>
            <div class="rank-item__group">
                @foreach ($second as $item)
                <div class="rank-item">
                    <p class="book-title">{{ $item['title'] }}</p>
                    <div class="rank-item__content">
                        <p class="book-genre">{{ $item->genre['name'] }}</p>
                        <p class="book-author">{{ $item->author['name'] }}</p>
                    </div>
                    <a class="book-button" href="/book/detail/{{ $item['id'] }}"></a>
                </div>
                @endforeach
                @if (count($second) === 0)
                <div class="none-rank">
                    図書情報がございません
                </div>
                @endif
            </div>
        </div>
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">3位</h2>
            <div class="rank-item__group">
                @foreach ($third as $item)
                <div class="rank-item">
                    <p class="book-title">{{ $item['title'] }}</p>
                    <div class="rank-item__content">
                        <p class="book-genre">{{ $item->genre['name'] }}</p>
                        <p class="book-author">{{ $item->author['name'] }}</p>
                    </div>
                    <a class="book-button" href="/book/detail/{{ $item['id'] }}"></a>
                </div>
                @endforeach
                @if (count($third) === 0)
                <div class="none-rank">
                    図書情報がございません
                </div>
                @endif
            </div>
        </div>
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">4位</h2>
            <div class="rank-item__group">
                @foreach($fourth as $item)
                <div class="rank-item">
                    <p class="book-title">{{ $item['title'] }}</p>
                    <div class="rank-item__content">
                        <p class="book-genre">{{ $item->genre['name'] }}</p>
                        <p class="book-author">{{ $item->author['name'] }}</p>
                    </div>
                    <a class="book-button" href="/book/detail/{{ $item['id'] }}"></a>
                </div>
                @endforeach
                @if (count($fourth) === 0)
                <div class="none-rank">
                    図書情報がございません
                </div>
                @endif
            </div>
        </div>
        <div class="rank-main__block">
            <h2 class="rank-main__block-title">5位</h2>
            <div class="rank-item__group">
                @foreach ($fifth as $item)
                <div class="rank-item">
                    <p class="book-title">{{ $item['title'] }}</p>
                    <div class="rank-item__content">
                        <p class="book-genre">{{ $item->genre['name'] }}</p>
                        <p class="book-author">{{ $item->author['name'] }}</p>
                    </div>
                    <a class="book-button" href="/book/detail/{{ $item['id'] }}"></a>
                </div>
                @endforeach
                @if (count($fifth) === 0)
                <div class="none-rank">
                    図書情報がございません
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection