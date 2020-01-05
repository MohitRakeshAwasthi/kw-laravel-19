<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <meta name="robots" content="index.html" /> -->
    <meta name="description" content ="We are one of the cardinal Company Registration consultants of India and we have our roots in each and every part of India. ">
    <meta name="google-site-verification" content="COftYt5spGHuVejMAms2buKSjS19nMW0XlG_hdEQCOc" />

    <!-- Title -->
    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.jpg">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}">
    <!-- Owl Carousel css -->
    <link rel="stylesheet" href="{!! asset('assets/css/owl-carousel-min.css') !!}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{!! asset('assets/css/animate.css') !!}">
    <!-- Slicknav css -->
    <link rel="stylesheet" href="{!! asset('assets/css/slicknav.min.css') !!}">
    <!-- Main css -->
    <link rel="stylesheet" href="{!! asset('style.css') !!}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{!! asset('assets/css/responsive.css') !!}">
    <!-- ShareThis BEGIN -->
    <script async src="{!! asset('assets/js/sticky-share-buttons.js') !!}"></script>
    <!-- ShareThis END -->

</head>

<body>
    <!--   Top Header   -->
    @include('frontend.layout.top-header')

    <!--   Menu Head    -->
    @include('frontend.layout.header')

    <!-- Section Area   -->
    @yield('content')


    <!-- Footer Area end-->
    @include('frontend.layout.footer')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel Js -->
    <script src="{{ asset('assets/js/owl-carousel-min.js') }}"></script>
    <!-- Wow Js -->
    <script src="{{ asset('assets/js/wow.1.3.0.js') }}"></script>
    <!-- Counter Up Js -->
    <script src="{{ asset('ajax/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Slicknav Js -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <!-- active js -->
    <script src="{{ asset('assets/js/active.js') }}"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">

        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

        (function(){

            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5bfe83e879ed6453ccab86e3/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);

        })();

    </script>
    <!--End of Tawk.to Script-->

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                facebook: "1734079183334384", // Facebook page ID
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
</body>

</html>
