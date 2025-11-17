<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/x-icon" href="{{ asset('web/images/fav-icon.png') }}" />

    <meta name="title" content="{!! isset($meta_data)?$meta_data->meta_title:'' !!}">
    <meta name="description" content="{!! isset($meta_data)?$meta_data->meta_description:'' !!}" />
    <meta name="keywords" content="{!! isset($meta_data)?$meta_data->meta_keyword:'' !!}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{!! @$meta_data->meta_title !!}</title>
    {!! isset($meta_data)?$meta_data->other_meta_tag:'' !!}
    {!! isset($siteInformation)?$siteInformation->header_tag:'' !!}
    <link rel="stylesheet" type="text/css" href="{{ asset('web/scss/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/scss/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/custom.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('web/css/slick.min.css') }}" />-->
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('web/css/slick-theme.min.css') }}" />-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" async/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" defer  />
</head>
<body>
    {!! isset($siteInformation)?$siteInformation->body_tag:'' !!}
<!-- header section -->
<header class="main-nav">
    <div class="container-ctn">
        <header>
            <div class="main-header">
                <nav class="navbar navbar-expand-lg navbar-light main-navbar">
                    <div class="container-fluid">
                        <div class="hamburg-menu-wrapper">
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{Helper::getLogo()}}" class="img-fluid main-logo" alt="main_logo" width="130" height="100" />
                            </a>
                            <div class="left-menu">
                                <a class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#mobileOffcanvasExample" role="button" aria-controls="offcanvasExample">
                                    <img src="{{ asset('web/images/hamburgerMenu.webp') }}" alt="hamburg menu" width="130" height="100" />
                                </a>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{url('/')}}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('about')}}">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('product')}}">
                                        Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('services')}}">
                                        Service
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('blogs')}}">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('contact')}}">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <div class="quick-enq-wrapper" data-bs-toggle="modal" data-bs-target="#enquiry-modal">
                                    <a href="#" class="quick-enq text-decoration-none">
                                        <div class="btn-icon">
                                            <img src="{{ asset('web/images/icons/enq-btn-icon.svg') }}" class="img-fluid"  width="40" height="43" alt="button"/>
                                        </div>
                                        <div class="btn-title">
                                            <p>Enquiry</p>
                                        </div>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="offcanvas offcanvas-start mobile_left_menu" tabindex="-1" id="mobileOffcanvasExample" aria-labelledby="offcanvasExampleLabel" style="visibility: hidden;" aria-hidden="true">
                <div class="offcanvas-header">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{Helper::getLogo()}}" alt="Container Solution" width="100" height="77" />
                    </a>
                    <button aria-controls="offcanvasExample" role="button" href="#mobileOffcanvasExample" data-bs-toggle="offcanvas" class="btn-close text-reset" type="button"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('product')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('services')}}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('blogs')}}">Blog</a>
                        </li>
                        <li class="nav-item last">
                            <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
</header>
<!-- end of heade section -->
@yield('content')
<!-- end of heade section -->



