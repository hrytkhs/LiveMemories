@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>公演情報の投稿</h1>
    <form action="{{ url('posts') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="artist">アーティスト名</label>
            <input id="artist" type="text" class="form-control" name="artist" required autofocus>
        </div>
        <div class="form-group">
            <label for="title">公演名</label>
            <input id="title" type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label for="date">開催日</label><br>
            <input id="date" type="date" class="form-control w-50" name="date" value="<?php echo date('Y-m-d');?>" required>
        </div>
        <div class="form-group">
            <label for="venu">会場名</label>
            <input id="venu" type="text" class="form-control" name="venu" required>
        </div>
        <div class="form-group">
            <label for="body">セットリスト</label>
            <textarea id="body" class="form-control" name="body" rows="8" required placeholder="例：&#13;&#10;1. song1&#13;&#10;2. song2&#13;&#10;3. song3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary float-right">投稿</button>
    </form>
</div>
@endsection
