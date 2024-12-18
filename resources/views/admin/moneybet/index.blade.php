@extends('layouts.admin')

@section('page-title', 'List of Money Bets')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Money Bets</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">List of Money Bets</h4>
                    <p class="text-muted mb-3">
                        Here is the list of all money bets
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Country</th>
                                <th>League</th>
                                <th>Total Score</th>
                                <th>Date Time</th>
                                <th>Teams</th>
                                <th>Combine Percentage</th>
                                <th>Odds</th>
                                <th>URL</th>
                                <th>Status</th>
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
                    "url" : "/admin/moneybets/fetch",
                    // "data" : function(d) {
                    //     d.joined_from = $('[name="joined_from"]').val();
                    //     d.joined_to = $('[name="joined_to"]').val();
                    // }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'country', name: 'country.name'},
                    {data: 'league', name: 'league'},
                    {data: 'total_score', name: 'total_score'},
                    {data: 'datetime', name: 'datetime'},
                    {data: 'teams', name: 'teams'},
                    {data: 'combine_percentage', name: 'combine_percentage'},
                    {data: 'odds', name: 'odds'},
                    {data: 'url', name: 'url'},
                    {data: 'status', name: 'status'},
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
