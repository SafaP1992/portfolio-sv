@extends('frontend.layouts.master')

@section('content')

<div id="page" class="clearfix">
    


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
                                            <p>{{Str::limit($post->description, 40)}}</p>
                                            <div class="sc-btn-button">
                                                <a href="post/{{$post->id}}" class="sc-button btn-2"><span>View
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