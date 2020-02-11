<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF トークン --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LiveMemories</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/d66ee61711.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:#14121F;">
            <div class="container-fluid">
                <a class="navbar-brand site-name" href="{{ url('/') }}" style="font-size:30px;">
                    LiveMemories
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- Navbarの左側 --}}
                    <ul class="navbar-nav mr-auto ml-4" style="font-size:14px;">
                        {{-- 各種リンク --}}
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{ url('posts') }}">投稿</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{ url('artists') }}">アーティスト</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{ url('venues') }}">会場</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{ url('users') }}">ユーザー</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{ url('company') }}">運営会社</a>
                        </li>
                    </ul>

                    {{-- Navbarの右側 --}}
                    <ul class="navbar-nav ml-4" style="font-size:14px;">

                        {{-- 投稿ボタン --}}
                        <li class="nav-item mr-3 d-flex align-items-center">
                            <a href="{{ url('posts/create') }}" id="new-post" class="btn btn-success">投稿する</a>
                        </li>

                        {{-- 認証関連のリンク --}}
                        @guest
                            {{-- 「ログイン」と「ユーザー登録」へのリンク --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">新規登録</a>
                            </li>
                        @else
                            {{-- 「マイページ」と「ログアウト」のドロップダウンメニュー --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mb-3" aria-labelledby="dropdown-user">
                                    <a class="dropdown-item" href="{{ url('users/'.auth()->user()->id) }}">
                                        <i class="fas fa-user-circle"></i>
                                        マイページ
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        ログアウト
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- フラッシュ・メッセージ --}}
            @if (session('message'))
                <div class="container mt-2">
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                </div>
            @endif

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="container-fluid fixed-bottom">
            <div class="text-center text-muted" style="font-size: 12px;">© 2020 Fujiyama inc.</div>
        </footer>

    </div>

    {{-- JavaScript --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
