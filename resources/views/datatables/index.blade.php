@extends('partials.layout')

@section('content')
    <div class="container-fluid">
        <div class="text-center">
            <h3>Užsakymai</h3>
        </div>
    <table class="table table-striped table-bordered dt-responsive compact nowrap" cellspacing="0" width="80%" id="orders-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Vardas, Pavardė</th>
            <th>El. paštas</th>
            <th>Tel. nr.</th>
            <th>Užsakymo data</th>
            <th>Užsakymas baigtas</th>
            <th>Keisti užsakymo statusą</th>
        </tr>
        </thead>
    </table>
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
                            if (row.completed === false) {
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
                            if (row.completed === false) {
                                str = '<a class="complete-action-button" data-id="' + row.id + '" href="orders/makeComplete/'+ row.id +'" onclick="return confirm(\'Užsakymas bus įvykdytas. \')" class="success"><button>Užbaigti</button></a>';
                            } else {
                                str = '<a class="complete-action-button" data-id="' + row.id + '" href="orders/inComplete/' + row.id +'" onclick="return confirm(\'Ar tikrai norite grąžinti užsakymo statusą?\')" class="danger"><button>Atšaukti</button></a>';
                            }
                            var del = '<a class="complete-action-button" data-id="' + row.id + '" href="orders/Delete/'+ row.id +'" onclick="return confirm(\'Užsakymas bus ištrintas \')" class="success"><button>Ištrinti</button></a>';
                            return str + "    " + del;

                        }
                    }
                ],
                "order" : [[4, "desc"]],
                "language": {
                    "emptyTable": "Užsakymų nėra",
                    "info":           "Rodomas _PAGE_ iš _PAGES_ puslapių",
                    "lengthMenu": "Rodoma _MENU_ įrašų",
                    "search": "Ieškoti:",
                    "paginate": {
                        "first":      "Pirmas",
                        "last":       "Paskutinis",
                        "next":       "Kitas",
                        "previous":   "Ankstesnis"
                    }

                }
            });
        });
    </script>
@endpush