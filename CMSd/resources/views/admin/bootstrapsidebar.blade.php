<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap-icons.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="height: 100vh">
            <div></div>
            <!-- sidebar start -->
            <div class="col-2 col-sm-3 col-xl-2 bg-dark">
                <div class="sticky-top">
                    <nav class="navbar bg-dark border-bottom border-body mb-3" data-bs-theme="dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <i class="bi bi-house-door"></i><span class="d-none d-sm-inline ms-2">Admin</span>
                            </a>
                        </div>
                    </nav>

                    <nav class="nav flex-column bg-dark p-3 vh-100">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-speedometer2"></i> <span class="ms-2">Dashboard</span>
                        </a>

                        <a class="nav-link text-white" data-bs-toggle="collapse" href="#settings">
                            <i class="bi bi-gear"></i> <span class="ms-2">Settings</span>
                        </a>
                        <ul class="collapse list-unstyled ms-3" id="settings">
                            <li><a href="#" class="nav-link text-white">Config</a></li>
                            <li><a href="#" class="nav-link text-white">Status</a></li>
                        </ul>

                        <a class="nav-link text-white" data-bs-toggle="collapse" href="#submission">
                            <i class="bi bi-clipboard-check"></i> <span class="ms-2">Submission</span>
                        </a>
                        <ul class="collapse list-unstyled ms-3" id="submission">
                            <li><a href="#" class="nav-link text-white">Approve Submission</a></li>
                            <li><a href="#" class="nav-link text-white">Reject Submission</a></li>
                        </ul>

                        <a class="nav-link text-white" data-bs-toggle="collapse" href="#email">
                            <i class="bi bi-envelope"></i> <span class="ms-2">Email</span>
                        </a>
                        <ul class="collapse list-unstyled ms-3" id="email">
                            <li><a href="#" class="nav-link text-white">All Email</a></li>
                            <li><a href="#" class="nav-link text-white">Author Email</a></li>
                            <li><a href="#" class="nav-link text-white">Review Email</a></li>
                        </ul>

                        <a class="nav-link text-white" data-bs-toggle="collapse" href="#assign">
                            <i class="bi bi-person-check"></i> <span class="ms-2">Assign</span>
                        </a>
                        <ul class="collapse list-unstyled ms-3" id="assign">
                            <li><a href="#" class="nav-link text-white">Assign paper to reviewer</a></li>
                            <li><a href="#" class="nav-link text-white">Score</a></li>
                            <li><a href="#" class="nav-link text-white">Plagiarism</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- sidebar end -->
            <div class="col-10 col-sm-9 col-xl-10 p-0 m-0">
                <!-- topbar start -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
                    <div class="container-fluid">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-arrow-bar-right me-2"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- topbar end -->
                <main>
                    @yield('content')
                </main>
            </div>
        </div>

    </div>


    <script src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>