<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="DNALC">
    <meta name="description" content="Official website of DNA Learning Center">

    <title>Official Website || DNA || Learning Center</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/images/dna/dnalogo2.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/dna/dnalogo2.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/dna/dnalogo2.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/dna/dnalogo2.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/dna/dnalogo2.png') }}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <!--  bootstrap-select css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <!--  fontawesome css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
    <!--  jquery-ui css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}">
    <!--  jarallax css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/laboix-icons/style.css') }}">
    <!--  slider css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/laboix.css') }}">

    {{-- Dropify css --}}
    <link rel="stylesheet" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

    {{-- Tiny MCE --}}
    {{-- <script src="https://cdn.tiny.cloud/1/ifprekyziwmwbff5pm4lgrqgmsm0x5yaew0tctgdk95r94ae/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}

    {{-- Ckeditor download and replace --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script> --}}

    {{-- Dropify css download and replace --}}
    {{-- <link rel="stylesheet" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css"> --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.min.css">

    @if (Route::currentRouteName() != 'index.welcome' && Route::currentRouteName() != 'contact' && Route::currentRouteName() != 'workshop.application')
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/ifprekyziwmwbff5pm4lgrqgmsm0x5yaew0tctgdk95r94ae/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @endif

    <style>
        .btn-primary {
            background-color: #021936;
            border-color: #192C46;
        }

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 150px;
        }

        .btn-primary:hover {
            background-color: #192C46;
            border-color: #192C46;
        }

        .login-page__form-input-box input[type=text] {
            height: 60px;
            width: 100%;
            border: none;
            background-color: var(--laboix-border-color2, #F3F3F3);
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
            color: var(--laboix-text, #6A6A6A);
            font-size: 14px;
            font-weight: 500;
            line-height: normal;
            display: block;
            border-radius: 0;
        }

        input[type=text] {
            height: 60px;
            width: 100%;
            border: none;
            background-color: var(--laboix-border-color2, #F3F3F3);
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
            color: var(--laboix-text, #6A6A6A);
            font-size: 14px;
            font-weight: 500;
            line-height: normal;
            display: block;
            border-radius: 0;
        }

        /* Select select */
        select {
            height: 60px;
            width: 100%;
            border: none;
            background-color: var(--laboix-border-color2, #F3F3F3) !important;
            padding-left: 30px;
            padding-right: 30px;
            outline: none !important;
            color: var(--laboix-text, #6A6A6A) !important;
            font-size: 14px;
            font-weight: 500;
            line-height: normal;
            display: block;
            border-radius: 0 !important;
        }

        input[type=text], input[type=email], input[type=url], input[type=password], input[type=tel], input[type=number], input[type=date], input[type=time], input[type=datetime-local], input[type=month], input[type=week], input[type=color], input[type=file], input[type=range], select, textarea {
            height: 60px;
            width: 100%;
            border: none;
            background-color: var(--laboix-border-color2, #F3F3F3);
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
            color: var(--laboix-text, #6A6A6A);
            font-size: 14px;
            font-weight: 500;
            line-height: normal;
            display: block;
        }

        input[type=search] {
            height: 45px;
            width: 100%;
            border: none;
            background-color: var(--laboix-border-color2, #F3F3F3);
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
            color: var(--laboix-text, #6A6A6A);
            font-size: 14px;
            font-weight: 500;
            line-height: normal;
            display: block;
        }

        input[type=file] {
            width: 100%;
            border: none;
            background-color: var(--laboix-border-color2, #F3F3F3);
            padding: 15px 30px;
            outline: none;
            color: var(--laboix-text, #6A6A6A);
            font-size: 14px;
            font-weight: 500;
            line-height: normal;
            display: block;
        }

        .preloader {
            background-color: #fff;
        }

        .thumbnail-fit {
            width: 35px;
            height: 35px;
            object-fit: cover;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
            background: #fff !important;
            padding: 20px;
        }

        .page-header__title {
            line-height: 1.5;
            text-align: left;
        }

        .nionx-breadcrumb {
            justify-content: left !important;
        }

        .about-text {
            text-align: justify;
            line-height: 2.2;
        }

        a.workshop-btn {
            background: #0EBD66;
            padding: 10px 20px;
            color: #FFFFFF;
        }

        a.workshop-btn:hover {
            background: #0C4960;
            padding: 10px 20px;
            color: #FFFFFF;
        }

        .service-card-thumb-item {
            padding: 25px;
        }

        @media(max-width: 765px){
            .remove-on-765 {
                display: none;
            }
        }

        @media(max-width: 599px){
            .remove-on-599 {
                display: none;
            }
        }

    </style>
</head>
