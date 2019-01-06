<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Make Wider</title>

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    @yield('style')
</head>

<body>
<!-- Main navbar -->
    @include('shared.header')
<!-- /Main navbar -->

<!-- Page container -->

            <div class="content">

                @yield('content')

                <!-- Basic modal -->
                @yield('box')
                <!-- /basic modal -->

                <!-- Footer -->
                @include('shared.footer')
                <!-- /footer -->
            </div>


<!-- loader -->
<!-- Core JS files -->
<script src="{{asset('public/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.stellar.min.js')}}"></script>


<script src="{{asset('public/assets/js/main.js')}}"></script>


@yield('script')
</body>
</html>