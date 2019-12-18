@extends('layouts.layout')
@section('content')
<div class="container">

    {{-- 記事内容 --}}
    <dl class="row">
        <dt class="col-md-2">アーティスト名：</dt>
        <dd class="col-md-10 h2">
            {{ $post->artist }}
        </dd>
        <dt class="col-md-2">公演名：</dt>
        <dd class="col-md-10 h3">
            {{ $post->title }}
        </dd>
        <dt class="col-md-2">開催日：</dt>
        <dd class="col-md-10">
            <time>{{ $post->date }}</time>
        </dd>
        <dt class="col-md-2">開催場所：</dt>
        <dd class="col-md-10">
            {{ $post->venu }}
        </dd>
    </dl>

    <hr>

    <div id="post-body">
        <span class="font-weight-bold">セットリスト：</span>
        <p>{{ $post->body }}</p>
    </div>

    <hr>

    <dl class="row">
        <dt class="col-md-2">投稿者：</dt>
        <dd class="col-md-10">
            <a href="{{ url('users/' . $post->user->id) }}">
                {{ $post->user->name }}
            </a>
        </dd>
        <dt class="col-md-2">投稿日時：</dt>
        <dd class="col-md-10">
            <time itemprop="dateCreated" datetime="{{ $post->created_at }}">
                {{ $post->created_at }}
            </time>
        </dd>
        <dt class="col-md-2">更新日時：</dt>
        <dd class="col-md-10">
            <time itemprop="dateModified" datetime="{{ $post->updated_at }}">
                {{ $post->updated_at }}
            </time>
        </dd>
    </dl>


    {{-- 編集・削除ボタン --}}
    <div class="edit">
        <a href="{{ url('posts/'.$post->id.'/edit') }}" class="btn btn-primary">
            編集
        </a>
        @component('components.btn-del')
            @slot('controller', 'posts')
            @slot('id', $post->id)
            @slot('name', $post->title)
        @endcomponent
    </div>

</div>
@endsection
