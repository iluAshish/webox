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
                                 <div class="big-title">ABOUT US</div>
                             @endif

                <ul class="list-inline bread-nav-action">
                    <li class="list-inline-item">
                        <a href="{{url('/')}}" class="text-decoration-none">Home</a>
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                        <a href="{{url('about')}}" class="active text-decoration-none">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end">
                @if(@$banner->image != '')
                <div class="brid-right">
                        {!! Helper::printImage($banner,'image','image_webp','image_attribute','img-fluid') !!}
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
                            <a href="{{url('about')}}" class="active text-decoration-none">About Us</a>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>
    </section>
@endif

<section class="about-wrapper pb-0">
    <div class="container-ctn">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 w-1024">
                <div class="left-content">
                    <div class="compny-img">
                        <img src="web/images/container.png" class="co-img img-fluid" width="791" height="750" alt="compny image" />
                        <div class="comp-year">
                            {!! Helper::printImage($about,'image','image_webp','image_attribute','img-fluid') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 w-1024">
                <div class="right-content">
                    @if(@$about->sub_title != '' || @$about->sub_title != null)
                    <p class="small-title">
                        {!! @$about->sub_title !!}
                    </p>
                    @endif
                    <h1 class="big-title">{{ @$about->title }}</h1>
                    @if(@$about->short_description != '' || @$about->short_description != null)
                    <h2 class="tag-line">{!! @$about->short_description !!}</h2>
                    @endif
                    
                    <div class="discription">
                        @if(@$about->description != '' || @$about->description != null)
                                {!! @$about->description !!}
                                @endif
                    </div>
                </div>
            </div>
            <div class="col-12 mt-80">
                <div class="discription">
                    @if(@$about->alternate_description != '' || @$about->alternate_description != null)
                        {!! @$about->alternate_description !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of about us section  -->
<section class="about-mission-wrapper">
    <div class="container-ctn">
        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 green-bg">
                <div class="left-content">
                    <!--<p class="small-title">-->
                    <!--    MISSION-->
                    <!--</p>-->
                    <h2 class="big-title">Our Mission</h2>
                    <div class="discription">
                        <p>
                          To deliver a high-quality container service that helps businesses store, transport, and build with confidence. 

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 pe-0 ps-0">
                <img src="web/images/abt-container.jpg" class="img-fluid mis-img" alt="mission container" />
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 orange-bg">
                <div class="right-content">
                    <!--<p class="small-title">-->
                    <!--    VISION-->
                    <!--</p>-->
                    <h2 class="big-title">Our Vision</h2>
                    <div class="discription">
                        <p>
To become a global leader in innovative container services, known for great quality and a customer obsessed approach.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- why choose us -->
        <section class="whychoose-wrapper">
            <div class="container-ctn">
                <div class="row choose-row">
                    
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="right-content">
                            @if(@$why_choose_us->subtitle != '')    
                            <p class="small-title">
                                {!! $why_choose_us->subtitle !!}
                            </p>
                            @endif
                            @if(@$why_choose_us->title != '')
                            <h2 class="big-title">{!! $why_choose_us->title !!}</h2>
                            @endif
                            <div class="discription">
                                @if(@$why_choose_us->description != '')
                                <p>{!! $why_choose_us->description !!}</p>
                                @endif
                            </div>
                            <div class="conuter-wrapper">
                                <div class="lead-img">
                                    {!! Helper::printImage($why_choose_us,'image','webp_image','alt="leader"','img-fluid',null,'320','230') !!}
                                    {{-- <img src="web/images/employee.png" class="img-fluid" width="230" height="320" alt="leader" /> --}}
                                    <div class="counter-title">
                                        <div class="counter timer" data-to="20" data-speed="2000">20<sup>+</sup></div>
                                        <p>Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="left-content">
                            <div class="row">
                                @foreach($keyFeatures as $index => $feature)
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="choose-box {{ $index % 2 == 0 ? '' : 'mt-40' }}">
                                            <div class="number">
                                                <p>{!! $feature->number !!}</p>
                                            </div>
                                            <div class="choose-content">
                                                <h3 class="title">{!! $feature->title !!}</h3>
                                                <div class="discription">
                                                    <p>{!! $feature->description !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             @if($clients->isNotEmpty())
            <div class="container-ctn client-container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="client-border">
                            <div class="">
                                <img src="web/images/brd.svg" class="img-fluid" alt="" />
                            </div>
                            <div class="">
                                <p>200+ COMPANIES SATISFIED WITH OUR OFFERINGS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                        <div class="client-slider">
                            @foreach($clients as $client)
                            <div>
                                <div class="client-box" title="{{ @$client->title}}">
                                    {!! Helper::printImage($client,'image','image_webp','image_attribute','img-fluid',null,'86','100') !!}
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            @endif
        </section>
        <!-- end of why choose us -->

@endsection

