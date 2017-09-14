@extends('partials.layout')

@section('content')
    <div class="container">
        <div class="row">
    <table class="table table-bordered" id="orders-table">
        <thead>
        <tr>
            <th>Pilnas vardas</th>
            <th>El. paštas</th>
            <th>Tel. nr.</th>
            <th>Užsakymo kiekis</th>
            <th>Užsakymo data</th>
        </tr>
        </thead>
    </table>
        </div>
    </div>
@stop

@push('scripts')
    <script type="text/javascript">
        $(function() {
            $('#orders-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatables.getorders') !!}',
                columns: [
                    { data: 'full_name', name: 'full_name' },
                    { data: 'email', name: 'email' },
                    { data: 'number', name: 'number' },
                    { data: 'amount', name: 'amount' },
                    { data: 'created_at', name: 'created_at' }
                ]
            });
        });
    </script>
@endpush