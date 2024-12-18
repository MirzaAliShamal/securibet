@extends('layouts.admin')

@section('page-title', 'List of Betting Tools')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Betting Tools</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">List of Betting Tools</h4>
                    <p class="text-muted mb-3">
                        Here is the list of all betting tools
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            var table = $('#datatable').DataTable({
                "sort": false,
                "ordering": false,
                "pagingType": "full_numbers",
                "processing": true,
                "serverSide": true,
                "lengthMenu": [
                    [25, 50, 150, -1],
                    [25, 50, 150, "All"]
                ],
                ajax: {
                    "url" : "/admin/betting-tools/fetch",
                    // "data" : function(d) {
                    //     d.joined_from = $('[name="joined_from"]').val();
                    //     d.joined_to = $('[name="joined_to"]').val();
                    // }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'link', name: 'link'},
                    {
                        class: 'td-actions text-end',
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        sorting: false,
                        searchable: false
                    },
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }
            });
        });
    </script>
@endsection