<!-- footer section -->
<!-- data-aos="fade-up" -->
<footer>
    <section class="footer-wrapper">
    <div class="container-ctn">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="left-box">
                    <div class="footer-content">

                        @if(@$siteInformation->footer_logo != '' || @$siteInformation->footer_logo != null)
                            <div class="foot-logo">
                                <img src="{{url('/')}}/{{@$siteInformation->footer_logo}}" class="img-fluid" width="203" height="256"  alt="footer logo" />
                            </div>
                        @endif


                        <div class="discription">
                            @if(@$siteInformation->company_info_footer != '' || @$siteInformation->company_info_footer != null)
                                <p>{!! isset($siteInformation)?$siteInformation->company_info_footer:'' !!}</p>
                            @endif
                        </div>
                        <div class="social-connect">
                            <p>Connect Us</p>
                        </div>
                        <ul class="list-inline mb-0 social-action">
                            @if(@$siteInformation->instagram_url != '' || @$siteInformation->instagram_url != null)
                                <li class="list-inline-item"><a class="iconBox" target="_blank" href="{{@$siteInformation->instagram_url}}"><i class="fa-brands fa-instagram"></i></a>
                            @endif
                            @if(@$siteInformation->facebook_url != '' || @$siteInformation->facebook_url != null)
                                <li class="list-inline-item"><a class="iconBox" target="_blank" href="{{@$siteInformation->facebook_url}}"><i class="fa-brands fa-facebook"></i></a>
                            @endif
                            @if(@$siteInformation->linkedin_url != '' || @$siteInformation->linkedin_url != null)
                                <li class="list-inline-item"><a class="iconBox" target="_blank" href="{{@$siteInformation->linkedin_url}}"><i class="fa-brands fa-linkedin"></i></a>
                            @endif
                            @if(@$siteInformation->twitter_url != '' || @$siteInformation->twitter_url != null)
                                <li class="list-inline-item"><a class="iconBox" target="_blank" href="{{@$siteInformation->twitter_url}}"><i class="fa-brands fa-twitter"></i></a>
                            @endif
                            @if(@$siteInformation->snapchat_url != '' || @$siteInformation->snapchat_url != null)
                                <li class="list-inline-item"><a class="iconBox" target="_blank" href="{{@$siteInformation->snapchat_url}}"><i class="fa-brands fa-snapchat"></i></a>
                            @endif
                            @if(@$siteInformation->youtube_url != '' || @$siteInformation->youtube_url != null)
                                <li class="list-inline-item"><a class="iconBox" target="_blank" href="{{@$siteInformation->youtube_url}}"><i class="fa-brands fa-youtube"></i></a>
                            @endif
                            @if(@$siteInformation->pinterest_url != '' || @$siteInformation->pinterest_url != null)
                                <li class="list-inline-item"><a class="iconBox" target="_blank" href="{{@$siteInformation->pinterest_url}}"><i class="fa-brands fa-pinterest"></i></a>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
                <div class="footer-content">
                    <div class="foot-title">
                        <h3>Quick Links</h3>
                    </div>
                    <div class="foo-links">
                        <ul class="list-inline mb-0 li-img">
                            <li>
                                <a href="{{url('/')}}" class="nav-link text-decoration-none">Home</a>
                            </li>
                            <li>
                                <a href="{{url('about')}}" class="nav-link text-decoration-none">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('product')}}" class="nav-link text-decoration-none">Products</a>
                            </li>
                            <li>
                                <a href="{{url('services')}}" class="nav-link text-decoration-none">Services</a>
                            </li>
                            <li>
                                <a href="{{url('portfolio')}}" class="nav-link text-decoration-none">Portfolio</a>
                            </li>
                            <li>
                            <li>
                                <a href="{{url('blogs')}}" class="nav-link text-decoration-none">Our Blog</a>
                            </li>
                            <li>
                                <a href="{{url('contact')}}" class="nav-link text-decoration-none">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="footer-content">
                    <div class="foot-title">
                        <h3>Connect Us</h3>
                    </div>
                    <div class="adress">
                        <ul class="list-inline red-call">
                            <li>
                                <div class="flex-wrapper">
                                    <div class="left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <path
                                                d="M12.4997 0C9.73793 0.00303291 7.09018 1.10147 5.13733 3.05432C3.18448 5.00717 2.08604 7.65493 2.08301 10.4167C2.08301 15.9188 10.833 23.4719 11.8268 24.3156L12.4997 24.8844L13.1726 24.3156C14.1663 23.4719 22.9163 15.9188 22.9163 10.4167C22.9133 7.65493 21.8149 5.00717 19.862 3.05432C17.9092 1.10147 15.2614 0.00303291 12.4997 0ZM12.4997 15.625C11.4696 15.625 10.4626 15.3195 9.60608 14.7472C8.74957 14.1749 8.08201 13.3615 7.6878 12.4098C7.2936 11.4581 7.19045 10.4109 7.39142 9.40057C7.59238 8.39025 8.08843 7.46222 8.81683 6.73382C9.54523 6.00542 10.4733 5.50938 11.4836 5.30841C12.4939 5.10745 13.5411 5.21059 14.4928 5.60479C15.4445 5.999 16.2579 6.66657 16.8302 7.52307C17.4025 8.37958 17.708 9.38656 17.708 10.4167C17.7064 11.7975 17.1571 13.1213 16.1807 14.0977C15.2043 15.0741 13.8805 15.6233 12.4997 15.625Z"
                                                fill="#75B341"
                                            />
                                            <path
                                                d="M12.5 13.5415C14.2259 13.5415 15.625 12.1424 15.625 10.4165C15.625 8.69061 14.2259 7.2915 12.5 7.2915C10.7741 7.2915 9.375 8.69061 9.375 10.4165C9.375 12.1424 10.7741 13.5415 12.5 13.5415Z"
                                                fill="#75B341"
                                            />
                                        </svg>
                                    </div>
                                    <div class="right">
                                        @if(@$siteInformation->footer_location != '' || @$siteInformation->footer_location != null)
                                            <p>{!! isset($siteInformation)?$siteInformation->footer_location:'' !!}</p>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex-wrapper">
                                    <div class="left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" viewBox="0 0 25 23" fill="none">
                                            <g clip-path="url(#clip0_1_944)">
                                                <path
                                                    d="M24.9521 5.31104L16.1833 13.3783C15.2056 14.2755 13.881 14.7794 12.5 14.7794C11.119 14.7794 9.7944 14.2755 8.81667 13.3783L0.0479167 5.31104C0.0333333 5.46245 0 5.59949 0 5.74995V17.25C0.00165402 18.5203 0.550919 19.7382 1.52731 20.6365C2.50371 21.5348 3.82751 22.0401 5.20833 22.0416H19.7917C21.1725 22.0401 22.4963 21.5348 23.4727 20.6365C24.4491 19.7382 24.9983 18.5203 25 17.25V5.74995C25 5.59949 24.9667 5.46245 24.9521 5.31104Z"
                                                    fill="#75B341"
                                                />
                                                <path
                                                    d="M14.7108 12.0229L24.2254 3.26855C23.7645 2.56544 23.1144 1.98346 22.3379 1.57875C21.5613 1.17404 20.6845 0.960251 19.7921 0.958008H5.20872C4.31625 0.960251 3.43945 1.17404 2.66292 1.57875C1.88638 1.98346 1.23631 2.56544 0.775391 3.26855L10.29 12.0229C10.877 12.5609 11.6718 12.8629 12.5004 12.8629C13.3289 12.8629 14.1238 12.5609 14.7108 12.0229Z"
                                                    fill="#75B341"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1_944">
                                                    <rect width="25" height="23" fill="#05735B" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="right">
                                        @if(@$siteInformation->email != '' || @$siteInformation->email != null)
                                            <a href="mailto:{{@$siteInformation->email}}">{{@$siteInformation->email}}</a>
                                        @endif
                                        @if(@$siteInformation->alternate_email != '' || @$siteInformation->alternate_email != null)
                                            <a href="mailto:{{@$siteInformation->alternate_email}}">{{@$siteInformation->alternate_email}}</a>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex-wrapper">
                                    <div class="left">
                                        <div class="f-call">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M21.9283 11.9634C21.6916 11.9634 21.4645 11.8694 21.2971 11.702C21.1297 11.5346 21.0357 11.3075 21.0357 11.0708C21.0338 9.17736 20.2808 7.36204 18.942 6.0232C17.6031 4.68436 15.7878 3.93136 13.8944 3.92947C13.6576 3.92947 13.4306 3.83543 13.2632 3.66802C13.0958 3.50061 13.0017 3.27356 13.0017 3.03681C13.0017 2.80006 13.0958 2.57301 13.2632 2.4056C13.4306 2.2382 13.6576 2.14415 13.8944 2.14415C16.2611 2.14675 18.5301 3.08806 20.2036 4.76157C21.8771 6.43507 22.8184 8.70408 22.821 11.0708C22.821 11.3075 22.727 11.5346 22.5595 11.702C22.3921 11.8694 22.1651 11.9634 21.9283 11.9634ZM19.2504 11.0708C19.2504 9.65028 18.6861 8.28797 17.6816 7.28353C16.6772 6.27909 15.3149 5.7148 13.8944 5.7148C13.6576 5.7148 13.4306 5.80885 13.2632 5.97625C13.0958 6.14366 13.0017 6.37071 13.0017 6.60746C13.0017 6.84421 13.0958 7.07126 13.2632 7.23867C13.4306 7.40608 13.6576 7.50012 13.8944 7.50012C14.8414 7.50012 15.7496 7.87632 16.4192 8.54594C17.0888 9.21557 17.465 10.1238 17.465 11.0708C17.465 11.3075 17.5591 11.5346 17.7265 11.702C17.8939 11.8694 18.1209 11.9634 18.3577 11.9634C18.5944 11.9634 18.8215 11.8694 18.9889 11.702C19.1563 11.5346 19.2504 11.3075 19.2504 11.0708ZM21.199 21.9291L22.0114 20.9927C22.5284 20.474 22.8187 19.7715 22.8187 19.0391C22.8187 18.3067 22.5284 17.6042 22.0114 17.0855C21.9837 17.0579 19.8359 15.4055 19.8359 15.4055C19.3205 14.9149 18.6358 14.6417 17.9241 14.6427C17.2125 14.6437 16.5285 14.9188 16.0145 15.4109L14.313 16.8445C12.9242 16.2697 11.6626 15.4262 10.6007 14.3625C9.5388 13.2987 8.69749 12.0357 8.1251 10.6459L9.55336 8.94981C10.0459 8.43579 10.3213 7.75174 10.3225 7.03987C10.3236 6.32799 10.0504 5.64305 9.55961 5.12743C9.55961 5.12743 7.90551 2.98236 7.87783 2.95469C7.36853 2.44207 6.67799 2.15042 5.95542 2.14273C5.23285 2.13505 4.53627 2.41196 4.01618 2.91362L2.98961 3.80629C-3.07514 10.8423 9.98452 23.801 17.2526 23.568C17.9865 23.5723 18.7139 23.4295 19.3917 23.148C20.0695 22.8665 20.684 22.452 21.199 21.9291Z"
                                                    fill="#75B341"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="right">
                                        @if(@$siteInformation->phone != '' || @$siteInformation->phone != null)
                                            <div class="call-1">
                                                <a href="tel:{{$siteInformation->phone}}" class="text-decoration-none">
                                                    {{$siteInformation->phone}},
                                                </a>
                                            </div>
                                        @endif
                                        @if(@$siteInformation->landline != '' || @$siteInformation->landline != null)
                                            <div class="call-1">
                                                <a href="tel:{{$siteInformation->landline}}" class="text-decoration-none">
                                                    {{$siteInformation->landline}},
                                                </a>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="footer-content">
                    <div class="foot-title">
                        <h3>Portfolio</h3>
                    </div>
                    @php
                        use App\Models\Portfolio;
                        $portfolioLists = Portfolio::active()->latest()->take(6)->get();
                    @endphp
                    <div class="row">
                        @if(@$portfolioLists->isNotEmpty())
                            @foreach(@$portfolioLists as $portfolio)
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                    <div class="prot-img">
                                        <a href="{{url('/')}}/portfolio" class="text-decoration-none">
                                            <img src="{{url('/')}}/{{ $portfolio->image_webp }}" class="img-fluid" alt="portfolio" width="148" height="112" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</footer>
