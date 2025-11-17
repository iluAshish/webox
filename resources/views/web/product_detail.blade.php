
@extends('web.layouts.main')
@section('content')
<!-- breadcumbs -->
<style>
    .dhabi_error{
  font-size: 15px; 
  color: red;
  display: none;
  padding-top: 9px;
  padding-bottom: 0;
}
</style>
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
                            <h2>Products</h2>
                        </div>
                    </div>
                </div>
            </div>
            @if(@$product->featured_image != '' || @$product->featured_image != null)
            <div class="right-img">
                <div class="mask-img">
                        {!! Helper::printImage($product,'featured_image','featured_image_webp','featured_image_attribute','img-fluid ') !!}
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
                        <a href="{{url('/')}}/product" class="active text-decoration-none">Products</a>
                    </li>
                    <!--<li class="list-inline-item">/</li>-->
                    <!--<li class="list-inline-item">-->
                    <!--    <a href="{{url('/')}}/product" class="active text-decoration-none">Category</a>-->
                    <!--</li>-->
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                        <a href="#" class="active text-decoration-none">{{$product->title}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end of breadcumbs -->

        <!-- welcome section -->
        <section class="product-detail-wrapper">
            <div class="container-ctn">
                <div class="product-detail-slider-wrapper">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-7 col-sm-12 col-12">
                            <div class="product-slider-box product-img-slide">
                                <div class="row">
                                    <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="product-slider-larg">
                                            @foreach($productGalleryList as $productGallery)
                                                <div>
                                                    <div class="p-slide-img">
                                                        {!! Helper::printImage($productGallery,'image','image_webp','image_attribute','img-fluid ') !!}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-12 col-sm-12 col-12 left-brd">
                                        <div class="product-slider-thumb">
                                            @foreach($productGalleryList as $productGallery)
                                            <div class="thumb-slide">
                                                {!! Helper::printImage($productGallery,'image','image_webp','image_attribute','thumb-slide ') !!}
                                                <!-- <div class="thumb-slide"><img src="images/slider-thumb-1.jpg" alt="Thumb img" /></div> -->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-5 col-sm-12 col-12">
                            <div class="enquiry-sidebar">
                                <div class="enq-area">
                                    <div class="form-title">
                                        <h2>Enquire Now</h2>
                                    </div>
                                    <div class="enq-form">
                                        <form method="POST" id="product_form" action="{{url('/')}}/product-enquiry">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="filed-btm">
                                                        <label for="fname" class="form-label">Full Name*</label>
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
                                                <div class="col-12">
                                                    <div class="filed-btm">
                                                        <label for="email" class="form-label">Email address*</label>
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
                                                <div class="col-12">
                                                    <div class="filed-btm">
                                                        <label for="number" class="form-label">Phone number*</label>
                                                        <input type="number" class="form-control" name="phone" id="number" placeholder="+1 000 000 00" />
                                                        <div class="filed-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="3" width="12" height="18" stroke="#05735B" stroke-width="1.5" />
                                                                <circle cx="12" cy="17" r="1" fill="#05735B" />
                                                            </svg>
                                                        </div>
                                                        <div id="error-number" class="dhabi_error">Invalid phone number.</div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="filed-btm">
                                                        <label for="msg" class="form-label">Message</label>
                                                        <textarea class="form-control" name="message" placeholder="Say Something" id="msg"></textarea>
                                                        <div class="filed-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                                <path
                                                                    d="M16.656 0.92995L4.46402 13.122C3.99836 13.5851 3.6292 14.136 3.3779 14.7428C3.1266 15.3496 2.99817 16.0002 3.00002 16.6569V18C3.00002 18.2652 3.10538 18.5195 3.29291 18.7071C3.48045 18.8946 3.7348 19 4.00002 19H5.34302C5.99978 19.0018 6.65039 18.8734 7.25718 18.6221C7.86396 18.3708 8.41488 18.0016 8.87802 17.5359L21.07 5.34395C21.6544 4.75812 21.9826 3.96443 21.9826 3.13695C21.9826 2.30948 21.6544 1.51578 21.07 0.92995C20.4757 0.361844 19.6852 0.0447998 18.863 0.0447998C18.0408 0.0447998 17.2503 0.361844 16.656 0.92995ZM19.656 3.92995L7.46402 16.122C6.90015 16.6824 6.13803 16.9979 5.34302 17H5.00002V16.6569C5.0021 15.8619 5.31759 15.0998 5.87802 14.536L18.07 2.34395C18.2836 2.13991 18.5676 2.02604 18.863 2.02604C19.1584 2.02604 19.4424 2.13991 19.656 2.34395C19.866 2.55447 19.9839 2.83964 19.9839 3.13695C19.9839 3.43426 19.866 3.71944 19.656 3.92995Z"
                                                                    fill="#05735B"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="quick-enq-wrapper">
                                                        <input type="hidden" name="product_id" value="{{$product->id}}" >
                                                        <button href="#" class="quick-enq text-decoration-none">
                                                            <div class="btn-icon">
                                                                <img src="{{asset('web/images/icons/send.svg')}}" class="img-fluid" alt="button" />
                                                            </div>
                                                            <div class="btn-title">
                                                                <p>Send</p>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="green-grad-border">
                                <div class="right-content">
                                    <div class="larg-txt">
                                        @if(@$product->title != '' || @$product->title != null)
                                        <h2>{{$product->title}}</h2>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                            <div class="discription d-more mt-2">
                                @if(@$product->short_description != '' || @$product->short_description != null)
                                {!!$product->short_description !!}
                                @endif

                                @if(@$product->description != '' || @$product->description != null)
                                {!!$product->description !!}
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                                @foreach($specifications as $specification)
                                    @if(isset($specification))
                                        <div class="spec-box">
                                            <div class="product-specification">
                                                <div class="pro-title">
                                                    <h3>
                                                        @if(@$specification->title != '' || @$specification->title != null)
                                                        {!!$specification->title !!}
                                                        @endif
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="pro-spec-more info">
                                                @if(@$specification->description != '' || @$specification->description != null)
                                                {!!$specification->description !!}
                                                @endif

                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="other-slider-wrapper">
            <div class="container-ctn">
                <div class="green-grad-border">
                    <div class="right-content">
                        <div class="small-title">
                            <h3>Products</h3>
                        </div>
                        <div class="larg-txt">
                            <h2>Other Products</h2>
                        </div>
                    </div>
                </div>
                <div class="product-other-slider">
                    @foreach($related_category as $related)
                    <div class="product-box">
                        <div class="product-img">
                            <a href="{{url('/')}}/product/{{$related->short_url}}" class="text-decoration-none">
                                {!! Helper::printImage($related,'featured_image','featured_image_webp','featured_image_attribute','img-fluid ') !!}
                            </a>
                        </div>
                        <div class="product-title">

                            <a href="{{ url('/') }}/product/{{ $related->short_url }}" class="text-decoration-none">
                                <span class="big">{{ str_pad($loop->iteration, 2, "0", STR_PAD_LEFT) }}</span>
                                <span class="small">{!! Illuminate\Support\Str::limit(@$related->title, $limit = 20, $end = '...') !!}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
<script>

    document.getElementById('product_form').addEventListener('submit', function(event) {

        // Prevent the default form submission behavior
        event.preventDefault();

        // Check each input field for errors
        const nameInput = document.getElementById('fname');
        const emailInput = document.getElementById('email');
        const numberInput = document.getElementById('number');
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
@endsection
