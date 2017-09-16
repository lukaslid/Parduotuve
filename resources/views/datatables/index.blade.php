@extends('partials.layout')

@section('content')
    <div class="container">
        <div class="text-center">
            <h3>Užsakymai</h3>
        </div>
        <div class="row">
    <table class="table table-bordered" id="orders-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Vardas, Pavardė</th>
            <th>El. paštas</th>
            <th>Tel. nr.</th>
            <th>Užsakymo data</th>
            <th>Užsakymas baigtas</th>
            <th>bl</th>
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
                    { data: 'id', name: 'id', visible: false, searchable: false },
                    { data: 'full_name', name: 'full_name' },
                    { data: 'email', name: 'email' },
                    { data: 'number', name: 'number' },
                    { data: 'created_at', name: 'created_at' },
                    {
                        data: 'completed',
                        name: 'completed',
                        "render": function (data, type, row, meta) {
                            var str;
                            if (row.completed === 0) {
                                str = "Ne";
                            } else{
                                str = "Taip";
                            }
                            return str;
                        }
                    },
                    {
                        "targets": 5,//number of column you want
                        "data": "completed",
                        "render": function (data, type, row, meta) {
                            var str;
                            if (row.completed === 0) {
                                str = '<a class="complete-action-button" data-id="' + row.id + '" href="orders/makeComplete/'+ row.id +'" class="success">Complete</a>';

                            } else {
                                str = '<a class="complete-action-button" data-id="' + row.id + '" href="orders/unComplete/' + row.id +'" class="danger">Uncomplete</a>';
                                str.href += data.id;
                            }
                            return str;
                        }
                    }
                ],
                "order" : [[3, "desc"]]
            });
        });
    </script>
@endpush