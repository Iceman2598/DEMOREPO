<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @include('admin.layouts.css')
</head>

<body>
    @include('admin.layouts.topbar')
    @include('admin.layouts.sidebar')
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- start page title -->

                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Inflibinet</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Admin Dashboard</h4>
                            </div>
                        </div>

                        <!-- end page title -->
                        
                        <div class="row">
                            <!-- CONTENT START FROM HERE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')
    @include('admin.layouts.js')
</body>

</html>