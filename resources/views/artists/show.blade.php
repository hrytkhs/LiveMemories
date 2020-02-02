@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>" {{ $artist->artist }} "のプロフィール</h2>

    {{-- アーティストの情報 --}}
    <dl class="row mt-4">
        <dt class="col-md-12 mt-3 mb-1">プロフィール：</dt>
        <dd class="col-md-12 mb-3">
            {{ $artist->profile }}
        </dd>
        <dt class="col-md-12  mt-3 mb-1">オフィシャルサイト：</dt>
        <dd class="col-md-12 mb-3">
            <a href="{{ $artist->artist_site_url }}">
                {{ $artist->artist_site_url }}
            </a>
        </dd>
        <dt class="col-md-12 mt-3 mb-1">オフィシャルビデオ：</dt>
        <dd class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $artist->video_url }}" allowfullscreen></iframe>
            </div>
        </dd>
    </dl>

</div>
@endsection
