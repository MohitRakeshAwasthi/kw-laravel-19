<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{!! asset('assets/images/favicon.png') !!}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{!! asset('assets/scripts/bootstrap/css/bootstrap.css') !!}">
    
    <!-- Include CSS globally -->
    <link rel="stylesheet" href="{!! asset('assets/scripts/font-awesome/css/font-awesome.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/content-box.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/image-box.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/animations.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/scripts/flexslider/flexslider.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/skin.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!--  Header    -->
    @include('frontend.layout.header')

    <!-- Section Area   -->
    @yield('content')

    <!-- Footer Area end-->
    @include('frontend.layout.footer')

    <!-- Include Javascripts files globally -->
    <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/script.js') }}"></script>
    <script src="{{ asset('assets/scripts/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/flexslider/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/scripts/jquery.progress-counter.js') }}"></script>
    <script src="{{ asset('assets/scripts/smooth.scroll.min.js') }}"></script>
    
</body>

</html>