<section class="c-write-wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="c-right">
                    <div class="c">
                        @if(@$siteInformation->copyright != '' || @$siteInformation->copyright != null)
                            <p>{!! isset($siteInformation)?$siteInformation->copyright:'' !!}</p>
                        @endif
                    </div>
                    <div class="brd"></div>
                    <div class="designby">
                        <p>Designed By</p>
                        <span><img src="{{ asset('web/images/pentacode-logo.webp') }}" class="img-fluid" alt="pentacode" width="147" height="27" /></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of footer section -->
<div class="leftFixedBox">
    <div class="btn-group dropstart"></div>
    @if(@$siteInformation->whatsapp_number != '' || @$siteInformation->whatsapp_number != null)
        <div class="QuickSideRightBar QuickSideRightBarWhatsapp">
            <a href="https://wa.me/{{@$siteInformation->whatsapp_number}}" target="blank">
                <div class="iconBox">
                    <img class="img-fluid" src="{{ asset('web/images/icons/wp.png') }}" alt="social Connect" width="20" height="20" />
                </div>
                <div class="slideLeft">
                    <span class="textRight">{{@$siteInformation->whatsapp_number}}</span>
                </div>
            </a>
        </div>
    @endif
    @if(@$siteInformation->phone != '' || @$siteInformation->phone != null)
        <div class="QuickSideRightBar QuickSideRightBarWhatsapp">
            <a href="tel:{{@$siteInformation->phone}}">
                <div class="iconBox animateBox">
                    <img class="img-fluid" src="{{ asset('web/images/icons/call.png') }}" alt="social Connect" width="20" height="20" />
                </div>
                <div class="slideLeft">
                    <span class="textRight">{{@$siteInformation->phone}}</span>
                </div>
            </a>
        </div>
    @endif
