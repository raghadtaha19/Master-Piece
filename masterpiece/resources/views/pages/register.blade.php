<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('pages_assets/images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pages_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('pages_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('pages_assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages_assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages_assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages_assets/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages_assets/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('pages_assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages_assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pages_assets/css/main.css') }}">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" >
            <div class="wrap-login100 p-l-110 p-r-110 p-t-20 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w registration-form">
                    <span class="login100-form-title p-b-5">
                        Sign Up
                    </span>

                   <div class="row">
                    <div class="col-6">
                        <div class="p-t-10 p-b-9">
                            <span class="txt1">
                                First Name
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="First Name is required">
                            <input class="input100" type="text" name="first_name">
                            <span class="focus-input100"></span>
                        </div>
                       </div>
    
                       <div class="col-6">
                        <div class="p-t-10 p-b-9">
                            <span class="txt1">
                                Last Name
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Last Name is required">
                            <input class="input100" type="text" name="last_name">
                            <span class="focus-input100"></span>
                        </div>
                       </div>
                   </div>

                  <div class="row">
                    <div class="col-6">
                        <div class="p-t-10 p-b-9">
                            <span class="txt1">
                                Username
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Username is required">
                            <input class="input100" type="text" name="username">
                            <span class="focus-input100"></span>
                        </div>
    
                    </div>
                    <div class="col-6">
                        <div class="p-t-10 p-b-9">
                            <span class="txt1">
                                Phone Number
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Phone Number is required">
                            <input class="input100" type="text" name="phone_number">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                  </div>

                    <div class="p-t-10 p-b-9">
                        <span class="txt1">
                            Email
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Email is required">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Confirm Password
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                        <input class="input100" type="password" name="confirm_password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-5">
                        <button class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>

                    <div class="w-full text-center p-t-20">
                        <span class="txt2">
                            Already have an account?
                        </span>

                        <label for="check" class="txt2 bo1">
                            <a href="{{ route('login') }}">Login</a>
                        </label>

                    </div>
                </form>
            </div>
        </div>
    </div>





    <script src="{{ asset('pages_assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('pages_assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('pages_assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('pages_assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pages_assets/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('pages_assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('pages_assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('pages_assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('pages_assets/js/main.js') }}"></script>

</body>

</html>
