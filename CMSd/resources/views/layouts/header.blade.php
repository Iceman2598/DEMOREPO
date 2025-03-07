<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Example</title>
    <link href="{{ asset('assets/dist/css/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('assets/dist/css/headers.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

    <nav id="top" class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-secondary">
                            <i class="bi bi-house-fill"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-table"></i>
                            Accepted Papers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-grid"></i>
                            Themes
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"
                            class="nav-link text-white"><i class="bi bi-chevron-double-down"></i>Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-people-fill"></i>
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('author.register')}}" class="nav-link text-white">
                            <i class="bi bi-people-fill"></i>
                            Author Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('author.register1')}}" class="nav-link text-white">
                            <i class="bi bi-people-fill"></i>
                            Author Login 1x
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="px-3 py-0 border-bottom mb-3">
        <div class="container d-flex flex-wrap justify-content-end">
            <!-- <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form> -->
            <div class="text-end">
                <a href="{{ route('admin.login') }}" class="btn btn-light text-dark me-2">
                    <i class="bi bi-door-open-fill"></i>Login
                </a>
                <a href="{{ route('regi') }}" class="btn btn-primary">
                    <i class="bi bi-person-fill-add"></i> Registration
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6ZYgfuA2A0+LcUGcQFMqOYPq5WFiKntSvrQtQHOpqONXG1K9/2duxR1lz4c+Gb" crossorigin="anonymous"></script>
</body>

</html>