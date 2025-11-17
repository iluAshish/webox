@extends('web.layouts.main')
@section('content') 
 @if(@$banner->image != '')
<section class="bread-nav-wrapper">
    <div class="container-ctn">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                @if(@$banner->title)
                                    <div class="big-title">{!! $banner->title ??'' !!}</div>
                                @else
                                    <div class="big-title">Our Blogs</div>
                                @endif

                <ul class="list-inline bread-nav-action">
                    <li class="list-inline-item">
                        <a href="{{url('/')}}" class="text-decoration-none">Home</a>
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                        <a href="{{url('blogs')}}" class="active text-decoration-none">Blogs</a>
                    </li>
                </ul>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end">
                @if(@$banner->image != '')
                <div class="brid-right">
                        {!! Helper::printImage($banner,'image','image_webp','image_attribute','img-fluid') !!}
                </div>
                @else
                <div class="brid-right">
                    {{-- {!! Helper::printImage($service_banner,'image','image_webp','image_attribute','img-fluid') !!} --}}
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif
@if(@$banner->image == '')
    <section class="bread-crumb-only bread-nav-wrapper">
        <div class="container-ctn">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <ul class="list-inline bread-nav-action">
                        <li class="list-inline-item">
                            <a href="{{url('/')}}" class="text-decoration-none">Home</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            <a href="{{url('blogs')}}" class="active text-decoration-none">Blogs</a>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>
    </section>
