@extends('web.layouts.main') @section('content')
<article>
    @if($homeBanners->isNotEmpty())
    <!-- hero slider -->
     <section class="hero-slider-wrapper">
        <div class="container-ctn">
            <div class="hero-slider">
                @foreach($homeBanners as $homeBanner)
                <div>
                    <div class="hero-slider-contant">
                        <div class="content-area">
                            <div class="left-content">
                                <!--<p class="small-title" style=" text-transform: none; ">-->
                                <!--    WeBox Solutions-->
                                <!--</p>-->
                                @if($homeBanner->title)
                                <h1 class="big-title">
                                    {{ $homeBanner->title }}
                                </h1>
                                @endif
                                @if($homeBanner->sub_title)
                                <p class="tagline">
                                    {{ $homeBanner->sub_title }}
                                </p>
                                @endif
                                <div class="slider-buttons">
                                    <div class="primaryBtn" id="btnposition">
                                        <div id="slide"></div>
                                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#enquiry-modal"> Quick Enquiry</a>
                                    </div>
                                    @if($homeBanner->button_url)
                                    <div class="secondaryBtnNew primaryBtn" id="btnposition">
                                        <div id="slide"></div>
                                        <a href="{{ $homeBanner->button_url }}" class="text-decoration-none">{{ $homeBanner->button_txt }}</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="right-content">
                                {!! Helper::printImage($homeBanner,'image','image_webp','image_attribute','img-fluid',null,'822','600') !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- service slider -->
    @endif
    <section class="service-wrapper pt-5">
            <div class="container-ctn">
                 <!-- <div class="bannerTxt mb-5 pb-md-5 d-flex flex-wrap justify-content-between align-items-center">-->
                 <!--    <div class="col-md-4">-->
                 <!--       <h2 class="big-title mb-2 mt-0">WE ARE ALL ABOUT CONTAINERS</h2>-->
                 <!--    </div>-->
                 <!--    <div class="col-md-7">-->
                 <!--     <p>Unleash the magic of containers. Transform the ordinary into extraordinary with WeBox Solutions - your one-stop shop for imaginative and functional WeBox Solutions.</p>-->
                 <!--   </div>-->
                 <!--</div>-->
                <!-- <div class="bannerTxt mb-5 pb-md-5 text-center">-->
                <!--   <h2 class="big-title mb-2">WE ARE ALL ABOUT CONTAINERS</h2>-->
                <!--   <p>Unleash the magic of containers. Transform the ordinary into extraordinary with WeBox Solutions - your one-stop shop for imaginative and functional WeBox Solutions.</p>-->
                <!--</div>-->
            <div class="row align-items-end">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                    <p class="small-title">
                        OUR SERVICES
                    </p>
                    <h2 class="big-title">A WORLD OF POSSIBILITIES</h2>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 d-flex justify-content-end">
                    <div class="primaryBtn" id="btnposition">
                        <div id="slide"></div>
                        <a href="{{url('services')}}" class="text-decoration-none"> EXPLORE MORE</a>
                    </div>
                </div>
            </div>
          </div>
        <div class="container-ctn service-list">
            <div class="row">
                @foreach($services as $service)
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <a href="{{ url('/') }}/service/{!! $service->short_url !!}">
                        <div class="service-box">
                            {!! Helper::printImage($service,'image','image_webp','image_attribute','img-fluid lazy-load',null,'521','461') !!}
                            {{-- <img src="web/images/service-1.png" class="img-fluid" loading='lazy' width="521" height="461" alt="service slider" /> --}}
                            <div class="slider-content">
                                @if(@$service->title != '')
                                <h3>{!! $service->title !!}</h3>
                                @endif
                                <div class="discription">
                                    @if(@$service->short_description != '')
                                    <p>{!! $service->short_description !!}</p>
                                    @endif
                                </div>
                                <div class="read-more">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                            <g clip-path="url(#clip0_13_136)">
                                                <path
                                                    d="M23.75 0H6.25C2.80375 0 0 2.80375 0 6.25V23.75C0 27.1963 2.80375 30 6.25 30H23.75C27.1963 30 30 27.1963 30 23.75V6.25C30 2.80375 27.1963 0 23.75 0ZM20 16.25H16.25V20C16.25 20.6912 15.69 21.25 15 21.25C14.31 21.25 13.75 20.6912 13.75 20V16.25H10C9.31 16.25 8.75 15.6912 8.75 15C8.75 14.3088 9.31 13.75 10 13.75H13.75V10C13.75 9.30875 14.31 8.75 15 8.75C15.69 8.75 16.25 9.30875 16.25 10V13.75H20C20.69 13.75 21.25 14.3088 21.25 15C21.25 15.6912 20.69 16.25 20 16.25Z"
                                                    fill="#E9651B"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_13_136">
                                                    <rect width="30" height="30" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="action-title">Read More</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end of service slider -->

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
                                <div class="lead-img" style=" margin-top: 20px; ">
                                    {!! Helper::printImage($why_choose_us,'image','webp_image','alt="leader"','img-fluid  lazy-load',null,'320','230') !!}
                                    {{-- <img src="web/images/employee.png" loading='lazy' class="img-fluid" width="230" height="320" alt="leader" /> --}}
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
                                <img src="web/images/brd.svg" class="img-fluid" alt="" loading='lazy' />
                            </div>
                            <div class="">
                                <p>200+ Companies satisfied with our offerings</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                        <div class="client-slider">
                            @foreach($clients as $client)
                            <div>
                                <div class="client-box" title="{{ @$client->title}}">
                                    {!! Helper::printImage($client,'image','image_webp','image_attribute','img-fluid  lazy-load',null,'86','100') !!}
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
        @if($testimonials->isNotEmpty())
        <section class="testimonial-wrapper">
            <div class="container-ctn">
                <div class="row align-items-end">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <p class="small-title">
                            testimonials
                        </p>
                        <h2 class="big-title">Shining light on our excellence</h2>
                    </div>
                </div>
            </div>
            <div class="container-ctn">
                <div class="testimonal-slider">
                    @foreach($testimonials as $testimonial)
                    <div>
                        <div class="testimonial-box" data-match-height="groupName">
                            <div class="discription">
                                <p>
                                    {!!$testimonial->message!!}
                                </p>
                            </div>
                            <div class="review-wrapper">
                                <div class="left">
                                    <h3>{{ @$testimonial->name }}</h3>
                                    <p>{{ @$testimonial->designation }}</p>
                                </div>
                                <div class="right">
                                    <div class="stars" data-stars="{{$testimonial->rating;}}">
                                        <div class="s-icon">
                                            @if($testimonial->review_type == 'Google')
                                            <img src="{{asset('web/images/icons/google.svg')}}" loading='lazy' class="img-fluid s-icon" width="20" height="20" alt="google" />
                                            @elseif($testimonial->review_type == 'Instagram')
                                            <img class="img-fluid s-icon" src="{{asset('web/images/icons/insta.png')}}" loading='lazy' width="20" height="20" alt="instagram" />
                                            @elseif($testimonial->review_type == 'Facebook')
                                            <img class="img-fluid s-icon" src="{{asset('web/images/icons/fb.png')}}"  loading='lazy' width="20" height="20" alt="facebook" />
                                            @endif
                                        </div>
                                        <!--@php $rating = $testimonial->rating; @endphp @for ($i = 1; $i <= 5; $i++) @if ($i <= $rating)-->
                                        <!--    <svg height="25" width="23" class="star rating" data-rating="1">-->
                                        <!--        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule: nonzero;" />-->
                                        <!--    </svg>-->
                                        <!--@else @endif @endfor-->
                                            <div class="rating my-rating-readonly"  data-rating="{{$testimonial->rating;}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
</article>

<script>
    document.addEventListener("DOMContentLoaded", function () {
  const img = document.querySelector(".right-content img");
  if (img) {
    img.alt = "shipping container for sale in houston texas"; // Change to your desired alt text
  }
});
</script>
@endsection
