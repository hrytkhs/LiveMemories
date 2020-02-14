@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>" {{ $user->name }} "のマイページ</h2>

    {{-- ユーザーの情報 --}}
    <dl class="row mt-4">
        <dt class="col-md-2">ID：</dt>
        <dd class="col-md-10">{{ $user->id }}</dd>
        <dt class="col-md-2">ユーザー名：</dt>
        <dd class="col-md-10">{{ $user->name }}</dd>
    </dl>

    {{-- ユーザーの編集・削除ボタン --}}
    <div class="mb-4">
        <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">
            編集
        </a>
        @component('components.btn-del')
            @slot('controller', 'users')
            @slot('id', $user->id)
            @slot('name', $user->title)
        @endcomponent
    </div>

    <hr>

    {{-- ユーザーの投稿一覧 --}}
    <h5>最近の投稿</h5>
    @foreach ($user->posts as $post)
        <div class="card mb-3">
            <div class="card-header">
                <div class="card-title h5">
                    公演名 ： <a class="card-link font-weight-bold" href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                </div>
                <div class="card-text">
                    開催日 ： {{ $post->date }}
                    <br>
                    アーティスト：{{ $post->artist }}
                    <br>
                    投稿日時： {{ $post->created_at->format('Y.m.d') }}
                </div>
                {{-- 投稿の編集・削除ボタン --}}
                <div class="float-right">
                    <a href="{{ url('posts/' . $post->id . '/edit') }}" class="btn btn-primary">
                        編集
                    </a>
                    @component('components.btn-del')
                        @slot('controller', 'posts')
                        @slot('id', $post->id)
                        @slot('name', $post->title)
                    @endcomponent
                </div>
            </div>
        </div>
    @endforeach
    {{ $user->posts->links() }}
</div>
@endsection
