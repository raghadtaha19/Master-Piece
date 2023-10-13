{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
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
        <div class="container-login100" style="background-image: url('images/2.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-b-53">
                        Sign In With
                    </span>

                    <a href="#" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="#" class="btn-google m-b-20">
                        <img src="{{ asset('pages_assets/images/icons/icon-google.png') }}" alt="GOOGLE">
                        Google
                    </a>

            
                    <!-- Email Address -->
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Email
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Email is required">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="input100" type="text" name="email" :value="old('email')" required autofocus
                            autocomplete="email" style="margin-bottom: 9px; height: 30px;" />
                        <span class="focus-input100" style="border: 2px solid #D9D9D9;"></span>
                    </div>
                    
                    


                    <!-- Password -->
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>
                        <a href="{{ route('password.request') }}" class="txt2 bo1 m-l-5">
                            Forgot?
                        </a>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="input100" type="password" name="password" required
                            autocomplete="current-password" style="margin-bottom: 9px; height: 30px;" />
                        <span class="focus-input100" style="border: 2px solid #D9D9D9;"></span>
                    </div>
                    
                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <span class="txt2">
                            Not a member?
                        </span>

                        <a href="{{ route('register') }}" class="txt2 bo1">
                            Sign up now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

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

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
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
    <style>
        .small-font {
            font-size: 12px;
            /* Adjust the font size as needed */
            color: #FF0000;
            /* You can set the color to your preference */
            margin-top: 5px;
            /* Adjust the margin-top to control the spacing between the input and error message */
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/2.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-b-53">
                        Sign In With
                    </span>
                
                    <a href="#" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>
                
                    <a href="{{ route('google-auth') }}" class="btn-google m-b-20">
                        <img src="{{ asset('pages_assets/images/icons/icon-google.png') }}" alt="GOOGLE">
                        Google
                    </a>
                    <div class="col-12">
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Email or Username
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Email is required">
                            <input class="input100" type="text" name="input_type" value="{{ old('input_type') }}">
                        </div>
                        @error('email')
                            <div class="error-message small-font">{{ $message }}</div>
                        @enderror
                        @error('user_name')
                            <div class="error-message small-font">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Password
                            </span>
                    
                            <a href="{{ route('password.request') }}" class="txt2 bo1 m-l-5">
                                Forgot Password?
                            </a>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password">
                        </div>
                        @error('password')
                            <div class="error-message small-font">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">Remember Me</span>
                        </label>
                    </div>
                
                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn btn btn-primary btn-block" type="submit">Sign In</button>
                    </div>
                
                    <div class="w-full text-center p-t-30">
                        <span class="txt2">
                            Not a member?
                        </span>
                
                        <a href="{{ route('register') }}" class="txt2 bo1">
                            Sign up now
                        </a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

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
