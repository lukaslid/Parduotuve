@extends('partials.layout')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                @include('partials.post')
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Užsakyti</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Užsakymo forma</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @include('orders.create')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.info')
        </div>
    </div>
@endsection
