<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/darkmode.css') }}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/sign-in.css') }}" rel="stylesheet" />
</head>

<body>
  @include('layouts.darkmode')
  <div class="container main-container">
    <main style="padding: 20px; margin-top: 20px;">
      <img class="mb-4" src="../images/INFLIBNET_Centre_logo.png" alt="" width="72" height="90">
      <h1 class="h3 mb-3 fw-normal">Please Register</h1>

      <form action="{{ route('home') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-3 mb-3">
            <div class="form-floating">
              <select class="form-control" id="floatingTitle" name="title" aria-label="Title" required>
                <option value="mr">Mr.</option>
                <option value="mrs">Mrs.</option>
                <option value="miss">Miss</option>
                <option value="dr">Dr.</option>
              </select>
              <label for="floatingTitle">Title</label>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingFirstName" name="first_name" placeholder="First Name" required>
              <label for="floatingFirstName">First Name</label>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingLastName" name="last_name" placeholder="Last Name" required>
              <label for="floatingLastName">Last Name</label>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="form-floating">
              <select class="form-control" id="floatingGender" name="gender" aria-label="Gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
              <label for="floatingGender">Gender</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-3">
            <div class="form-floating">
              <select class="form-control" id="floatingCountry" name="country" aria-label="Country" required>
                <option value="india">India</option>
                <option value="us">United States</option>
                <option value="canada">Canada</option>
                <option value="australia">Australia</option>
              </select>
              <label for="floatingCountry">Country</label>
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <div class="form-floating">
              <select class="form-control" id="floatingCategory" name="category" aria-label="Category" required>
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
              </select>
              <label for="floatingCategory">Category</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingOrganization" name="organization" placeholder="Organization Name" required>
              <label for="floatingOrganization">Organization Name</label>
            </div>
          </div>
          <div class="col-sm-4 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingDesignation" name="designation" placeholder="Designation" required>
              <label for="floatingDesignation">Designation</label>
            </div>
          </div>
          <div class="col-sm-4 mb-3">
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
              <label for="floatingInput">Email address</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-3">
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
              <label for="floatingPassword">Password</label>
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingConfirmPassword" name="password_confirmation" placeholder="Confirm Password" required>
              <label for="floatingConfirmPassword">Confirm Password</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingEnterOtp" name="otp" placeholder="Enter Otp">
              <label for="floatingEnterOtp">Enter Otp</label>
            </div>
          </div>
          <div class="col-sm-4 mb-3">
            <div class="form-floating">
              <button class="btn btn-primary w-100 py-2" name="action" value="send_otp" type="submit">Send OTP</button>
            </div>
          </div>
          <div class="col-sm-4 mb-3">
            <div class="form-floating">
              <button class="btn btn-primary w-100 py-2" name="action" value="verify_otp" type="submit">Verify OTP</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 offset-sm-4 mb-3 text-center">
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
          </div>
        </div>
      </form>
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="{{ asset('js/theme-switcher.js') }}"></script>
  <script src="/js/captcha.js"></script>
</body>

</html>
