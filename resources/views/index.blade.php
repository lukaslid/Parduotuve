@extends('partials.layout')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                @include('orders.create')
            </div>
            <div class="col">
            @include('partials.info')
            </div>
        </div>
    </div>
@endsection