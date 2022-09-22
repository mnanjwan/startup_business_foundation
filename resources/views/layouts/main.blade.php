<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Startup Business Foundation">
    <meta name="keywords"
        content="consulting, advisor, broker, business, company, consulting, corporate, finance, financial, starup, foundation, nigeria, owerri">
    <meta name="author" content="Startup Business Foundation">
    <title>Start Business Foundation</title>
    <!-- Stylesheets -->
    <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    @yield('more_styles')
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        @component('components.header', compact('page'))
        @endcomponent
        <!--End Main Header -->

        @yield('content')

        <!--Main Footer-->
        @component('components.footer')
        @endcomponent


    </div>
    <!--End pagewrapper-->

    <script src="{{ asset('/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('/assets/js/appear.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.js') }}"></script>
    <script src="{{ asset('/assets/js/wow.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
    <script src="{{ asset('/assets/js/map-script.js') }}"></script>
    <!--End Google Map APi-->

    @yield('more_scripts')

</body>

</html>
