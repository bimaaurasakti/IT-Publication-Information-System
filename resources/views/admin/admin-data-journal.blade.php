@extends('admin.layouts.index')


@section('title')
SIPIT | Admin Data Journal
@endsection


@section('optional-css')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="{{ asset('css/admin/data-jounal.css') }}" rel="stylesheet">
@endsection


@section('content')
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="box">
            <h1>Journal</h1>
            <h4 class="d-flex align-items-center justify-content-between">
                <small>Data Journal</small>
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i> </a>
                    <a href="{{ route('admin.adminAddJournal') }}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Journal</a>
                </div>
            </h4>
            <form method="post" name="proses">
                <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th class="admin-data-journal-nomor">No</th>
                                <th class="admin-data-journal-title">Title</th>
                                <th class="admin-data-journal-area">Area</th>
                                <th class="admin-data-journal-score">Score</th>
                                <th class="admin-data-journal-institute">Institute</th>
                                <th class="admin-data-journal-publisher">Publisher</th>
                                <th class="admin-data-journal-link-website">Link Website</th>
                                <th class="admin-data-journal-address">Address</th>
                                <th class="admin-data-journal-district">District</th>
                                <th class="admin-data-journal-email">Email</th>
                                <th class="admin-data-journal-phone">Phone</th>
                                <th class="admin-data-journal-Action">Action</th>
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
<script src="{{ asset('js/admin/navbar.js') }}"></script>

<script type="text/javascript">
    $(function () {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.adminDataJournal.list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'title', name: 'title'},
                {data: 'area', name: 'area'},
                {data: 'score', name: 'score'},
                {data: 'institute', name: 'institute'},
                {data: 'publisher', name: 'publisher'},
                {data: 'link_website', name: 'link_website'},
                {data: 'address', name: 'address'},
                {data: 'district', name: 'district'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {
                    data: 'action',
                    name: 'action',
                },

            ],
        });

    });
</script>
@endsection
