<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Author Registration</title>

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/darkmode.css') }}" rel="stylesheet" />
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('css/sign-in.css') }}" rel="stylesheet" />

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        @include('layouts.darkmode')
        <form action="{{ route('author.register.submit') }}" method="POST">
            @csrf
            <img class="mb-4" src="../images/INFLIBNET_Centre_logo.png" alt="" width="72" height="90">
            <h1 class="h3 mb-3 fw-normal">Please Register</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingEnterOtp" name="otp" placeholder="Enter Otp">
                <label for="floatingEnterOtp">Enter Otp</label>
            </div>

            <div class="form-floating">
                <button class="btn btn-primary w-100 py-2" name="action" value="send_otp" type="submit">Send OTP</button>
            </div>
            <div class="form-floating">
                <button class="btn btn-primary w-100 py-2" name="action" value="verify_otp" type="submit">Verify OTP & Register</button>
            </div>

            <div class="form-floating">
                <h5 class="text-muted py-2 text-center"><b>Sign in with</b></h5>
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-facebook waves-effect font-14 waves-light mt-3">
                            <i class="bi bi-facebook mr-1"></i>
                        </button>

                        <button type="button" class="btn btn-twitter waves-effect font-14 waves-light mt-3">
                            <i class="bi bi-twitter-x mr-1"></i>
                        </button>

                        <button type="button" class="btn btn-googleplus waves-effect font-14 waves-light mt-3">
                            <i class="bi bi-google mr-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <p class="mt-5 mb-3 text-body-secondary">&copy; 2025 INFLIBNET Centre, Gandhinagar. All rights reserved.</p>
        </form>
    </main>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/theme-switcher.js"></script>
    <script src="/js/captcha.js"></script>

</body>

</html>
