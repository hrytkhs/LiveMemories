@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ログイン</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">メールアドレス</label>

                                <div class="col-md-7">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right">パスワード</label>

                                <div class="col-md-7">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            次回から自動的にログインする
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-3 mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        ログイン
                                    </button>

                                    <!-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            >>パスワードを忘れた方はこちら
                                        </a>
                                    @endif -->
                                </div>
                            </div>
                        </form>

                        <hr>

                        <div class="form-group row">
                            <label for="sns-login" class="col-md-9 offset-md-3 mt-3">― SNSアカウントでログイン ―</label>
                            <label for="twitter" class="col-md-9 offset-md-3">
                                <a href="{{ url('/login/twitter') }}" class="btn btn-s-twitter" style="">
                                    <span class="fab fa-twitter"></span>
                                    Twitterでログイン
                                </a>
                            </label>
                            <label for="github" class="col-md-9 offset-md-3">
                                <a href="{{ url('/login/github') }}" class="btn btn-s-github" style="">
                                    <span class="fab fa-github"></span>
                                    GitHubでログイン
                                </a>
                            </label>
                        </div>
                    </div>
                <div class="card-footer">
                    <ul class="offset-md-3">
                        <li>
                            テストユーザー：
                            <ul>
                                <li>ユーザー名： test</li>
                                <li>メールアドレス： test@gmail.com</li>
                                <li>パスワード： 123456</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
