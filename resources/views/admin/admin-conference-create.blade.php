@extends('admin.layouts.index')


@section('title')

SIPIT | Add Data Conference

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
                            <h4>Add Data Conference</h4>
                            <div class="pull-right">
                                <a href="{{ route('admin.adminDataConference') }}" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Back</a>
                            </div>
                        </div>

                        <form action="{{ route('admin.adminStoreConference') }}" method="post" enctype="multipart/form-data" novalidate>
                            @include('admin.partials.form-conference-control', ['action' => 'add'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
