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
                                 <div class="big-title">Terms & Conditions</div>
                             @endif

                <ul class="list-inline bread-nav-action">
                    <li class="list-inline-item">
                        <a href="{{url('/')}}" class="text-decoration-none">Home</a>
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                        <a href="#" class="active text-decoration-none">Terms & Conditions</a>
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
                            <a href="#" class="active text-decoration-none">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>
    </section>
@endif
<section class="terms-wrapper">
    <div class="container-ctn" bis_skin_checked="1">
        <div class="row align-items-end text-center" bis_skin_checked="1">
            <div class="col-12" bis_skin_checked="1">
                <p class="small-title">
                    TERMS
                </p>
                <h2 class="big-title">Terms &amp; Conditions</h2>
            </div>
        </div>
        <article class="mt-4">
            {!! $siteInformation->terms_and_conditions??'' !!}
        </article>
    </div>
</section>
@endsection
