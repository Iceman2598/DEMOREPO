<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/darkmode.css') }}" rel="stylesheet" />
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('css/sign-in.css') }}" rel="stylesheet" />

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">


    <main class="form-signin w-100 m-auto">
        @include('layouts.darkmode')
        <form action="{{ url('admin/login') }}" method="POST">
            @csrf
            <img class="mb-4" src="../images/INFLIBNET_Centre_logo.png" alt="" width="72" height="90">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" name="username" class="form-control" id="floatingInput"
                    placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
                    required>
                <label for="floatingPassword">Password</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

            @if(Session::has('message'))
                <p class="text-danger text-center mt-2">{{ Session::get('message') }}</p>
            @endif

            <p class="mt-5 mb-3 text-body-secondary">&copy; 2025 INFLIBNET Centre, Gandhinagar. All rights reserved.</p>
        </form>

    </main>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/theme-switcher.js"></script>
    <script src="/js/captcha.js"></script>

</body>

</html>