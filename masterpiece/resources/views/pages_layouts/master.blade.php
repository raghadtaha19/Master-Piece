<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('pages_layouts.head')


</head>

<body>
    @include('sweetalert::alert')

    <div class="container-xxl bg-white p-0">
        @include('pages_layouts.navbar')
    


    @yield('content')

    @include('pages_layouts.footer')



    @include('pages_layouts.footer-scripts')

</body>

</html>
