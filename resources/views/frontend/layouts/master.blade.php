<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">

    <title>Pesonal Portfolio - HTML Template - shared on themelock.com</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/dist/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dist/responsive.css')}}">
    
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/Favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/icon/Favicon.png')}}">

</head>

<body class="body header-fixed counter-scroll is_light">

    <!-- preloade -->
    <div class="preload preload-container">
        <!-- <div class="preload-logo"></div> -->
          <div class="e-loadholder">
            <div class="m-loader">
                <span class="e-text">Loading</span>
            </div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">

        @yield('content')

    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Javascript -->

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.js')}}"></script>
    <script src="{{asset('assets/js/countto.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/js/jquery-validate.js')}}"></script>
    <script src="{{asset('assets/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('assets/js/animated-headline.js')}}"></script>
    <script src="{{asset('assets/js/plugin.js')}}"></script>
    <script src="{{asset('assets/js/shortcodes.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/slider-title.min.js')}}"></script>
   

</body>

</html>