<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="author" content="Themexriver">
<title>Finano Consulting HTML Template | Homepage Five</title>
<!-- Stylesheets -->
<link href="{{ asset('/public/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/public/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('/public/assets/css/responsive.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('/public/assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('/public/assets/images/favicon.png') }}" type="image/x-icon">

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

<script src="{{ asset('/public/assets/js/jquery.js') }}"></script>
<script src="{{ asset('/public/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('/public/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/public/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('/public/assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('/public/assets/js/appear.js') }}"></script>
<script src="{{ asset('/public/assets/js/owl.js') }}"></script>
<script src="{{ asset('/public/assets/js/wow.js') }}"></script>
<script src="{{ asset('/public/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('/public/assets/js/main.js') }}"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="{{ asset('/public/assets/js/map-script.js') }}"></script>
<!--End Google Map APi-->

@yield('more_scripts')

</body>

</html>
