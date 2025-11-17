@extends('web.layouts.main')
@section('content')
 @if(@$banner->image != '')
    <section class="bread-nav-wrapper">
        <div class="container-ctn">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    @if (@$banner->title)
                        <div class="big-title">{!! $banner->title ?? '' !!}</div>
                    @else
                        <div class="big-title">CONTAINER LIST</div>
                    @endif

                    <ul class="list-inline bread-nav-action">
                        <li class="list-inline-item">
                            <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            <a href="{{ url('/container-list') }}" class="active text-decoration-none">Containers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end">
                    <div class="brid-right">
                        {!! Helper::printImage($banner, 'image', 'image_webp', 'image_attribute', 'img-fluid') !!}
                    </div>
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
                            <a href="{{url('/container-list')}}" class="active text-decoration-none">Containers</a>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>
    </section>
@endif
    <section class="containerlist-wrapper pb-1">
        <div class="container-ctn">
            <div class="text-center">
                <p class="small-title">
                    CONTAINERS
                </p>
                <h1 class="big-title">We offer a wide range of high-quality containers.</h1>
                <p class="tagline">
                    <!--It has survived not only five centuries, but also the leap into electronic typesetting, remaining-->
                    <!--essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing-->
                    <!--Lorem Ipsum passages-->
                </p>
            </div>
        </div>
    </section>
    @php
        use App\Models\DhabiProduct;
        
    @endphp
    @foreach ($categories as $key => $product_category)
        <section class="containerlist-wrapper @if ($key % 2 != 0) gray-bg @endif  @if ($key == 0) pt-1 @endif" id="container-{!! $product_category->id !!}">
            <div class="container-ctn">
                <h2 class="con-title">{!! $product_category->title !!}</h2>
                {!! $product_category->short_description !!}
                <div class="row mt-50">
                    @php
                        $condition=DhabiProduct::where('status','Active')->orderBy('sort_order')->where('category_id',$product_category->id );
                         $total=$condition->count();
                        $containers = $condition->take(4)->get();
                       
                        $offset = $containers->count();
                        $category_id=$product_category->id;
                    @endphp
                    @include('web.includes.containers_list')
                    
                </div>
            </div>

        </section>
    @endforeach

    <section class="containerlist-wrapper d-none gray-bg">
        <div class="container-ctn">
            <h2 class="con-title">New Containers</h2>
            <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                letters, as opposed
                to using 'Content here, content here', making it look like readable English.
            </p>
            <div class="row mt-50">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="container-box">
                        <div class="container-img">
                            <img src="web/images/container/container-1.png" alt="contaier" />
                        </div>
                        <div class="inner-box" data-match-height="groupName">
                            <div class="container-heading">
                                <h3>20 FT Standard Container Dimensions</h3>
                            </div>
                            <div class="container-content">
                                <!-- <div class="container-spec">
                                    <div class="ft">
                                        <span class="lighttxt">L:</span>
                                        <span class="boldtxt">81 ft</span>
                                    </div>
                                    <div class="widht">
                                        <span class="lighttxt">W:</span>
                                        <span class="boldtxt">81 ft</span>
                                    </div>
                                    <div class="height">
                                        <span class="lighttxt">H:</span>
                                        <span class="boldtxt">81 ft</span>
                                    </div>
                                </div> -->
                                <div class="container-info">
                                    <ul class="list-inline c-info">
                                        <li>
                                            <p>Lorem Ipsum is simply dummy text</p>
                                        </li>
                                        <li>
                                            <p>Lorem Ipsum is simply dummy text</p>
                                        </li>
                                        <li>
                                            <p>Lorem Ipsum is simply dummy text</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-action">
                                    <div class="wp">
                                        <a href="https://wa.me/+97148802998?text=Hi there" class="text-decoration-none">
                                            <img src="web/images/icons/whtapp.webp" alt="whatsapp" />
                                            <span>Whatsapp</span>
                                        </a>
                                    </div>
                                    <div class="enquiry">
                                        <a href="" class="text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#contanier-enquiry-modal">
                                            <img src="web/images/icons/enq.webp" alt="Eqnuiry" />
                                            <span>Enquiry</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12 d-flex justify-content-center">
                    <div class="primaryBtn" id="btnposition">
                        <div id="slide"></div>
                        <a href="services_detail.php" class="text-decoration-none"> Load MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
