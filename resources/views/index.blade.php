@extends('partials.layout')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8 text-justify">
                @include('partials.post')
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Užsakyti</button>
                </div>

                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel">Užsakymo forma</h5>
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
