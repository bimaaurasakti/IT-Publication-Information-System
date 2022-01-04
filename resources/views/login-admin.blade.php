<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>SIPIT | Login Admin</title>
</head>
<body>
    <div class="d-flex px-5 py-4">
        <a href="{{ route('index') }}" class="d-flex justify-content-center align-items-center login-admin-back-button rounded-circle">
            <i class="bi bi-arrow-left-short h3 m-0"></i>
        </a>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-center h-75">
        <svg width="200" height="219" viewBox="0 0 200 219" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="200" height="219" fill="url(#pattern0)"/>
            <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0" transform="scale(0.005 0.00456621)"/>
                </pattern>
                <image id="image0" width="200" height="219" xlink:href="data:image/png;base64,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"/>
            </defs>
        </svg>

        <form method="POST" action="{{ route('login') }}" class="text-center">
            @csrf

            <div class="login-input-length mb-4 mt-5">
                <!-- <label for="exampleInputEmail1" class="form-label">Username</label> -->
                {{-- <input type="email" class="form-control text-center form" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username"> --}}
                <input id="email" type="email" class="form-control text-center form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="login-input-length mb-4">
                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                {{-- <input type="password" class="form-control text-center form" id="exampleInputPassword1" placeholder="Password"> --}}
                <input id="password" type="password" class="form-control text-center form @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="w-100">
                <button type="submit" class="btn btn-primary submit w-100" >Submit</button>
            </div>
        </form>
    </div>

    <!-- ini font awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
