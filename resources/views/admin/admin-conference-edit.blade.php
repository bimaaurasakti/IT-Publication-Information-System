@extends('admin.layouts.index')


@section('title')

SIPIT | Edit Data Conference

@endsection


@section('content')

<div class="container">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="box">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h1>Conference</h1>
                        <div class="d-flex justify-content-between">
                            <h4>Edit Data Conference</h4>
                            <div class="pull-right">
                                <a href="{{ route('admin.adminDataConference') }}" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Back</a>
                            </div>
                        </div>
                        <h4>{{ $conference->name }}</h4>
                        <hr>
                        <form action="/admin/data-conference/{{ $conference->slug }}/update" method="post" enctype="multipart/form-data" novalidate>
                            @method('patch')
                            @include('admin.partials.form-conference-control')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