</div>
<div class="fixedBottomBar">
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="fixedWrapper">
                    <a href="#" class="a-width" data-bs-toggle="modal" data-bs-target="#enquiry-modal">
                                <span class="iconBox animateBox">
                                    <img src="{{ asset('web/images/icons/white-enq-btn-icon.png') }}" class="img-fluid desk-none" alt="Enquiry" width="20" height="20" />
                                    <div class="btn-title">
                                        <p>Enquiry</p>
                                    </div>
                                </span>
                    </a>
                    <a class="a-width animateBox" href="tel:(+971) 50 898 5143">
                                <span class="iconBox animateBox">
                                    <img src="{{ asset('web/images/icons/call.png') }}" class="img-fluid desk-none" alt="call" width="20" height="20" />
                                    <span>Call Us</span>
                                </span>
                    </a>
                    <a class="a-width" href="https://wa.me/+971569986497">
                                <span class="iconBox">
                                    <img src="{{ asset('web/images/icons/wp.png') }}" class="img-fluid desk-none" alt="whatsapp" width="20" height="20" />
                                    <span>Whatsapp</span>
                                </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of sidebar -->
<style>
    .dhabi_error ,.error-message{
        font-size: 20px;
        color: #891c1c;
        display: none;
        padding-top: 15px;
        padding-bottom: 0;
    }
