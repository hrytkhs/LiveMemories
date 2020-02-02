@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>投稿の編集</h1>
    <form action="{{ url('posts/'.$post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="artist">アーティスト名 ※</label>
            <input id="artist" type="text" class="form-control" name="artist" value="{{ $post->artist }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="title">公演名 ※</label>
            <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="date">開催日 ※</label><br>
            <input id="date" type="date" class="form-control w-50" name="date" value="{{ $post->date }}" required>
        </div>
        <div class="form-group">
            <label for="venue">会場名</label>
            <select name="venue_id" class="form-control">
                @if(isset($venue_item))
                    <option value="{{ $venue_item->id }}">{{ $venue_item->name }}</option>
                    <option value=""></option>
                    @foreach ($venue_items as $venue)
                    <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                    @endforeach
                @else
                    <option value=""></option>
                    @foreach ($venue_items as $venue)
                    <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="body">公演メモ</label>
            <textarea id="body" class="form-control" name="body" rows="8" placeholder="セットリスト・感想など">{{ $post->body }}</textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary float-right">更新</button>
    </form>
    <p>※入力必須</p>
</div>
@endsection
