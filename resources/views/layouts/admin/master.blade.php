<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Make Wider</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/core.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assetadmin/css/components.min.css')}}" rel="stylesheet" type="text/css">
<!--Phone Number-->
    <link href="{{asset('public/assetadmin/dial_code_flag/css/intlTelInput.css')}}" rel="stylesheet" type="text/css">
<!--Phone Number-->
    <link href="{{asset('public/assetadmin/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link href="{{asset('public/custom.css')}}" rel="stylesheet" type="text/css">
    @yield('style')
</head>

<body class="navbar-top">
<!-- Main navbar -->
    @include('shared.admin.header')
<!-- /Main navbar -->

<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
            @include('shared.admin.aside')
        <!-- /Main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                @yield('content')

                <!-- Basic modal -->
                @yield('box')
                <!-- /basic modal -->

                <!-- Footer -->
                @include('shared.admin.footer')
                <!-- /footer -->
            </div>
            <!-- /Content area -->

        </div>
        <!-- /Main content -->
    </div>
    <!-- /Page content -->
</div>
<!-- /Page container -->


<!-- Core JS files -->
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/loaders/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/core/libraries/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/core/libraries/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/loaders/blockui.min.js')}}"></script>
<!-- /core JS files -->

<!-- For Fixed Layout JS files -->
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/ui/nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/forms/selects/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/plugins/notifications/jgrowl.min.js')}}"></script>

<!--Phone Number-->
<script type="text/javascript" src="{{asset('public/assetadmin/dial_code_flag/js/intlTelInput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/dial_code_flag/js/defaultCountryIp.js')}}"></script>
<!--Phone Number-->
<script type="text/javascript" src="{{asset('public/assetadmin/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assetadmin/js/pages/layout_fixed_custom.js')}}"></script>
<!-- /For Fixed Layout JS files -->
<script type="text/javascript" src="{{asset('public/custom.js')}}"></script>

<script type="text/javascript">

    $(function () {
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                lengthMenu: '<span>Show:</span> _MENU_',
            },
            drawCallback: function () {
                $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
            },
            preDrawCallback: function() {
                $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
            }
        });


                @if(Session::has('message'))
        var type = "{{ Session::get('alert-type') }}";
        switch(type){
            case 'info':
                $.jGrowl("{{ Session::get('message') }}", {
                    header: 'Info',
                    theme: 'bg-info',
                    life: 800,
                    position: 'top-center'
                });
                break;

            case 'warning':
                $.jGrowl("{{ Session::get('message') }}", {
                    header: 'Warning',
                    theme: 'bg-warning',
                    life: 800,
                    position: 'top-center'
                });
                break;

            case 'success':
                $.jGrowl("{{ Session::get('message') }}", {
                    header: 'Success',
                    theme: 'bg-success',
                    life: 800,
                    position: 'top-center'
                });
                break;

            case 'error':
                $.jGrowl("{{ Session::get('message') }}", {
                    header: 'Error',
                    theme: 'bg-danger',
                    life: 800,
                    position: 'top-center'
                });
                break;
        }
        @endif

    });


    function imgPrev(input, outPut) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(outPut).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


</script>
@yield('script')
</body>
</html>