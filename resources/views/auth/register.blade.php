<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('homepage/img/fav.png')}}">
    <title>Contacts List System | LOGIN</title>

    <link href="{{ asset('admin_dashboard/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_dashboard/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <h3 class="font-medium m-b-20 m-t-10">Sign Up</h3>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="first_name" type="text" class="form-control form-control-lg @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="First name"  autofocus>
                                        @error('first_name') 
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="last_name" type="text" class="form-control form-control-lg @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last name">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="contact_number" type="text" class="form-control form-control-lg @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" placeholder="contact number">
                                        @error('contact_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit ">SIGN UP</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        Already have an account? 
                                        <a href="{{ route('home') }}" class="text-info m-l-5 "><b>Sign In</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin_dashboard/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>