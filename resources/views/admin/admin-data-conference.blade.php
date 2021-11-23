@extends('admin.layouts.index')


@section('title')
SIPIT | Admin Data Conference
@endsection


@section('optional-css')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="{{ asset('css/admin/data-conference.css') }}" rel="stylesheet">
@endsection


@section('content')
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="box">
            <h1>Conference</h1>
            <h4 class="d-flex align-items-center justify-content-between">
                <small>Data Conference</small>
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i> </a>
                    <a href="{{ route('admin.adminAddConference') }}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Conference</a>
                </div>
            </h4>
            <form method="post" name="proses">
                <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th class="admin-data-journal-nomor">No</th>
                                <th class="admin-data-journal-title">Name</th>
                                <th class="admin-data-journal-area">Long Name</th>
                                <th class="admin-data-journal-score">Area</th>
                                <th class="admin-data-journal-institute">Organizer</th>
                                <th class="admin-data-journal-link-website">Link Website</th>
                                <th class="admin-data-journal-location">Location</th>
                                <th class="admin-data-journal-date">Date</th>
                                <th class="admin-data-journal-action">action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </form>
            {{-- <div class="box pull-right">
                <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i>Hapus</button>
            </div> --}}
        </div>
    </div>
</div>
@endsection


@section('optional-js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(function () {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.adminDataConference.list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'long_name', name: 'long_name'},
                {data: 'area', name: 'area'},
                {data: 'organizer', name: 'organizer'},
                {data: 'link_website', name: 'link_website'},
                {data: 'location', name: 'location'},
                {data: 'date', name: 'date'},
                {
                    data: 'action',
                    name: 'action'
                },

            ],
        });

    });
</script>
@endsection
