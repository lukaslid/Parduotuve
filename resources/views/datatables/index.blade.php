@extends('partials.layout')

@section('content')
    <div class="container">
        <div class="row">
    <table class="table table-bordered" id="orders-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Amount</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
    </table>
        </div>
    </div>
@stop

@push('scripts')
    <script>
        $(function() {
            $('#orders-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatables.getorders') !!}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'number', name: 'number' },
                    { data: 'amount', name: 'amount' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });
        });
    </script>
@endpush