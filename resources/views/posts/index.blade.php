@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row align-items-center mb-1">
        <div class="col">
            <h2>投稿一覧</h2>
        </div>

        <div class="col-md-5 d-flex flex-column align-items-end">
            {{-- 検索フォーム --}}
            <form class="form-inline" action="{{ route('posts.search') }}" method="get">
                <input type="text" class="form-control-sm mr-1" placeholder="検索..." name="search">
                <button type="submit" class="btn btn-outline-success fas fa-search"> 検索</button>
            </form>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col d-flex flex-column align-items-end">
            @isset($search_result)
            <h5>{{ $search_result }}</h5>
            @endisset
        </div>
    </div>

    @foreach ($posts as $post)
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title h5 mb-4">
                    公演名 ： <a class="card-link font-weight-bold" href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                </div>
                <div class="card-subtitle h6">
                    開催日 ： {{ $post->date }}
                    <br>
                    アーティスト名：{{ $post->artist }}
                    <br>
                    投稿者：{{ $post->user->name }}
                    <span class="float-right">
                        投稿日時： {{ $post->created_at->format('Y.m.d') }}
                    </span>
                </div>
            </div>
        </div>
    @endforeach

    @if(isset($search_query))
        {{ $posts->appends(['search' => $search_query])->links() }}
    @else
        {{ $posts->links() }}
    @endif

</div>
@endsection