</style>
<!-- modal -->
<div class="modal fade enquiry-form" id="enquiry-modal" tabindex="-1" aria-labelledby="EnquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content en-modal-form">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span class="cls-btn-title">Close</span>
            </button>
            <div class="modal-body">
                <div class="contact-form modal-enqury-wrapper">
                    <form class="enq-form" id="modal-form" method="POST" action="{{url('/service-enquiry')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-8 col-sm-12 col-12 pr-0">

                                <div class="green-bg">
                                    <div class="form-title">
                                        <h2>Enquiry Now</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="fname" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="fname" placeholder="Full Name" />
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M16.7676 14.9141C16.3992 14.0414 15.8645 13.2486 15.1934 12.5801C14.5243 11.9096 13.7317 11.375 12.8594 11.0059C12.8516 11.002 12.8438 11 12.836 10.9961C14.0528 10.1172 14.8438 8.68555 14.8438 7.07031C14.8438 4.39453 12.6758 2.22656 10 2.22656C7.32427 2.22656 5.1563 4.39453 5.1563 7.07031C5.1563 8.68555 5.94731 10.1172 7.16411 10.998C7.1563 11.002 7.14849 11.0039 7.14067 11.0078C6.26567 11.377 5.48052 11.9062 4.80669 12.582C4.1362 13.2511 3.60162 14.0437 3.23247 14.916C2.86982 15.77 2.67423 16.6856 2.6563 17.6133C2.65578 17.6341 2.65943 17.6549 2.66705 17.6743C2.67467 17.6937 2.6861 17.7114 2.70066 17.7263C2.71522 17.7412 2.73262 17.7531 2.75184 17.7612C2.77105 17.7693 2.7917 17.7734 2.81255 17.7734H3.98442C4.07036 17.7734 4.13872 17.7051 4.14067 17.6211C4.17974 16.1133 4.7852 14.7012 5.85552 13.6309C6.96294 12.5234 8.43364 11.9141 10 11.9141C11.5665 11.9141 13.0372 12.5234 14.1446 13.6309C15.2149 14.7012 15.8204 16.1133 15.8594 17.6211C15.8614 17.707 15.9297 17.7734 16.0157 17.7734H17.1875C17.2084 17.7734 17.229 17.7693 17.2483 17.7612C17.2675 17.7531 17.2849 17.7412 17.2994 17.7263C17.314 17.7114 17.3254 17.6937 17.333 17.6743C17.3407 17.6549 17.3443 17.6341 17.3438 17.6133C17.3243 16.6797 17.1309 15.7715 16.7676 14.9141ZM10 10.4297C9.10356 10.4297 8.25981 10.0801 7.62505 9.44531C6.99028 8.81055 6.64067 7.9668 6.64067 7.07031C6.64067 6.17383 6.99028 5.33008 7.62505 4.69531C8.25981 4.06055 9.10356 3.71094 10 3.71094C10.8965 3.71094 11.7403 4.06055 12.375 4.69531C13.0098 5.33008 13.3594 6.17383 13.3594 7.07031C13.3594 7.9668 13.0098 8.81055 12.375 9.44531C11.7403 10.0801 10.8965 10.4297 10 10.4297Z"
                                                            fill="#05735B"
                                                        />
                                                    </svg>
                                                </div>
                                                <div id="error-name" class="dhabi_error">Please enter Name</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="johndoe@gmail.com" />
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                        <rect x="4" y="6" width="16" height="12" stroke="#05735B" stroke-width="1.5" />
                                                        <path d="M4 6L12 12L20 6" stroke="#05735B" stroke-width="1.5" />
                                                    </svg>
                                                </div>
                                                <div id="error-email" class="dhabi_error">Please enter Email</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="number" class="form-label">Phone number</label>
                                                <input type="text" class="form-control" name="phone" id="number" placeholder="+1 000 000 00" />
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="6" y="3" width="12" height="18" stroke="#05735B" stroke-width="1.5" />
                                                        <circle cx="12" cy="17" r="1" fill="#05735B" />
                                                    </svg>
                                                </div>
                                                <div id="error-number" class="dhabi_error">Invalid UAE phone number. Please enter a valid UAE phone number starting with +971 followed by 9 digits.</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="msg" class="form-label">Services</label>
                                                <select class="form-select form-control" id="service" name="enquiry_type" aria-label="Default select example">
                                                    <option value="" selected disabled>Select any services</option>
                                                    @php
                                                        use App\Models\Service;
                                                        $services_list = Service::where('status','Active')->whereNull('parent_id')->orderBy('sort_order')->get();
                                                    @endphp
                                                    @foreach(@$services_list as $service_enquiry)
                                                        <option value="{{@ $service_enquiry->id }}">{{@ $service_enquiry->title }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <g clip-path="url(#clip0_224_4)">
                                                            <path
                                                                d="M4.16667 3.33333C4.16667 2.87333 4.54 2.5 5 2.5H6.66667V0.833333C6.66667 0.373333 7.04 0 7.5 0C7.96 0 8.33333 0.373333 8.33333 0.833333V2.5H10C10.46 2.5 10.8333 2.87333 10.8333 3.33333C10.8333 3.79333 10.46 4.16667 10 4.16667H8.33333V5.83333C8.33333 6.29333 7.96 6.66667 7.5 6.66667C7.04 6.66667 6.66667 6.29333 6.66667 5.83333V4.16667H5C4.54 4.16667 4.16667 3.79333 4.16667 3.33333ZM19.3633 10.8458L13.6925 17.21C12.1125 18.9833 9.845 20 7.47083 20H3.33333C1.495 20 0 18.505 0 16.6667V12.5C0 10.6617 1.495 9.16667 3.33333 9.16667H10.715C11.6642 9.16667 12.4967 9.67417 12.9558 10.4317L15.6358 7.48667C16.0875 6.99083 16.7042 6.7 17.3742 6.66917C18.0433 6.63167 18.685 6.86917 19.1808 7.32083C20.1925 8.24333 20.2742 9.82417 19.3633 10.845V10.8458ZM18.0583 8.55333C17.8925 8.4025 17.6758 8.33083 17.4517 8.335C17.2267 8.34583 17.02 8.4425 16.8683 8.60917L13.18 12.6625C12.8592 13.555 12.0642 14.2383 11.085 14.3783L6.78417 14.9925C6.33 15.0583 5.90667 14.7417 5.84167 14.2858C5.77667 13.83 6.09333 13.4083 6.54833 13.3433L10.8492 12.7292C11.315 12.6625 11.6667 12.2575 11.6667 11.7867C11.6667 11.2617 11.24 10.835 10.715 10.835H3.33333C2.41417 10.835 1.66667 11.5825 1.66667 12.5017V16.6683C1.66667 17.5875 2.41417 18.335 3.33333 18.335H7.47083C9.37 18.335 11.185 17.5217 12.4483 16.1033L18.1192 9.73833C18.425 9.395 18.3975 8.86417 18.0583 8.55417V8.55333Z"
                                                                fill="#05735B"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_224_4">
                                                                <rect width="20" height="20" fill="#05735B" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div id="error-service" class="error-message">Please select services</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="msg" class="form-label">Message</label>
                                                <textarea class="form-control" placeholder="Say Something" name="message" id="msg"></textarea>
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                        <path
                                                            d="M16.656 0.930072L4.46402 13.1221C3.99836 13.5852 3.6292 14.1361 3.3779 14.7429C3.1266 15.3497 2.99817 16.0003 3.00002 16.6571V18.0001C3.00002 18.2653 3.10538 18.5196 3.29291 18.7072C3.48045 18.8947 3.7348 19.0001 4.00002 19.0001H5.34302C5.99978 19.0019 6.65039 18.8735 7.25718 18.6222C7.86396 18.3709 8.41488 18.0017 8.87802 17.5361L21.07 5.34407C21.6544 4.75824 21.9826 3.96455 21.9826 3.13707C21.9826 2.3096 21.6544 1.5159 21.07 0.930072C20.4757 0.361966 19.6852 0.0449219 18.863 0.0449219C18.0408 0.0449219 17.2503 0.361966 16.656 0.930072ZM19.656 3.93007L7.46402 16.1221C6.90015 16.6825 6.13803 16.998 5.34302 17.0001H5.00002V16.6571C5.0021 15.8621 5.31759 15.0999 5.87802 14.5361L18.07 2.34407C18.2836 2.14003 18.5676 2.02617 18.863 2.02617C19.1584 2.02617 19.4424 2.14003 19.656 2.34407C19.866 2.55459 19.9839 2.83976 19.9839 3.13707C19.9839 3.43438 19.866 3.71956 19.656 3.93007Z"
                                                            fill="#05735B"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="filed-btm mt-4 mb-0">
                                                <div class="quick-enq-wrapper ">

                                                    <button href="" class="quick-enq text-decoration-none" type="submit">
                                                        <div class="btn-icon">
                                                            <img src="{{ asset('web/images/icons/send.svg') }}" class="img-fluid" width="54" height="28" alt="button" />
                                                        </div>
                                                        <div class="btn-title">
                                                            <p>Send</p>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-4 col-sm-12 col-12 pl-0">
                                <div class="modl-img">
                                    <img src="{{ asset('web/images/modal-img.webp') }}" class="img-fluid" width="540" height="635" alt="modal-img"  />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade enquiry-form" id="product-enquiry-modal" tabindex="-1" aria-labelledby="ProductEnquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content en-modal-form">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span class="cls-btn-title">Close</span>
            </button>
            <div class="modal-body">
                <div class="contact-form modal-enqury-wrapper">
                    <form class="enq-form" id="product-modal-form" action="{{url('/product-enquiry')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 pr-0">
                                <div class="green-bg">
                                    <div class="form-title">
                                        <h2>Enquiry Now</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="fname" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="pro_fname" placeholder="Full Name" />
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M16.7676 14.9141C16.3992 14.0414 15.8645 13.2486 15.1934 12.5801C14.5243 11.9096 13.7317 11.375 12.8594 11.0059C12.8516 11.002 12.8438 11 12.836 10.9961C14.0528 10.1172 14.8438 8.68555 14.8438 7.07031C14.8438 4.39453 12.6758 2.22656 10 2.22656C7.32427 2.22656 5.1563 4.39453 5.1563 7.07031C5.1563 8.68555 5.94731 10.1172 7.16411 10.998C7.1563 11.002 7.14849 11.0039 7.14067 11.0078C6.26567 11.377 5.48052 11.9062 4.80669 12.582C4.1362 13.2511 3.60162 14.0437 3.23247 14.916C2.86982 15.77 2.67423 16.6856 2.6563 17.6133C2.65578 17.6341 2.65943 17.6549 2.66705 17.6743C2.67467 17.6937 2.6861 17.7114 2.70066 17.7263C2.71522 17.7412 2.73262 17.7531 2.75184 17.7612C2.77105 17.7693 2.7917 17.7734 2.81255 17.7734H3.98442C4.07036 17.7734 4.13872 17.7051 4.14067 17.6211C4.17974 16.1133 4.7852 14.7012 5.85552 13.6309C6.96294 12.5234 8.43364 11.9141 10 11.9141C11.5665 11.9141 13.0372 12.5234 14.1446 13.6309C15.2149 14.7012 15.8204 16.1133 15.8594 17.6211C15.8614 17.707 15.9297 17.7734 16.0157 17.7734H17.1875C17.2084 17.7734 17.229 17.7693 17.2483 17.7612C17.2675 17.7531 17.2849 17.7412 17.2994 17.7263C17.314 17.7114 17.3254 17.6937 17.333 17.6743C17.3407 17.6549 17.3443 17.6341 17.3438 17.6133C17.3243 16.6797 17.1309 15.7715 16.7676 14.9141ZM10 10.4297C9.10356 10.4297 8.25981 10.0801 7.62505 9.44531C6.99028 8.81055 6.64067 7.9668 6.64067 7.07031C6.64067 6.17383 6.99028 5.33008 7.62505 4.69531C8.25981 4.06055 9.10356 3.71094 10 3.71094C10.8965 3.71094 11.7403 4.06055 12.375 4.69531C13.0098 5.33008 13.3594 6.17383 13.3594 7.07031C13.3594 7.9668 13.0098 8.81055 12.375 9.44531C11.7403 10.0801 10.8965 10.4297 10 10.4297Z"
                                                            fill="#05735B"
                                                        />
                                                    </svg>
                                                </div>
                                                <div id="error-product-name" class="error-message">Please enter Name</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" name="email" id="pro_email" placeholder="johndoe@gmail.com" />
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                        <rect x="4" y="6" width="16" height="12" stroke="#05735B" stroke-width="1.5" />
                                                        <path d="M4 6L12 12L20 6" stroke="#05735B" stroke-width="1.5" />
                                                    </svg>
                                                </div>
                                                <div id="error-product-email" class="error-message">Please enter email</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="number" class="form-label">Phone number</label>
                                                <input type="text" class="form-control" name="phone" id="pro_number" placeholder="+1 000 000 00" />
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="6" y="3" width="12" height="18" stroke="#05735B" stroke-width="1.5" />
                                                        <circle cx="12" cy="17" r="1" fill="#05735B" />
                                                    </svg>
                                                </div>
                                                <div id="error-product-number" class="error-message">Invalid UAE phone number. Please enter a valid UAE phone number starting with +971 followed by 9 digits.</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="msg" class="form-label">Products</label>
                                                <select class="form-select form-control" id="product_id" name="product_id" aria-label="Default select example">
                                                    <option value="" selected disabled>Select any Products</option>
                                                </select>
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <g clip-path="url(#clip0_224_4)">
                                                            <path
                                                                d="M4.16667 3.33333C4.16667 2.87333 4.54 2.5 5 2.5H6.66667V0.833333C6.66667 0.373333 7.04 0 7.5 0C7.96 0 8.33333 0.373333 8.33333 0.833333V2.5H10C10.46 2.5 10.8333 2.87333 10.8333 3.33333C10.8333 3.79333 10.46 4.16667 10 4.16667H8.33333V5.83333C8.33333 6.29333 7.96 6.66667 7.5 6.66667C7.04 6.66667 6.66667 6.29333 6.66667 5.83333V4.16667H5C4.54 4.16667 4.16667 3.79333 4.16667 3.33333ZM19.3633 10.8458L13.6925 17.21C12.1125 18.9833 9.845 20 7.47083 20H3.33333C1.495 20 0 18.505 0 16.6667V12.5C0 10.6617 1.495 9.16667 3.33333 9.16667H10.715C11.6642 9.16667 12.4967 9.67417 12.9558 10.4317L15.6358 7.48667C16.0875 6.99083 16.7042 6.7 17.3742 6.66917C18.0433 6.63167 18.685 6.86917 19.1808 7.32083C20.1925 8.24333 20.2742 9.82417 19.3633 10.845V10.8458ZM18.0583 8.55333C17.8925 8.4025 17.6758 8.33083 17.4517 8.335C17.2267 8.34583 17.02 8.4425 16.8683 8.60917L13.18 12.6625C12.8592 13.555 12.0642 14.2383 11.085 14.3783L6.78417 14.9925C6.33 15.0583 5.90667 14.7417 5.84167 14.2858C5.77667 13.83 6.09333 13.4083 6.54833 13.3433L10.8492 12.7292C11.315 12.6625 11.6667 12.2575 11.6667 11.7867C11.6667 11.2617 11.24 10.835 10.715 10.835H3.33333C2.41417 10.835 1.66667 11.5825 1.66667 12.5017V16.6683C1.66667 17.5875 2.41417 18.335 3.33333 18.335H7.47083C9.37 18.335 11.185 17.5217 12.4483 16.1033L18.1192 9.73833C18.425 9.395 18.3975 8.86417 18.0583 8.55417V8.55333Z"
                                                                fill="#05735B"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_224_4">
                                                                <rect width="20" height="20" fill="#05735B" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div id="error-product" class="error-message">Please select Product</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="filed-btm">
                                                <label for="msg" class="form-label">Message</label>
                                                <textarea class="form-control" name="msg" placeholder="Say Something" id="msg"></textarea>
                                                <div class="filed-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                        <path
                                                            d="M16.656 0.930072L4.46402 13.1221C3.99836 13.5852 3.6292 14.1361 3.3779 14.7429C3.1266 15.3497 2.99817 16.0003 3.00002 16.6571V18.0001C3.00002 18.2653 3.10538 18.5196 3.29291 18.7072C3.48045 18.8947 3.7348 19.0001 4.00002 19.0001H5.34302C5.99978 19.0019 6.65039 18.8735 7.25718 18.6222C7.86396 18.3709 8.41488 18.0017 8.87802 17.5361L21.07 5.34407C21.6544 4.75824 21.9826 3.96455 21.9826 3.13707C21.9826 2.3096 21.6544 1.5159 21.07 0.930072C20.4757 0.361966 19.6852 0.0449219 18.863 0.0449219C18.0408 0.0449219 17.2503 0.361966 16.656 0.930072ZM19.656 3.93007L7.46402 16.1221C6.90015 16.6825 6.13803 16.998 5.34302 17.0001H5.00002V16.6571C5.0021 15.8621 5.31759 15.0999 5.87802 14.5361L18.07 2.34407C18.2836 2.14003 18.5676 2.02617 18.863 2.02617C19.1584 2.02617 19.4424 2.14003 19.656 2.34407C19.866 2.55459 19.9839 2.83976 19.9839 3.13707C19.9839 3.43438 19.866 3.71956 19.656 3.93007Z"
                                                            fill="#05735B"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="filed-btm mt-4 mb-0">
                                                <div class="quick-enq-wrapper">
                                                    <button href="#" class="quick-enq text-decoration-none" type="submit">
                                                        <div class="btn-icon">
                                                            <img src="{{ asset('web/images/icons/send.svg') }}" class="img-fluid" alt="button" />
                                                        </div>
                                                        <div class="btn-title">
                                                            <p>Send</p>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 pl-0">
                                <div class="modl-img">
                                    <img src="{{ asset('web/images/modal-img.webp') }}" class="img-fluid" width="540" height="635" alt="modal-img" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{!! isset($siteInformation)?$siteInformation->footer_tag:'' !!}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="{{ asset('web/js/menu-scroll.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>
<!--<script src="{{ asset('web/js/slick.min.js') }}"></script>-->
<script src="{{ asset('web/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="{{ asset('web/js/custom.js') }}"></script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.enquiry_product_cat', function ($) {
            console.log(jQuery(this).attr('data-id'));
            var id = jQuery(this).attr('data-id');
            var name = jQuery(this).attr('data-name');
            // jQuery('#product_id').val(id);
            var o = new Option(name, id);
            jQuery('#product_id').append('<option selected value="'+id+'">'+name+'</option>');
            // jQuery(o).html(name);
            // jQuery("#product_id").append(o);
        })
        $("[data-fancybox]").fancybox({
            buttons: ["zoom", "share", "slideShow", "fullScreen", "download", "thumbs", "close"],
            fullScreen: {
                requestOnStart: true,
            },
        });
    });
