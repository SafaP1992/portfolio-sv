@extends('frontend.layouts.master')

@section('content')

<div id="page" class="clearfix">
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
                                        <a href="#">Home</a>
                                    </li>

                                    <li class="menu-item ">
                                        <a data-scroll href="#about">About</a>                                       
                                    </li>

                                    <li class="menu-item ">
                                        <a data-scroll href="#projects"> Projects</a>                                       
                                    </li>

                                    <li class="menu-item">
                                        <a data-scroll href="#contact">Contact</a>                                        
                                    </li>
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


    <!-- flat portflio -->
    <section id="projects" class="flat-portflio tf-section">
        <div class="themes-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="flat-tabs themesflat-tabs">
                       
                        <div class="content-tab">
                            <div class="content-inner tab-content ">
                                <div class="wrap-portflio flex">

                                @foreach ($posts as $post)

                                    <div class="box-portflio hover-img">
                                        <div class="image img-style">
                                            <img class="img-item" src="assets/images/2.jpg" alt="">
                                        </div>
                                        <div class="post">
                                            <a href="#"><h4>{{$post->title}}</h4></a>
                                            <p>{{$post->decription}}</p>
                                            <div class="sc-btn-button">
                                                <a href="#" class="sc-button btn-2"><span>View More
                                                </span></a>
                                            </div>
                                        </div>
                                    </div>
                                
                                @endforeach

                                </div>
                                <div class="sc-btn-top center">
                                    <div class="text-center">
                                        {{$posts->links()}}
                                    </div>
                                    {{-- <a href="#" class="btn-action btn-style btn-3"><span>View Portfolio
                                    </span></a> --}}
                                </div>   
                            </div>                        
                        </div>                           
                    </div>                       
                </div>
            </div>
        </div>
    </section>

@endsection