@endif
         {{-- <!-- hero slider -->
        <!-- breadcumbs -->
        <div class="breadcumbs-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="1920" height="600" viewBox="0 0 1920 600" fill="none">
                <path d="M0 0V600L1920 432V0H0Z" fill="url(#paint0_linear_359_1772)" />
                <defs>
                    <linearGradient id="paint0_linear_359_1772" x1="1.14887e-06" y1="260" x2="2041" y2="83.9999" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C709D" />
                        <stop offset="1" stop-color="#75B341" />
                    </linearGradient>
                </defs>
            </svg>
            <div class="container-ctn">
                <div class="left-banner">
                    <div class="left-wrapper">
                        <div class="center-title">
                            @if(@$banner->title)
                                <div class="big-title">{!! $banner->title ??'' !!}</div>
                            @else
                                <div class="big-title">Our Blogs</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if(@$banner->image != '')
            <div class="right-img">
                <div class="mask-img">
                    {!! Helper::printImage($banner,'image','image_webp','image_attribute','img-fluid') !!}
                </div>
            </div>
            @endif
            <div class="bread-action">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="{{url('/')}}/" class="text-decoration-none">Home</a>
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                        <a href="{{url('/')}}/blogs/" class="active text-decoration-none">{{ @$blog->title }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end of breadcumbs --> --}}
        <section class="blog-detail-page">
            <div class="container-ctn">
                <div class="blogs-title">
                    <p class="small-title">
                        Blog
                    </p>
                    <div class="big-title">Our Blog</div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="blog-detail-content">
                                <a >
                            <div class="blog-img">
                                <div class="ply-img">
                                    @if(isset($blog->image))
                                    {!! Helper::printImage($blog,'image','image_webp','image_attribute','img-fluid') !!}
                                    @else
                                    <img src="{{ asset('web/images/default-blog.webp')}}" class="img-fluid">
                                    @endif
                                    @if($blog->video_url)
                                    <div class="video-modal" data-fancybox="video">
                                        <div class="play-btn"  href="@if($blog->video_url) {{$blog->video_url}} @else {!! $blog->image_webp !!} @endif" class="text-decoration-none" data-fancybox="gallery">
                                            <img src="{{ asset('web/images/icons/play-btn.svg')}}" alt="" />
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                                </a>
                            
                            <!--<a href="@if($blog->video_url) {{$blog->video_url}} @else {!! $blog->image_webp !!} @endif" class="text-decoration-none" data-fancybox="gallery">-->
                            <!--    <div class="portfolio-img">-->
                            <!--        {!! Helper::printImage($blog, 'image', 'image_webp', 'image_attribute', 'img-fluid') !!}-->
                            <!--        @if($blog->video_url)-->
                            <!--        <div class="video-wrap">-->
                            <!--            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#vidModal">-->
                            <!--                <img src="{{ asset('web/images/icons/play-btn.svg')}}" alt="" />-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        @endif-->

                            <!--    </div>-->
                            <!--</a>-->
                            
                            <div class="blog-title">
                                <h1>{{ @$blog->title }}</h1>
                            </div>
                            <div class="blog-post-detail">
                                <div class="blog-slug">
                                    <p>{{ @$blog->written_by }}</p>
                                </div>
                                @php
       

                            $date = @$blog->posted_date; 
                            $format=Carbon\Carbon::parse($date);

                            $formattedDate = $format->format('F d, Y'); // Format the date with the month in alphabet

                                    @endphp                         
                                <div class="blog-date">
                                    <p>{{$formattedDate}}</p>
                                </div>
                            </div>
                            <div class="blog-description">
                            {!! @$blog->description !!}
                            </div>
                            <br />
                            @if(isset($blog->video_thumbnail_image))
                        <div class="blog-img">
                                    {!! Helper::printImage($blog,'video_thumbnail_image','video_thumbnail_image_webp','video_thumbnail_attribute','img-fluid') !!}
                        </div>
                        @endif
                            <div class="blog-description">
                            @if(@$blog->alternate_description != '' || @$blog->alternate_description != null)
                                    {!! @$blog->alternate_description !!}
                            @endif
                            </div>
                           
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="social-wrapper-area">
                                        <div class="social-share">
                                            <div class="s-title">
                                                <p>Share This Post</p>
                                            </div>
                                            <div class="social">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('blog/'.@$blog->short_url) }}" class="text-decoration-none">
                                                            <i class="fa-brands fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url('blog/'.@$blog->short_url) }}" class="text-decoration-none">
                                                            <i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="https://twitter.com/intent/tweet/?url={{ url('blog/'.@$blog->short_url) }}" class="text-decoration-none">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row blog-action-content justify-space-between">

                                @if(@$previousBlog)
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="left-wrapp">
                                            <div class="b-title-icon-prev">
                                                <a href="{{ url('blog/'.@$previousBlog->short_url) }}" class="text-decoration-none">
                                                    <div class="row">
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                                            <div class="prev-b-img">
                                                                {!! Helper::printImage($previousBlog,'image','image_webp','image_attribute','img-fluid') !!}
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                                            <div class="discription">
                                                                <p>
                                                                    {{ @$previousBlog->title }}
                                                                </p>
                                                            </div>
                                                            <ul class="list-inline mb-0 blog-botm-action">
                                                                <li class="list-inline-item">
                                                                    <button class="btn ps-0">
                                                                        <img src="{{asset('web/images/icons/dubble-left.webp')}}" class="img-fluid" alt="prev" />
                                                                    </button>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <div class="b-prev action-title">
                                                                        <p>Previous</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if(@$nextBlog)
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="right-wrapp">
                                        <div class="b-title-icon-next">
                                            <a href="{{ url('blog/'.@$nextBlog->short_url) }}" class="text-decoration-none">
                                                <div class="row">
                                                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                                        <div class="discription">
                                                            <p>
                                                            {{ @$nextBlog->title }}
                                                            </p>
                                                        </div>
                                                        <ul class="list-inline mb-0 blog-botm-action">
                                                            <li class="list-inline-item">
                                                                <div class="b-next action-title">
                                                                    <p>Next</p>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <button class="btn pe-0">
                                                                    <img src="{{asset('web/images/icons/dubble-right.webp')}}" class="img-fluid" alt="next" />
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                                        <div class="prev-b-img">
                                                            {!! Helper::printImage($nextBlog,'image','image_webp','image_attribute','img-fluid') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="right-top-post">
                            <div class="r-h-post-title">
                                <h2>Recent Blog</h2>
                            </div>
                            <div class="recent-post">
                                <ul class="list-inline mb-0 recent-list">
                                @php 
                                $i=0;
                                @endphp
                                 @foreach($recentBlogs as $blog)
                                 
                                    @php
                                    $i++;

                                        $date = @$blog->posted_date; 
                                        $format=Carbon\Carbon::parse($date);

                                        $formattedDate = $format->format('d.m.Y'); // Format the date with the month in alphabet

                                    @endphp
                                    <li>
                                        <a href="{{url('blog/'.$blog->short_url)}}" class="text-decoration-none">
                                            <div class="post-flex">
                                                <div class="r-post-img">
                                                @if(isset($blog->image))
                                                {!! Helper::printImage($blog,'image','image_webp','image_attribute','img-fluid') !!}
                                                @else
                                                <img src="{{asset('web/images/recent-blog-1.png')}}" class="img-fluid w-100">
                                                @endif
                                                </div>
                                                <div class="r-post-title">
                                                    <div class="m-date m-color">
                                                        <p>{{$formattedDate}}</p>
                                                    </div>
                                                    <h3>{{ @$blog->title }}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of blog -->  
        <!-- video moda -->
        <!--<div class="modal fade video-modal" id="vidModal" tabindex="-1" aria-labelledby="vidModalLabel" aria-hidden="true">-->
        <!--    <div class="modal-dialog modal-dialog-centered modal-xl">-->
        <!--        <div class="modal-content">-->
        <!--            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
        <!--            <div class="modal-body">-->
        <!--                <div class="vid-wrapper">-->
        <!--                    <iframe scrolling="no" src="{{ $blog->video_url }}" allowfullscreen="allowfullscreen" allow="autoplay; fullscreen"></iframe>-->
                            <!--<video class="b-lazy b-loaded banner-previewVideo" controls>-->
                                <!-- autoplay="" playsinline="" muted="" loop="" -->
                            <!--    <source type="video/mp4" src="{{ $blog->video_url }}" />-->
                            <!--</video>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- end of video modal -->
@endsection