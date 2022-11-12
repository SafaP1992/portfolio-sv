@extends('frontend.layouts.master')


@section('content')


    <!-- blog details -->
    <section class="flat-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="post">
                        <div class="heading-post">
                            {{-- <h6 class="text-u text-color-3 ls-01">TRENDS</h6>                                                                 --}}
                            <h2 class="text-t">{{$post->title}}</h2>
                            <div class="box-meta flex-three">
                                <img src="assets/images/blog/avatar-blog.jpg" alt=""> 
                                {{-- <div class="meta texts-p"> by <a href="#" class="user">Themesflat </a>  <a href="#" class="">August 13, 2022</a> </div>  --}}
                            </div>
                        </div>
                        <p>
                            {{$post->description}}
                        </p>

                        
                        <div class="box-item flex-two">
                            <div class="tags flex-three ">
                                <h5 class="title-tag fs-16 fw-7">Tags:</h5>
                                <div class="flex fs-16 fw-6 link-style-2">
                                    <a href="#">Fashion</a>
                                    <a href="#"> Trending</a>
                                    <a href="#"> Summer</a>
                                </div>                                         
                            </div> 
                            <div class="share flex-three ">
                                <h5 class="title-share fs-16 fw-7">Share:</h5>                                         
                                <div class="icon-share">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>                                         
                                </div>
                            </div>
                        </div>
                        <div class="button-pagination flex-one">
                            <div class="inner inner-1">
                                <div class="btn-pagi text-u link-style-2"><a href="#" >Previous</a></div>
                                <h4 class="fs-16"><a href="#">I Couldn’t Help But Splurge On These Epic Fall Finds</a> </h4>
                            </div>
                            <div class="inner inner-2">
                                <div class="btn-pagi text-u link-style-2"><a href="#" >Next</a></div>
                                <h4 class="fs-16"><a href="#">My Mani Photo Dump To Save To Your Nail Inspo Folder</a></h4>
                            </div>                                      
                        </div>                                                                                
                    </div>                        
                </div>
            </div>
        </div>
    </section>

    

@endsection