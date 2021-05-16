<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:200,400,600&display=swap" rel="stylesheet">

    <!-- Optional CSS -->
    @yield('css')

  </head>
  <body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <!-- ini font awesome -->
    <link rel="stylesheet" href="css/all.css">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.6.0.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/all.js"></script>
  </body>
</html>
