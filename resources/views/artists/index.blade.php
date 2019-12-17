@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>アーティスト一覧</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">アーティスト名</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td><a href="{{ url('artists/'.$artist->id) }}">{{ $artist->artist }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $artists->links() }}
</div>
@endsection
