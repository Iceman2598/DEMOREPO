<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Profile</title>
    <!-- App css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
</head>

<body class="bg-light">
    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="account-card-box shadow-lg bg-info rounded border-dark">
                        <div class="card mb-0 border-dark">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="my-3">
                                        <a href="#" class="text-dark">
                                            <img src="{{ asset('assets/images/inflibnet logo.jpg') }}" alt="Logo"
                                                width="100" height="100" class="d-block mx-auto">
                                        </a>
                                    </div>
                                </div>

                                <!-- START Profile form -->
                                <div class="panel panel-form">
                                    <div class="panel-heading text-center">
                                        <h2 class="title">Edit Profile</h2>
                                    </div>

                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group row">
                                                <label for="id" class="col-md-4 col-form-label text-md-right">ID</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="id" name="id">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="login_id"
                                                    class="col-md-4 col-form-label text-md-right">Login ID</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="login_id"
                                                        name="login_id">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="prefix"
                                                    class="col-md-4 col-form-label text-md-right">Prefix</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="prefix" name="prefix">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-md-4 col-form-label text-md-right">First
                                                    Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="fname" name="fname">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-md-4 col-form-label text-md-right">Last
                                                    Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="lname" name="lname">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="designation"
                                                    class="col-md-4 col-form-label text-md-right">Designation</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="designation"
                                                        name="designation">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="gender"
                                                    class="col-md-4 col-form-label text-md-right">Gender</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="gender" name="gender">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="institute_name"
                                                    class="col-md-4 col-form-label text-md-right">Institute Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="institute_name"
                                                        name="institute_name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="address"
                                                    class="col-md-4 col-form-label text-md-right">Address</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="address" name="address">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="city"
                                                    class="col-md-4 col-form-label text-md-right">City</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="city" name="city">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="state"
                                                    class="col-md-4 col-form-label text-md-right">State</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="state" name="state">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="country"
                                                    class="col-md-4 col-form-label text-md-right">Country</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="country" name="country">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mobile"
                                                    class="col-md-4 col-form-label text-md-right">Mobile</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="mobile" name="mobile">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mobile_verified"
                                                    class="col-md-4 col-form-label text-md-right">Mobile
                                                    Verified</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="mobile_verified"
                                                        name="mobile_verified">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email"
                                                    class="col-md-4 col-form-label text-md-right">Email</label>
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email_verified"
                                                    class="col-md-4 col-form-label text-md-right">Email Verified</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="email_verified"
                                                        name="email_verified">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="facebook"
                                                    class="col-md-4 col-form-label text-md-right">Facebook</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="facebook"
                                                        name="facebook">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="linkedin"
                                                    class="col-md-4 col-form-label text-md-right">LinkedIn</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="linkedin"
                                                        name="linkedin">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="twitter"
                                                    class="col-md-4 col-form-label text-md-right">Twitter</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="twitter" name="twitter">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="orcid"
                                                    class="col-md-4 col-form-label text-md-right">ORCID</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="orcid" name="orcid">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="biography"
                                                    class="col-md-4 col-form-label text-md-right">Biography</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" id="biography"
                                                        name="biography"></textarea>
                                                </div>
                                            </div>
                                            <!-- Submit button -->
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END Profile form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
</body>

</html>