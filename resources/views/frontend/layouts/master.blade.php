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
        <header id="header_main" class="header_1 js-header">
            <div class="themes-container ">
                <div class="row">
                    <div class="col-md-12">                              
                        <div id="site-header-inner"> 
                            <div class="wrap-box relative">
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner">
                                        <a href="index.html" rel="home" class="main-logo">
                                            <img id="logo_header" src="assets/images/logo/logo.png" alt="img" width="155" height="46">
                                        </a>
                                    </div>
                                </div>
                                <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                                <nav id="main-nav" class="main-nav">
                                    <ul id="menu-primary-menu" class="menu">
                                        <li class="menu-item current-menu-item">
                                            <a href="{{route('dashbord')}}">Home</a>
                                        </li>
    
                                        {{-- <li class="menu-item ">
                                            <a data-scroll href="#about">About</a>                                       
                                        </li>
    
                                        <li class="menu-item ">
                                            <a data-scroll href="#projects"> Projects</a>                                       
                                        </li>
    
                                        <li class="menu-item">
                                            <a data-scroll href="#contact">Contact</a>                                        
                                        </li> --}}
                                    </ul>
                                </nav><!-- /#main-nav -->                        
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="mode_switcher ">
                <a href="#" class="light is_active">
                    <img src="assets/images/icon/sun.png" alt="">
                </a>
                <a href="#" class="dark">
                    <img src="assets/images/icon/moon.png" alt="">
                </a>
            </div>
        </header>

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