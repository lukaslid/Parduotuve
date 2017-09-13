@extends('partials.layout')


@section('content')
    <div class="container">
        @foreach ($orders as $order)
            <pre> {{$order}}</pre>
        @endforeach

    </div>
@endsection