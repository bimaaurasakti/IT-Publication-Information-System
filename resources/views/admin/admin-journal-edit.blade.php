@extends('admin.layouts.index')


@section('title')

SIPIT | Edit Data Journal

@endsection


@section('content')

<div class="container">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="box">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 ">
                        <h1>Journal</h1>
                        <div class="d-flex justify-content-between">
                        <h3>Edit Data Journal</h3>
                            <div class="pull-right">
                                <a href="{{ route('admin.adminDataJournal') }}" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Back</a>
                            </div>
                        </div>
                        <h4>{{ $journal->title }}</h4>
                        <hr>
                        <form action="/admin/data-journal/{{ $journal->slug }}/update" method="post" enctype="multipart/form-data" novalidate>
                            @method('patch')
                            @include('admin.partials.form-journal-control')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
