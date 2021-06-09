<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Optional css -->
    @yield('optional-css')

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/navbar.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('/_assets/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/admin/simple-sidebar.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('/_assets/libs/DataTables/datatables.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>
    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')

    @yield('content')

    {{-- <script src="{{ asset('/_assets/js/jquery.js') }}"></script> --}}
    {{-- <script src="{{ asset('/_assets/libs/DataTables/datatables.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('/_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js') }}"></script> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin/navbar.js') }}"></script>

    <!-- Optional js -->
    @yield('optional-js')

</body>
