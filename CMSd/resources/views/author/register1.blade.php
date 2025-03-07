<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Uplon - Responsive Bootstrap 4 Admin Dashboard</title>
    @include('layouts.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="">

    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="account-card-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">
                                
                                <div class="text-center">
                                    <div class="my-3">
                                        <a href="index.html">
                                            <span><img src="assets/images/logo.png" alt="" height="28"></span>
                                        </a>
                                    </div>
                                    <h5 class="text-muted text-uppercase py-3 font-16">Sign In</h5>
                                </div>
                                <form action="{{ route('author.register1.submit') }}" method="POST" class="mt-2" id="otp-form">

                                    @csrf                                       
                                    <div class="form-group mb-3">
                                        <input class="form-control" type="email" required placeholder="Enter your username" name="email" id="email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" required id="password" placeholder="Enter your password" name="password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" placeholder="Enter your OTP" name="otp" id="otp">
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="button" value="send_otp" name="action" id="send-otp-btn" onclick="sendOTP()"> Send OTP </button>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="button" value="verify_otp" name="action" onclick="verifyOTP()"> Verify OTP </button>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Register </button>
                                    </div>

                                </form>

                                <div class="text-center mt-4">
                                    <h5 class="text-muted py-2"><b>Sign in with</b></h5>

                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-facebook waves-effect font-14 waves-light mt-3">
                                                <i class="fab fa-facebook-f mr-1"></i> Facebook
                                            </button>
        
                                            <button type="button" class="btn btn-twitter waves-effect font-14 waves-light mt-3">
                                                <i class="fab fa-twitter mr-1"></i> Twitter
                                            </button>
        
                                            <button type="button" class="btn btn-googleplus waves-effect font-14 waves-light mt-3">
                                                <i class="fab fa-google-plus-g mr-1"></i> Google+
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>

                    <!-- <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">Don't have an account? <a href="pages-register.html" class="text-white ml-1"><b>Sign Up</b></a></p>
                        </div>  -->
                        <!-- end col -->
                    </div> 
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    @include('layouts.js')

    <script>
        var otpSent = false;

        function sendOTP() {
            if (!otpSent) {
                var form = $('#otp-form');
                var data = form.serialize() + '&action=send_otp';

                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: data,
                    success: function(response) {
                        alert('OTP sent successfully.');
                        otpSent = true;
                        $('#send-otp-btn').prop('disabled', true); // Disable the Send OTP button
                    },
                    error: function() {
                        alert('An error occurred. Please try again.');
                    }
                });
            } else {
                alert('OTP has already been sent. Please check your email.');
            }
        }

        function verifyOTP() {
            var form = $('#otp-form');
            var data = form.serialize() + '&action=verify_otp';

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: data,
                success: function(response) {
                    alert('OTP verified successfully.');
                },
                error: function() {
                    alert('An error occurred. Please try again.');
                }
            });
        }
    </script>
    
</body>

</html>
