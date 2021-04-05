<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Webartinfo">
    <meta name="author" content="Webartinfo">
    <title>Manland - Bootstrap Light Real Estate HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('lander_assets/img/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('lander_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="{{asset('lander_assets/vendor/icons/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css" />
    <!-- Select2 CSS -->
    <link href="{{asset('lander_assets/vendor/select2/css/select2-bootstrap.css')}}" />
    <link href="{{asset('lander_assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('lander_assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
<!-- Login -->
<section class="hv-100">
    <div class="container">
        <div class="row align-items-center hv-100">
            <div class="col-lg-4 col-md-4 mx-auto">
                <div class="card padding-card mb-0">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Reset Password</h5>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label>Email address <span class="text-danger">*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Send Password Reset Link') }}
                            </button>
                        </form>
                        <div class="mt-4 text-center">
                            Don't have an account? <a href="{{route('user-register')}}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login -->

<!-- Bootstrap core JavaScript -->
<script src="{{asset('lander_assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lander_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Contact form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="{{asset('lander_assets/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('lander_assets/js/contact_me.js')}}"></script>
<!-- select2 Js -->
<script src="{{asset('lander_assets/vendor/select2/js/select2.min.js')}}"></script>
<!-- Custom -->
<script src="{{asset('lander_assets/js/custom.js')}}"></script>
</body>
</html>
