<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Official Website || DNA || Learning Center</title>
        <link rel="shortcut icon" href="assets/images/dna/dnalogo2.png" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/dna/dnalogo2.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/dna/dnalogo2.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/dna/dnalogo2.png">
        <link rel="manifest" href="assets/images/dna/dnalogo2.png">

        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        {{-- <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('newassets/images/fav.png') }}"> --}}

        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/font-awesome.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/owl.carousel.css') }}">
		<!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/slick.css') }}">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/rsmenu-main.css') }}">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/rsmenu-transitions.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/magnific-popup.css') }}">
		<!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/fonts/flaticon.css') }}">
        <!-- flaticon2 css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/fonts/fonts2/flaticon.css') }}">
        <!-- Offcanvas CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/off-canvas.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/style.css') }}">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('newassets/css/responsive.css') }}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .services-desc p {
                font-size: 12px;
            }
        </style>
    </head>


    <body class="home2">

        @include('ui.header')
        @include('ui.slider')
        @include('ui.centers')
            @yield('content')
        @include('ui.footer')




    <!-- modernizr js -->
    <script src="{{ asset('newassets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('newassets/js/jquery.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('newassets/js/bootstrap.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('newassets/js/owl.carousel.min.js') }}"></script>
    <!-- slick.min js -->
    <script src="{{ asset('newassets/js/slick.min.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('newassets/js/isotope.pkgd.min.js') }}"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{ asset('newassets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('newassets/js/wow.min.js') }}"></script>
    <!-- counter top js -->
    <script src="{{ asset('newassets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('newassets/js/jquery.counterup.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('newassets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- rsmenu js -->
    <script src="{{ asset('newassets/js/rsmenu-main.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('newassets/js/plugins.js') }}"></script>
     <!-- main js -->
    <script src="{{ asset('newassets/js/main.js') }}"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/63bfb9dd47425128790d01dd/1gmies2ns';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
