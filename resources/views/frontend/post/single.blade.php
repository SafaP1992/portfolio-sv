@extends('frontend.layouts.master')


@section('content')

<section class="flat-blog-sidebar flat-blog-details">
    <div class="themes-container">
        <div class="row">
            <div class="col-lg-12">
                <article class="article">
                    <div class="post">
                        <div class="heading-post center">
                            {{-- <h6 class="text-u text-color-3 ls-01">TRENDS</h6>                                                                 --}}
                            <h2 class="text-t">{{$post->title}}</h2>
                            {{-- <div class="box-meta flex-three">
                                <img src="assets/images/blog/avatar-blog.jpg" alt=""> 
                                <div class="meta texts-p"> by <a href="#" class="user">Themesflat </a>  <a href="#" class="">August 13, 2022</a> </div> 
                            </div> --}}
                        </div> 
                        <div class="image-one text-center">
                            <img src="/assets/images/2.jpg" alt="" class="rounded text-center" width="420"> 
                        </div>   
                        <div class="box-text style-1">
                            <p>{{$post->description}}</p>
                        </div>
                        {{-- <div class="image-box flex-one">
                            <img class="img-1" src="assets/images/blog/blog-deatils-sidebar-2.jpg" alt=""> 
                            <img class="img-2" src="assets/images/blog/blog-deatils-sidebar-3.jpg" alt=""> 
                        </div>
                        <h2 class="title-bl text-t">We design industry materials of innovation</h2>
                        <div class="box-text style-2">
                            <p class="text-one p-18">Thus it is well-known that email ranks as one of the most cost-effective as well as best conversion providing lead generation 
                                tactics in B2B. Before loading up a number of messages into the inbox of the prospect, it is essential to encourage and support the different leads 
                                in the funnel at this stage.</p> 
                            <p class="p-18">As a midway answer to these two answers, there was a third opinion about “Lead Qualification” that revealed a new aspect. Though many 
                                respondents might show interest in buying, there are very few who would really want to buy at that specific point in time.</p>   
                        </div>  
                        <div class="box-item flex-two">
                            <div class="tags flex-three ">
                                <h5 class="title-tag fs-16 fw-7">Tags:</h5>
                                <div class="flex fs-16 fw-6 link-style-2">
                                    <a href="#">Desgin</a>
                                    <a href="#"> Development</a>
                                    <a href="#"> Template</a>
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
                        </div> --}}
                        
                    </div>                        
                </article>
            </div>
        </div>
    </div>
</section>

    

@endsection