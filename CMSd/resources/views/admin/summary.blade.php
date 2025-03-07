<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>

    <div>
        <header>
            @include('layouts.css')
            @include('layouts.topbar')
        </header>

        @include('layouts.sidebar')
     
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
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
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="mdi mdi-account-multiple float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Users</h6>
                                    <h3 class="my-3" data-plugin="counterup">1,587</h3>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="mdi mdi-account-multiple float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Authors</h6>
                                    <h3 class="my-3"><span data-plugin="counterup">46,782</span></h3>
                                </div>
                            </div>

                           <!--  <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-chart float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Reviewers</h6>
                                    <h3 class="my-3"><span data-plugin="counterup">100</span></h3>
                                </div>
                            </div> -->

                            <!-- <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-rocket float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                                    <h3 class="my-3" data-plugin="counterup">1,890</h3>
                                    <span class="badge badge-warning mr-1"> +89% </span> <span class="text-muted">Last
                                        year</span>
                                </div>
                            </div> -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end container-fluid -->
                </div> <!-- end content -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        @include('layouts.footer')
    </div>

    @include('layouts.js')
    
</body>

</html>