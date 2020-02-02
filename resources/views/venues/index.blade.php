@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>会場一覧</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">会場名</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($venues as $venue)
                    <tr>
                        <td><a href="{{ url('venues/'.$venue->id) }}">{{ $venue->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $venues->links() }}
</div>
@endsection
