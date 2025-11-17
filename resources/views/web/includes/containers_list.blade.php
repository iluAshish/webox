@foreach ($containers as $key => $container)
    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="container-box">
            <div class="container-img">
                {!! Helper::printImage(
                    $container,
                    'thumbnail_image',
                    'thumbnail_image_webp',
                    'thumbnail_image_attribute',
                    'pro-img img-fluid',
                ) !!}
            </div>
            <div class="inner-box" data-match-height="groupName">
                <div class="container-heading">
                    <h3>{!! $container->title !!}</h3>
                </div>
                <div class="container-content">

                    <div class="container-info d-none">
                        {!! $container->short_description !!}
                    </div>
                    <div class="contact-action">
                        <!--<div class="wp">-->
                        <!--    <a href="https://wa.me/+971502442324?text=Hi there" class="text-decoration-none">-->
                        <!--        <img src="web/images/icons/whtapp.webp" alt="whatsapp" />-->
                        <!--        <span>Whatsapp</span>-->
                        <!--    </a>-->
                        <!--</div>-->
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
@endforeach
<div class="container_{{$category_id}}_appendHere_{{ $offset }}"></div>
<input type="hidden" class="container_{{$category_id}}_total" name="total" value="{{ $total }}">
<input type="hidden" class="container_{{$category_id}}_offset" name="offset" value="{{ $offset }}">
<input type="hidden" class="container_{{$category_id}}_limit" name="limit" value="{{ $limit }}">
<input type="hidden" class="category_id" name="category_id" value="{{ $category_id ??'' }}">

@if ($total > $offset)
    <div class="row py-3 container_{{$category_id}}_more-section-{{ $offset }}">
        <div class="col-12 d-flex justify-content-center">
            <div class="primaryBtn load-more-container-button container_{{$category_id}}_load-more-container-button" data-category_id="{{$category_id}}" id="btnposition">
                <div id="slide"></div>
                <a href="#" class="text-decoration-none"> Load MORE</a>
            </div>
        </div>

    </div>
@endif
