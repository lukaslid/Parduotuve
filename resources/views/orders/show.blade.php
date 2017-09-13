@extends('partials.layout')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-9">
                @include('orders.create')
            </div>
            <div class="col">
                <h3>YOOOOO</h3>
                <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
                <p>Back to minus the navbar.</p>
            </div>
        </div>
    </div>
@endsection