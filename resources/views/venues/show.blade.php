@extends('layouts.layout')
@section('content')
<div class="container offset-md-3 col-md-6 offset-md-3">
    <h2 class="mb-4">{{ $venue->name }}</h2>

    {{-- 会場の情報 --}}
    <div class="table-responsive mb-2">
        <table class="table table-bordered table-condensed">
            <tbody>
                <tr>
                    <th>住所</th>
                    <td>{{ $venue->address }}</td>
                </tr>
                <tr>
                    <th>ホームページ</th>
                    <td>
                        <a href="{{ $venue->venue_site_url }}">
                            {{ $venue->venue_site_url }}
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <dl class="row">
        <dd class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="{{ $venue->map_url }}" allowfullscreen=""></iframe>
            </div>
        </dd>
    </dl>

</div>
@endsection
