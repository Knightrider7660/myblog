<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/core.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

</head>
<body class="login-container">

<!-- Main navbar -->
@include('shared.admin.app_nav')
<!-- /main navbar -->

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

            @yield('content')

            <!-- Footer -->
            @include('shared.admin.footer')
            <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->


<!-- Core JS files -->
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/loaders/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/core/libraries/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/core/libraries/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/loaders/blockui.min.js')}}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/forms/styling/uniform.min.js')}}"></script>

<script type="text/javascript" src="{{asset('public/assetadmin/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/pages/login.js')}}"></script>
<!-- /theme JS files -->
</body>
</html>