</script>
    <script>


        document.getElementById('product-modal-form').addEventListener('submit', function(event) {

            // Prevent the default form submission behavior
            event.preventDefault();
            console.log('asdfasdfsdfadsfasdfadsf');
            // Check each input field for errors
            const nameInput = document.getElementById('pro_fname');
            const emailInput = document.getElementById('pro_email');
            const numberInput = document.getElementById('pro_number');
            const product_id = document.getElementById('product_id');
            let formValid = true;

            if (nameInput.value.trim() === '') {
                document.getElementById('error-product-name').style.display = 'block';
                formValid = false;
            } else {
                document.getElementById('error-product-name').style.display = 'none';
            }

            if (emailInput.value.trim() === '') {
                document.getElementById('error-product-email').style.display = 'block';
                formValid = false;
            } else {
                document.getElementById('error-product-email').style.display = 'none';
            }
            if (numberInput.value.trim() === '' ) {
                document.getElementById('error-product-number').style.display = 'block';
                formValid = false;
            } else {
                document.getElementById('error-product-number').style.display = 'none';

            }
            if (product_id.value.trim() === '') {
                document.getElementById('error-product').style.display = 'block';
                formValid = false;
            } else {
                document.getElementById('error-product').style.display = 'none';
            }

            if (!formValid) {
                console.log(nameInput.value.trim(),emailInput.value.trim(),numberInput.value.trim(),product_id.value.trim());
                return false;
            }

            this.submit();
        });


        document.getElementById('modal-form').addEventListener('submit', function(event) {

        // Prevent the default form submission behavior
        event.preventDefault();

        // Check each input field for errors
        const nameInput = document.getElementById('fname');
        const emailInput = document.getElementById('email');
        const numberInput = document.getElementById('number');
        const service = document.getElementById('service');
        const message = document.getElementById('msg');
        let formValid = true;

        if (nameInput.value.trim() === '') {
        document.getElementById('error-name').style.display = 'block';
        formValid = false;
    } else {
        document.getElementById('error-name').style.display = 'none';
    }

        if (emailInput.value.trim() === '') {
        document.getElementById('error-email').style.display = 'block';
        formValid = false;
    } else {
        document.getElementById('error-email').style.display = 'none';
    }
        if (numberInput.value.trim() === '' ) {
        document.getElementById('error-number').style.display = 'block';
        formValid = false;
    } else {
        document.getElementById('error-number').style.display = 'none';

    }
        if (service.value.trim() === '') {
        document.getElementById('error-service').style.display = 'block';
        formValid = false;
    } else {
        document.getElementById('error-service').style.display = 'none';
    }
        // if (message.value.trim() === '') {
        //     document.getElementById('error-msg').style.display = 'block';
        //     formValid = false;
        // } else {
        //     document.getElementById('error-msg').style.display = 'none';
        // }
        // If there are errors, do not proceed with the form submission
        if (!formValid) {
        return false;
    }

        // If all fields are filled, proceed with form submission
        // You can use AJAX or other methods here to submit the form data to the server
        // For this example, we will just submit the form normally
        this.submit();
    });
    </script>
</body>
</html>