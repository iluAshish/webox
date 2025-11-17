@extends('web.layouts.main')
@section('content')
<section class="thank-you">
    <div class="container-ctn">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                
            </div>
            
        </div>
    </div>
</section>
<section class="error-wrapper">
    <div class="container-ctn" bis_skin_checked="1">
        <div class="error" bis_skin_checked="1">
            <h2 class="">Thank You For Connecting Us</h2>
            <p class="error-tag"><h3>One of our representatives will get in touch with you shortly regarding your inquiry.</h3></p>
        </div>
        <div class="back-home" bis_skin_checked="1">
            <div class="primaryBtn" id="btnposition" bis_skin_checked="1">
                <div id="slide" bis_skin_checked="1"></div>
                <a href="{{url('/')}}" class="text-decoration-none">hOME</a>
            </div>
        </div>
    </div>
</section>

@endsection
