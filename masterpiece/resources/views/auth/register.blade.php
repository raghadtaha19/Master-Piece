{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

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
            <div class="wrap-login100 p-l-110 p-r-110 p-t-20 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w registration-form" method="POST"
                    action="{{ route('register') }}">
                    @csrf
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
                                <input class="input100" type="text" name="first_name"
                                    value="{{ old('first_name') }}">
                                {{-- <span class="focus-input100"></span> --}}
                            </div>
                            @error('first_name')
                                <div class="error-message small-font">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-6">
                            <div class="p-t-10 p-b-9">
                                <span class="txt1">
                                    Last Name
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Last Name is required">
                                <input class="input100" type="text" name="last_name" value="{{ old('last_name') }}">
                                {{-- <span class="focus-input100"></span> --}}
                            </div>

                            @error('last_name')
                                <div class="error-message small-font">{{ $message }}</div>
                            @enderror
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
                                <input class="input100" type="text" name="user_name" value="{{ old('user_name') }}">
                                {{-- <span class="focus-input100"></span> --}}
                            </div>
                            @error('user_name')
                                <div class="error-message small-font">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-6">
                            <div class="p-t-10 p-b-9">
                                <span class="txt1">
                                    Phone Number
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Phone Number is required">
                                <input class="input100" type="text" name="phone_number"
                                    value="{{ old('phone_number') }}">
                                {{-- <span class="focus-input100"></span> --}}
                            </div>
                            @error('phone_number')
                                <div class="error-message small-font">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="p-t-10 p-b-9">
                        <span class="txt1">
                            Email
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Email is required">
                        <input class="input100" type="text" name="email" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="error-message small-font">{{ $message }}</div>
                    @enderror


                    <div class="row">
                        <div class="col-6">
                            <div class="p-t-13 p-b-9">
                                <span class="txt1">
                                    Password
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input class="input100" type="password" name="password">
                            </div>
                            @error('password')
                                <div class="error-message small-font">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-6">
                            <div class="p-t-13 p-b-9">
                                <span class="txt1">
                                    Confirm Password
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                                <input class="input100" type="password" name="password_confirmation">
                            </div>
                            @error('password_confirmation')
                                <div class="error-message small-font">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn" type="submit">
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
