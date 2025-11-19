<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="{{ asset('web/images/favicon.png') }}" />
    <meta name="title" content="{!! isset($meta_data) ? $meta_data->meta_title : '' !!}" />
    <meta name="description" content="{!! isset($meta_data) ? $meta_data->meta_description : '' !!}" />
    <meta name="keywords" content="{!! isset($meta_data) ? $meta_data->meta_keyword : '' !!}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{!! @$meta_data->meta_title !!}</title>
    {!! isset($meta_data) ? $meta_data->other_meta_tag : '' !!} {!! isset($siteInformation) ?
    $siteInformation->header_tag : '' !!}
    <link rel="stylesheet" type="text/css" href="{{ asset('web/custom.css?ver=1.0') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.css" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick-theme.min.css" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" media="print" onload="this.media='all'" />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet"></noscript>

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/scss/main.css?ver=0.63') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" media="print" onload="this.media='all'">
    @if (!Request::is('/'))
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Fancybox CSS (excluded on home page) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
    @endif
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NB2DJ2KR');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EK5EDT0950"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-EK5EDT0950');
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB2DJ2KR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {!! isset($siteInformation) ? $siteInformation->body_tag : '' !!}
    <!-- header section -->
    <header>
        <div class="top-header">
            <div class="container-ctn">
                <div class="row align-items-center">
                    <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-8 col-sm-8 col-10">
                        <ul class="list-inline top-info">
                            <li class="list-inline-item">
                                <div class="left">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_52)"> <path d="M12.4563 25.0084L11.7301 24.386C10.7291 23.5479 1.98853 15.9992 1.98853 10.4775C1.98853 4.69634 6.6751 0.00976562 12.4563 0.00976562C18.2374 0.00976562 22.924 4.69634 22.924 10.4775C22.924 15.9992 14.1834 23.5479 13.1865 24.3902L12.4563 25.0084ZM12.4563 2.27319C7.92729 2.27832 4.25713 5.94849 4.252 10.4774C4.252 13.9463 9.62954 19.4877 12.4563 22.024C15.283 19.4867 20.6605 13.9421 20.6605 10.4774C20.6554 5.94849 16.9853 2.27837 12.4563 2.27319Z" fill="#A6D493" /> <path d="M12.4563 14.6268C10.1646 14.6268 8.30693 12.769 8.30693 10.4774C8.30693 8.18584 10.1646 6.32812 12.4563 6.32812C14.7479 6.32812 16.6056 8.18584 16.6056 10.4774C16.6056 12.769 14.7479 14.6268 12.4563 14.6268ZM12.4563 8.40273C11.3104 8.40273 10.3816 9.33159 10.3816 10.4774C10.3816 11.6232 11.3104 12.5521 12.4563 12.5521C13.6021 12.5521 14.5309 11.6232 14.5309 10.4774C14.5309 9.33159 13.6021 8.40273 12.4563 8.40273Z" fill="#A6D493" /> </g> <defs> <clipPath id="clip0_13_52"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                    </span>
                                    @foreach ($locationList as $key => $location)
                                    <span class="loc-border{{ $key == count($locationList) - 1 ? ' last' : '' }}"> {{ $location->name }}</span>
                                    @endforeach
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="left">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_58)"> <path d="M19.7917 1.0415H5.20833C3.82751 1.04316 2.50371 1.59242 1.52731 2.56882C0.550919 3.54521 0.00165402 4.86901 0 6.24984L0 18.7498C0.00165402 20.1307 0.550919 21.4545 1.52731 22.4309C2.50371 23.4073 3.82751 23.9565 5.20833 23.9582H19.7917C21.1725 23.9565 22.4963 23.4073 23.4727 22.4309C24.4491 21.4545 24.9983 20.1307 25 18.7498V6.24984C24.9983 4.86901 24.4491 3.54521 23.4727 2.56882C22.4963 1.59242 21.1725 1.04316 19.7917 1.0415ZM5.20833 3.12484H19.7917C20.4154 3.12606 21.0245 3.31392 21.5406 3.66422C22.0567 4.01452 22.4561 4.51124 22.6875 5.09046L14.7104 13.0686C14.1234 13.6533 13.3286 13.9816 12.5 13.9816C11.6714 13.9816 10.8766 13.6533 10.2896 13.0686L2.3125 5.09046C2.5439 4.51124 2.94335 4.01452 3.45942 3.66422C3.9755 3.31392 4.5846 3.12606 5.20833 3.12484ZM19.7917 21.8748H5.20833C4.37953 21.8748 3.58468 21.5456 2.99862 20.9595C2.41257 20.3735 2.08333 19.5786 2.08333 18.7498V7.81234L8.81667 14.5415C9.7944 15.5168 11.119 16.0645 12.5 16.0645C13.881 16.0645 15.2056 15.5168 16.1833 14.5415L22.9167 7.81234V18.7498C22.9167 19.5786 22.5874 20.3735 22.0014 20.9595C21.4153 21.5456 20.6205 21.8748 19.7917 21.8748Z" fill="#A6D493" /> </g> <defs> <clipPath id="clip0_13_58"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                    </span>
                                    @if (@$siteInformation->email != '' || @$siteInformation->email != null)
                                    <span>
                                        <a href="mailto:{{ @$siteInformation->email }}" aria-label="email us" class="text-decoration-none">{{ @$siteInformation->email }}</a>
                                    </span>
                                    @endif
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="left">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"> <g clip-path="url(#clip0_250_562)"> <path d="M10 8.33286C7.7025 8.33286 5.83333 10.202 5.83333 12.4995C5.83333 14.797 7.7025 16.6662 10 16.6662C12.2975 16.6662 14.1667 14.797 14.1667 12.4995C14.1667 10.202 12.2975 8.33286 10 8.33286ZM10 14.9995C8.62167 14.9995 7.5 13.8779 7.5 12.4995C7.5 11.1212 8.62167 9.99953 10 9.99953C11.3783 9.99953 12.5 11.1212 12.5 12.4995C12.5 13.8779 11.3783 14.9995 10 14.9995ZM17.205 9.13286C18.7717 8.96536 20 7.6512 20 6.04203C20 4.86286 19.53 3.74203 18.6725 2.88453C14.8625 -0.925469 5.13583 -0.924635 1.3275 2.88453C0.47 3.74203 0 4.86286 0 6.0412C0 7.6512 1.22917 8.96536 2.795 9.13286L1.07833 12.352C0.3725 13.6754 0 15.167 0 16.6662C0 18.5045 1.495 19.9995 3.33333 19.9995H16.6667C18.505 19.9995 20 18.5045 20 16.6662C20 15.167 19.6275 13.6754 18.9217 12.352L17.205 9.13286ZM1.66667 6.04036C1.66667 5.30703 1.96333 4.60453 2.50583 4.06286C5.72833 0.842031 14.2733 0.842031 17.4942 4.06286C18.0358 4.60453 18.3342 5.30703 18.3333 6.0412C18.3333 6.84536 17.6792 7.49953 16.875 7.49953H16.305L15.6575 6.42036C15.3117 5.84286 14.8125 5.39203 14.2167 5.11786C13.275 4.6837 11.7792 4.16703 10 4.16703C8.22083 4.16703 6.725 4.68453 5.78417 5.11786C5.18667 5.39286 4.68833 5.84286 4.3425 6.42036L3.695 7.49953H3.125C2.32083 7.49953 1.66667 6.84536 1.66667 6.04036ZM16.6667 18.3329H3.33333C2.41417 18.3329 1.66667 17.5854 1.66667 16.6662C1.66667 15.4395 1.97167 14.2187 2.55 13.137L4.89833 8.7337L5.77167 7.27703C5.945 6.9887 6.19 6.76536 6.4825 6.6312C7.27167 6.26703 8.52333 5.83286 10.0008 5.83286C11.4783 5.83286 12.7292 6.26703 13.52 6.6312C13.8117 6.76536 14.0567 6.9887 14.23 7.27703L15.1033 8.7337L17.4517 13.137C18.0292 14.2195 18.335 15.4404 18.335 16.6662C18.335 17.5854 17.5875 18.3329 16.6683 18.3329H16.6667Z" fill="#A6D493"></path> </g> <defs> <clipPath id="clip0_250_562"> <rect width="20" height="20" fill="white"></rect> </clipPath> </defs> </svg>
                                    </span>
                                    @if (@$siteInformation->phone != '' || @$siteInformation->phone != null)
                                    <span>
                                        <a href="tel:{{ @$siteInformation->phone }}" aria-label="Phone" class="text-decoration-none">{{ @$siteInformation->phone }}</a>
                                    </span>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-4 col-sm-4 col-2 d-flex justify-content-end pos-rel">
                        <ul class="list-inline header-social">
                            {{-- youtube --}}
                            @if (@$siteInformation->youtube_url != '' || @$siteInformation->youtube_url != null)
                            <li class="list-inline-item">
                                <a href="{{ @$siteInformation->youtube_url }}" aria-label="click to visit youtube " target="_blank">
                                    <svg width="34" height="25" viewBox="0 0 34 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M32.7332 4.29688C32.4219 2.57873 30.9387 1.32752 29.2175 0.93689C26.6419 0.390625 21.875 0 16.7175 0C11.5631 0 6.71998 0.390625 4.14123 0.93689C2.42309 1.32752 0.936891 2.49939 0.625609 4.29688C0.311281 6.25 0 8.98438 0 12.5C0 16.0156 0.311281 18.75 0.701906 20.7031C1.01623 22.4213 2.49939 23.6725 4.21753 24.0631C6.95191 24.6094 11.6394 25 16.7969 25C21.9543 25 26.6418 24.6094 29.3762 24.0631C31.0944 23.6725 32.5775 22.5006 32.8918 20.7031C33.2031 18.75 33.5937 15.9363 33.6731 12.5C33.5144 8.98438 33.1238 6.25 32.7332 4.29688ZM12.5 17.9688V7.03125L22.0306 12.5L12.5 17.9688Z" fill="white" /> </svg>
                                </a>
                            </li>
                            @endif
                            {{-- pinterest --}}
                            @if (@$siteInformation->youtube_url != '' || @$siteInformation->youtube_url != null)
                            <li class="list-inline-item">
                                <a href="{{ @$siteInformation->youtube_url }}" aria-label="click to visit youtube " target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M12 0C5.37877 0 0 5.37877 0 12C0 18.6212 5.37877 24 12 24C18.6212 24 24 18.6212 24 12C24 5.37877 18.6212 0 12 0ZM12 1.04348C18.0573 1.04348 22.9565 5.9427 22.9565 12C22.9565 18.0573 18.0573 22.9565 12 22.9565C10.892 22.9565 9.82315 22.7907 8.81555 22.4857C9.26438 21.7353 9.84383 20.6627 10.074 19.7772C10.2108 19.2521 10.7731 17.1104 10.7731 17.1104C11.1385 17.808 12.2062 18.3984 13.3431 18.3984C16.726 18.3984 19.1647 15.2873 19.1647 11.4212C19.1647 7.71471 16.1402 4.94225 12.2486 4.94225C7.40704 4.94225 4.83729 8.19173 4.83729 11.73C4.83729 13.3755 5.71247 15.4238 7.11378 16.0761C7.32605 16.1749 7.44003 16.1321 7.48878 15.9263C7.52632 15.7701 7.71561 15.0088 7.80061 14.6546C7.82779 14.5415 7.81462 14.4439 7.72316 14.3325C7.25936 13.7699 6.88756 12.7366 6.88756 11.7728C6.88756 9.29846 8.76075 6.90387 11.9521 6.90387C14.7077 6.90387 16.6376 8.78237 16.6376 11.4681C16.6376 14.5024 15.1054 16.605 13.1117 16.605C12.0107 16.605 11.1863 15.6941 11.4507 14.5771C11.7679 13.244 12.3801 11.8054 12.3801 10.8424C12.3801 9.98124 11.918 9.26291 10.9606 9.26291C9.83498 9.26291 8.93071 10.4267 8.93071 11.9868C8.93071 12.9795 9.26698 13.6518 9.26698 13.6518C9.26698 13.6518 8.15506 18.353 7.95143 19.2279C7.74736 20.1022 7.80201 21.2798 7.88621 22.1566C3.8719 20.5317 1.04348 16.6014 1.04348 12C1.04348 5.9427 5.9427 1.04348 12 1.04348Z" fill="white" /> </svg>
                                </a>
                            </li>
                            @endif
                            {{-- snapchat --}}
                            @if (@$siteInformation->snapchat_url != '' || @$siteInformation->snapchat_url != null)

                            <li class="list-inline-item">
                                <a href="{{ @$siteInformation->snapchat_url }}" aria-label="click to visit snapchat " target="_blank">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M24.3222 18.2405C21.3038 17.7428 19.9246 14.6167 19.8799 14.5152C19.8738 14.4969 19.8596 14.4644 19.8514 14.4461C19.76 14.2633 19.6686 14.0053 19.7458 13.8225C19.8778 13.5097 20.5055 13.3106 20.8813 13.1908C21.0133 13.1481 21.1392 13.1095 21.2367 13.071C22.1488 12.7094 22.6038 12.2381 22.5936 11.6653C22.5855 11.2042 22.2321 10.7817 21.7121 10.5989C21.5313 10.5217 21.3241 10.4831 21.1149 10.4831C20.9727 10.4831 20.7574 10.5035 20.5502 10.5989C20.2028 10.7614 19.8981 10.8488 19.6808 10.8589C19.6341 10.8569 19.5935 10.8528 19.5589 10.8467L19.5813 10.4892C19.6828 8.87236 19.8108 6.85736 19.2644 5.63252C17.6516 2.02299 14.235 1.74268 13.2255 1.74268L12.7664 1.74674C11.7589 1.74674 8.34847 2.02705 6.73972 5.63455C6.19332 6.85939 6.31926 8.87236 6.42285 10.4913L6.42691 10.5522C6.43301 10.6517 6.4391 10.7513 6.4452 10.8467C6.21973 10.8874 5.77895 10.8122 5.32191 10.5989C4.70035 10.3085 3.58113 10.6924 3.42676 11.5049C3.3577 11.8644 3.44097 12.5469 4.76535 13.0689C4.86488 13.1096 4.98879 13.1481 5.12285 13.1908C5.4966 13.3106 6.12426 13.5077 6.25629 13.8225C6.33348 14.0053 6.24207 14.2633 6.13442 14.4847C6.07755 14.6167 4.70645 17.7428 1.68192 18.2405C1.29598 18.3035 1.02176 18.6447 1.04207 19.0388C1.04817 19.1424 1.07457 19.246 1.11723 19.3475C1.39145 19.9914 2.38879 20.4342 4.24942 20.7369C4.28192 20.8466 4.31848 21.0091 4.3388 21.0985C4.37739 21.2833 4.42005 21.4702 4.47692 21.6652C4.53177 21.85 4.72067 22.2786 5.30973 22.2786C5.48848 22.2786 5.68348 22.24 5.8927 22.1994C6.20145 22.1385 6.58739 22.0633 7.08301 22.0633C7.35926 22.0633 7.64364 22.0877 7.93005 22.1344C8.45817 22.2217 8.93551 22.561 9.49005 22.951C10.3554 23.5644 11.3365 24.2571 12.8579 24.2571C12.8985 24.2571 12.9391 24.255 12.9777 24.253C13.0325 24.255 13.0894 24.2571 13.1463 24.2571C14.6677 24.2571 15.6488 23.5624 16.5161 22.951C17.0443 22.5752 17.544 22.2238 18.0741 22.1344C18.3605 22.0877 18.6449 22.0633 18.9211 22.0633C19.3985 22.0633 19.7763 22.1242 20.1135 22.1913C20.3532 22.238 20.5441 22.2603 20.7208 22.2603C21.1149 22.2603 21.4175 22.0349 21.5272 21.6571C21.5841 21.4661 21.6247 21.2813 21.6654 21.0944C21.6816 21.0253 21.7202 20.8506 21.7547 20.7349C23.6154 20.4322 24.6127 19.9894 24.8849 19.3516C24.9296 19.25 24.954 19.1444 24.9621 19.0347C24.9824 18.6467 24.7082 18.3055 24.3222 18.2405Z" fill="white" /> </svg>
                                </a>
                            </li>
                            @endif
                            @if (@$siteInformation->tiktok_url != '' || @$siteInformation->tiktok_url != null)
                            {{-- ticktok --}}
                            <li class="list-inline-item">
                                <a href="{{ @$siteInformation->tiktok_url }}" aria-label="click to visit tiktok " target="_blank">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M22.0238 0H2.97619C1.33512 0 0 1.33512 0 2.97619V22.0238C0 23.6649 1.33512 25 2.97619 25H22.0238C23.6649 25 25 23.6649 25 22.0238V2.97619C25 1.33512 23.6649 0 22.0238 0ZM19.6464 10.9065C19.5113 10.919 19.3744 10.9274 19.2357 10.9274C17.6744 10.9274 16.3024 10.1244 15.5042 8.91071C15.5042 12.0946 15.5042 15.7173 15.5042 15.778C15.5042 18.581 13.2315 20.8536 10.4286 20.8536C7.6256 20.8536 5.35298 18.581 5.35298 15.778C5.35298 12.975 7.6256 10.7024 10.4286 10.7024C10.5345 10.7024 10.6381 10.7119 10.7423 10.7185V13.2196C10.6381 13.2071 10.5357 13.1881 10.4286 13.1881C8.99762 13.1881 7.83809 14.3476 7.83809 15.7786C7.83809 17.2095 8.99762 18.369 10.4286 18.369C11.8595 18.369 13.1232 17.2417 13.1232 15.8107C13.1232 15.7542 13.1482 4.14762 13.1482 4.14762H15.5387C15.7637 6.28512 17.4893 7.97202 19.6464 8.12679V10.9065Z" fill="white" /> </svg>
                                     </a>
                            </li>
                            @endif
                            @if (@$siteInformation->instagram_url != '' || @$siteInformation->instagram_url != null)
                            <li class="list-inline-item">
                                <a href="{{ @$siteInformation->instagram_url }}" aria-label="click to visit instagram " target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_66)"> <path d="M12.5 16.5C14.7091 16.5 16.5 14.7091 16.5 12.5C16.5 10.2909 14.7091 8.5 12.5 8.5C10.2909 8.5 8.5 10.2909 8.5 12.5C8.5 14.7091 10.2909 16.5 12.5 16.5Z" fill="white" /> <path d="M18 0H7C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7V18C0 19.8565 0.737498 21.637 2.05025 22.9497C3.36301 24.2625 5.14348 25 7 25H18C19.8565 25 21.637 24.2625 22.9497 22.9497C24.2625 21.637 25 19.8565 25 18V7C25 5.14348 24.2625 3.36301 22.9497 2.05025C21.637 0.737498 19.8565 0 18 0ZM12.5 18.5C11.3133 18.5 10.1533 18.1481 9.16658 17.4888C8.17988 16.8295 7.41085 15.8925 6.95672 14.7961C6.5026 13.6997 6.38378 12.4933 6.61529 11.3295C6.8468 10.1656 7.41824 9.09647 8.25736 8.25736C9.09647 7.41824 10.1656 6.8468 11.3295 6.61529C12.4933 6.38378 13.6997 6.5026 14.7961 6.95672C15.8925 7.41085 16.8295 8.17988 17.4888 9.16658C18.1481 10.1533 18.5 11.3133 18.5 12.5C18.5 14.0913 17.8679 15.6174 16.7426 16.7426C15.6174 17.8679 14.0913 18.5 12.5 18.5ZM19 7.5C18.7033 7.5 18.4133 7.41203 18.1666 7.2472C17.92 7.08238 17.7277 6.84811 17.6142 6.57403C17.5007 6.29994 17.4709 5.99834 17.5288 5.70736C17.5867 5.41639 17.7296 5.14912 17.9393 4.93934C18.1491 4.72956 18.4164 4.5867 18.7074 4.52882C18.9983 4.47094 19.2999 4.50065 19.574 4.61418C19.8481 4.72771 20.0824 4.91997 20.2472 5.16665C20.412 5.41332 20.5 5.70333 20.5 6C20.5 6.39782 20.342 6.77936 20.0607 7.06066C19.7794 7.34196 19.3978 7.5 19 7.5Z" fill="white" /> </g> <defs> <clipPath id="clip0_13_66"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                </a>
                            </li>




                            @endif
                            @if (@$siteInformation->facebook_url != '' || @$siteInformation->facebook_url != null)
                            <li class="list-inline-item">
                                <a href="{{ @$siteInformation->facebook_url }}" aria-label="click to visit facebook " target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_61)"> <path d="M25 12.5762C25 18.8147 20.4229 23.9866 14.4479 24.9251V16.2137H17.3531L17.9062 12.6095H14.4479V10.271C14.4479 9.28451 14.9312 8.32409 16.4792 8.32409H18.051V5.25534C18.051 5.25534 16.624 5.01159 15.2604 5.01159C12.4125 5.01159 10.5521 6.73763 10.5521 9.86159V12.6085H7.38646V16.2126H10.5521V24.9241C4.57812 23.9845 0 18.8137 0 12.5762C0 5.67305 5.59687 0.0761719 12.5 0.0761719C19.4031 0.0761719 25 5.67201 25 12.5762Z" fill="white" /> </g> <defs> <clipPath id="clip0_13_61"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                </a>
                            </li>
                            @endif
                            @if (@$siteInformation->linkedin_url != '' || @$siteInformation->linkedin_url != null)
                            <li class="list-inline-item">
                                <a href="{{ @$siteInformation->linkedin_url }}" aria-label="click to visit linkedin " target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_64)"> <path d="M21.3025 21.4921H17.5979V15.6906C17.5979 14.3071 17.5732 12.5268 15.671 12.5268C13.7417 12.5268 13.446 14.0336 13.446 15.5908V21.4921H9.74264V9.56143H13.2994V11.1914H13.3487C14.0743 9.95197 15.4221 9.21154 16.8574 9.26451C20.6125 9.26451 21.3037 11.7347 21.3037 14.9465L21.3025 21.4921ZM5.56247 7.93026C4.37482 7.93026 3.41263 6.96807 3.41263 5.78043C3.41263 4.59278 4.37482 3.63059 5.56247 3.63059C6.75011 3.63059 7.7123 4.59278 7.7123 5.78043C7.7123 6.96807 6.75011 7.93026 5.56247 7.93026ZM7.41416 21.4921H3.70585V9.56143H7.41416V21.4921ZM23.1492 0.190853H1.8443C0.837758 0.179765 0.01232 0.986724 0 1.99327V23.3857C0.01232 24.3934 0.837758 25.2004 1.8443 25.1893H23.1492C24.1582 25.2016 24.9874 24.3947 25.0009 23.3857V1.99203C24.9861 0.983028 24.157 0.176069 23.1492 0.189621" fill="white" /> </g> <defs> <clipPath id="clip0_13_64"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                </a>
                            </li>
                            @endif
                            @if (@$siteInformation->twitter_url != '' || @$siteInformation->twitter_url != null)
                            <li class="list-inline-item">
                                <a href="{{ @$siteInformation->twitter_url }}" aria-label="click to visit twitter " target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_71)"> <path d="M12.6749 11.0563L8.05526 4.59229H5.59131L11.3139 12.599L12.0343 13.6062L16.9325 20.4655H19.3964L13.3922 12.0635L12.6749 11.0563Z" fill="white" /> <path d="M22.9089 0H2.09115C0.936197 0 0 0.936197 0 2.09115V22.9089C0 24.0638 0.936197 25 2.09115 25H22.9089C24.0638 25 25 24.0638 25 22.9089V2.09115C25 0.936197 24.0638 0 22.9089 0ZM16.1765 21.5909L11.2191 14.5307L5.013 21.5909H3.40909L10.5078 13.5174L3.40909 3.40909H8.82346L13.5168 10.0931L19.3972 3.40909H21.0011L14.2318 11.1087L21.5909 21.5909H16.1765Z" fill="white" /> </g> <defs> <clipPath id="clip0_13_71"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                </a>
                            </li>
                            @endif
                        </ul>
                        <div class="left-menu">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#mobileOffcanvasExample" role="button" aria-controls="offcanvasExample" aria-expanded="false">
                                <img src="{{ asset('web/images/hamburgerMenu.svg') }}" class="img-fluid" width="50" height="50" alt="hamburgerMenu" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-ctn ">
            <div class="main-header main-nav">
                <nav class="navbar navbar-expand-lg navbar-light main-navbar">
                    <div class="container-fluid">
                        <div class="hamburg-menu-wrapper">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ Helper::getLogo() }}" class="img-fluid main-logo logo-desktop" width="80" height="120" fetchpriority="high"decoding="async" {!! $siteInformation->logo_attribute !!}   />
                                <img src="{{ Helper::getLogo() }}" class="img-fluid logo-mobile" width="60" height="90" {!! $siteInformation->logo_attribute !!} />
                            </a>
                            <div class="left-menu in-header">
                                <a class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                    href="#mobileOffcanvasExample" role="button" aria-controls="offcanvasExample">
                                    <img src="{{ asset('web/images/hamburgerMenu.svg') }}" class="img-fluid" width="50" height="50" alt="hamburgerMenu" />
                                </a>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ url('/') }}" id="menu">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}" id="menu">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item drop-down">
                                    <a class="nav-link" href="{{ url('services') }}">
                                        Services
                                    </a>
                                    <ul>
                                        @foreach ($menu as $service_item)
                                        <li><a href="{{ url('/') }}/service/{!! $service_item->short_url !!}">{!! $service_item->title !!}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="nav-item drop-down">
                                    <a class="nav-link" href="{{ url('portfolio') }}">Gallery</a>
                                    <ul>
                                        @php $count = 1; @endphp
                                        @foreach ($portfolio_menu as $portfolio_menu_item)
                                        <li><a href="{{ url('/') }}/portfolio#cat-{{$count}}"
                                                onclick="reloadPage('#cat-{{$count}}')">{!! $portfolio_menu_item->title
                                                !!}</a></li>
                                        @php $count++; @endphp
                                        @endforeach
                                        <li><a href="{{ url('/') }}/portfolio#all" onclick="reloadPage('#all')">All</a>
                                        </li>
                                    </ul>
                                </li>
                        
                                <li class="nav-item drop-down">
                                    <a class="nav-link" href="{{ url('container-list') }}">Containers</a>
                                    <ul>
                                        @foreach ($categories_menu as $key => $categories_menu_item)
                                        <li><a href="{{ url('/') }}/container-list#container-{!! $categories_menu_item->id !!}">{!!
                                                $categories_menu_item->title !!}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!-- here we put the size  -->
                                <li class="nav-item drop-down">
                                    <a class="nav-link" href="{{ url('sizes') }}">
                                        Sizes
                                    </a>
                                    <ul>
                                        @foreach ($sizes as $size_item)
                                        <li><a href="{{ url('/') }}/sizes/{!! $size_item->short_url !!}">{!! $size_item->title !!}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <!-- here we put the size  -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('blogs') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="offcanvas offcanvas-start mobile_left_menu" tabindex="-1" id="mobileOffcanvasExample"
                aria-labelledby="offcanvasExampleLabel" aria-hidden="true">
                <div class="offcanvas-header">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ Helper::getLogo() }}" loading='lazy' width="70" height="105"  alt="Webox" /></a>
                    <button aria-controls="offcanvasExample" role="button" href="#mobileOffcanvasExample" data-bs-toggle="offcanvas" class="btn-close text-reset" type="button"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li>
                        <li class="nav-item mobDropDown dropdown">
                            <a class="nav-link " href="{{ url('services') }}">Services</a>
                            <button class="" type="button" id="servicesMenu" data-bs-toggle="dropdown" aria-expanded="false">
                               <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M6.51406 4.49656L9.79231 1.21831C9.92533 1.08449 10 0.903472 10 0.714787C10 0.526101 9.92533 0.345081 9.79231 0.211264C9.72592 0.144322 9.64692 0.0911882 9.55989 0.0549283C9.47285 0.0186685 9.3795 -2.71228e-08 9.28522 -3.12441e-08C9.19093 -3.53655e-08 9.09758 0.0186685 9.01055 0.0549283C8.92351 0.0911881 8.84452 0.144322 8.77812 0.211264L5.50701 3.49666C5.44062 3.5636 5.36162 3.61674 5.27459 3.653C5.18756 3.68926 5.0942 3.70792 4.99992 3.70792C4.90563 3.70792 4.81228 3.68926 4.72525 3.653C4.63821 3.61674 4.55922 3.5636 4.49282 3.49666L1.22171 0.211264C1.08817 0.076774 0.906672 0.000842317 0.717145 0.000172601C0.527617 -0.000497115 0.345586 0.0741506 0.211096 0.207693C0.0766069 0.341236 0.000674462 0.522734 4.74545e-06 0.712261C-0.000664971 0.901789 0.0739834 1.08382 0.207526 1.21831L3.48578 4.49656C3.88753 4.89781 4.43211 5.12319 4.99992 5.12319C5.56772 5.12319 6.11231 4.89781 6.51406 4.49656Z" fill="white" /> </svg>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="servicesMenu">
                                @foreach ($menu as $service_item)
                                <li><a href="{{ url('/') }}/service/{!! $service_item->short_url !!}">{!!
                                        $service_item->title !!}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li class="nav-item mobDropDown dropdown">
                            <a class="nav-link" href="{{ url('portfolio') }}"> Gallery</a>
                            <button class="" type="button" id="PortfolioMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M6.51406 4.49656L9.79231 1.21831C9.92533 1.08449 10 0.903472 10 0.714787C10 0.526101 9.92533 0.345081 9.79231 0.211264C9.72592 0.144322 9.64692 0.0911882 9.55989 0.0549283C9.47285 0.0186685 9.3795 -2.71228e-08 9.28522 -3.12441e-08C9.19093 -3.53655e-08 9.09758 0.0186685 9.01055 0.0549283C8.92351 0.0911881 8.84452 0.144322 8.77812 0.211264L5.50701 3.49666C5.44062 3.5636 5.36162 3.61674 5.27459 3.653C5.18756 3.68926 5.0942 3.70792 4.99992 3.70792C4.90563 3.70792 4.81228 3.68926 4.72525 3.653C4.63821 3.61674 4.55922 3.5636 4.49282 3.49666L1.22171 0.211264C1.08817 0.076774 0.906672 0.000842317 0.717145 0.000172601C0.527617 -0.000497115 0.345586 0.0741506 0.211096 0.207693C0.0766069 0.341236 0.000674462 0.522734 4.74545e-06 0.712261C-0.000664971 0.901789 0.0739834 1.08382 0.207526 1.21831L3.48578 4.49656C3.88753 4.89781 4.43211 5.12319 4.99992 5.12319C5.56772 5.12319 6.11231 4.89781 6.51406 4.49656Z" fill="white" /> </svg>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="PortfolioMenu">
                                @php $count = 1; @endphp
                                @foreach ($portfolio_menu as $portfolio_menu_item)
                                <li><a href="{{ url('/') }}/portfolio#cat-{{$count}}" onclick="reloadPage('#cat-{{$count}}')">{!! $portfolio_menu_item->title !!}</a></li>
                                @php $count++; @endphp
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item mobDropDown dropdown">
                            <a class="nav-link" href="{{ url('container-list') }}"> Containers</a>
                            <button class="" type="button" id="ContainerMenu" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M6.51406 4.49656L9.79231 1.21831C9.92533 1.08449 10 0.903472 10 0.714787C10 0.526101 9.92533 0.345081 9.79231 0.211264C9.72592 0.144322 9.64692 0.0911882 9.55989 0.0549283C9.47285 0.0186685 9.3795 -2.71228e-08 9.28522 -3.12441e-08C9.19093 -3.53655e-08 9.09758 0.0186685 9.01055 0.0549283C8.92351 0.0911881 8.84452 0.144322 8.77812 0.211264L5.50701 3.49666C5.44062 3.5636 5.36162 3.61674 5.27459 3.653C5.18756 3.68926 5.0942 3.70792 4.99992 3.70792C4.90563 3.70792 4.81228 3.68926 4.72525 3.653C4.63821 3.61674 4.55922 3.5636 4.49282 3.49666L1.22171 0.211264C1.08817 0.076774 0.906672 0.000842317 0.717145 0.000172601C0.527617 -0.000497115 0.345586 0.0741506 0.211096 0.207693C0.0766069 0.341236 0.000674462 0.522734 4.74545e-06 0.712261C-0.000664971 0.901789 0.0739834 1.08382 0.207526 1.21831L3.48578 4.49656C3.88753 4.89781 4.43211 5.12319 4.99992 5.12319C5.56772 5.12319 6.11231 4.89781 6.51406 4.49656Z" fill="white" /> </svg>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="ContainerMenu">

                                @foreach ($categories_menu as $key => $categories_menu_item)
                                <li><a href="{{ url('/') }}/container-list#container-{!! $categories_menu_item->id !!}">{!!
                                        $categories_menu_item->title !!}</a></li>
                                @endforeach

                            </ul>
                        </li>
                                 <li class="nav-item mobDropDown dropdown">
                                    <a class="nav-link" href="{{ url('sizes') }}">
                                        Sizes
                                    </a>
                                      <button class="" type="button" id="SizeMenu" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M6.51406 4.49656L9.79231 1.21831C9.92533 1.08449 10 0.903472 10 0.714787C10 0.526101 9.92533 0.345081 9.79231 0.211264C9.72592 0.144322 9.64692 0.0911882 9.55989 0.0549283C9.47285 0.0186685 9.3795 -2.71228e-08 9.28522 -3.12441e-08C9.19093 -3.53655e-08 9.09758 0.0186685 9.01055 0.0549283C8.92351 0.0911881 8.84452 0.144322 8.77812 0.211264L5.50701 3.49666C5.44062 3.5636 5.36162 3.61674 5.27459 3.653C5.18756 3.68926 5.0942 3.70792 4.99992 3.70792C4.90563 3.70792 4.81228 3.68926 4.72525 3.653C4.63821 3.61674 4.55922 3.5636 4.49282 3.49666L1.22171 0.211264C1.08817 0.076774 0.906672 0.000842317 0.717145 0.000172601C0.527617 -0.000497115 0.345586 0.0741506 0.211096 0.207693C0.0766069 0.341236 0.000674462 0.522734 4.74545e-06 0.712261C-0.000664971 0.901789 0.0739834 1.08382 0.207526 1.21831L3.48578 4.49656C3.88753 4.89781 4.43211 5.12319 4.99992 5.12319C5.56772 5.12319 6.11231 4.89781 6.51406 4.49656Z" fill="white" /> </svg>
                            </button>
                                    <ul  class="dropdown-menu" aria-labelledby="SizeMenu">
                                        @foreach ($menu as $service_item)
                                        <li><a href="{{ url('/') }}/sizes/{!! $service_item->short_url !!}">{!! $service_item->title !!}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('blogs') }}"> Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end of header section -->


    @yield('content')
    <!-- end of heade section -->

    <section class="brocher-wrapper d-none">
        <div class="container-ctn">
            <div class="row align-items-center justify-content-between">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="broch-img">
                        <img src="{{ asset('web/images/cargo-container.png') }}" class="img-fluid cargo-img lazy-load" alt="cargo container" />
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-5 col-12">
                    <p class="title">Download our brochure to learn more</p>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 d-flex justify-content-end">
                    <div class="broch-download">
                        <a href="web/pdf/cs-presentation.pdf" class="text-decoration-none download" download>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none"> <g clip-path="url(#clip0_13_321)"> <path d="M41.5625 11.5417L34.2916 4.27083C31.5416 1.52083 27.875 0 23.9791 0H14.5833C8.83329 0 4.16663 4.66667 4.16663 10.4167V39.5833C4.16663 45.3333 8.83329 50 14.5833 50H35.4166C41.1666 50 45.8333 45.3333 45.8333 39.5833V21.8542C45.8333 17.9583 44.3125 14.2917 41.5625 11.5417ZM38.625 14.4792C39.2916 15.1458 39.8541 15.875 40.3125 16.6667H31.2708C30.125 16.6667 29.1875 15.7292 29.1875 14.5833V5.54167C29.9791 6 30.7083 6.5625 31.375 7.22917L38.6458 14.5L38.625 14.4792ZM41.6666 39.5833C41.6666 43.0208 38.8541 45.8333 35.4166 45.8333H14.5833C11.1458 45.8333 8.33329 43.0208 8.33329 39.5833V10.4167C8.33329 6.97917 11.1458 4.16667 14.5833 4.16667H23.9791C24.3125 4.16667 24.6666 4.16667 25 4.20833V14.5833C25 18.0208 27.8125 20.8333 31.25 20.8333H41.625C41.6666 21.1667 41.6666 21.5 41.6666 21.8542V39.5833ZM14.7708 27.0833H12.5C11.3541 27.0833 10.4166 28.0208 10.4166 29.1667V38.4167C10.4166 39.1458 11 39.7083 11.7083 39.7083C12.4166 39.7083 13 39.125 13 38.4167V35.875H14.75C17.2083 35.875 19.2083 33.8958 19.2083 31.4792C19.2083 29.0625 17.2083 27.0833 14.75 27.0833H14.7708ZM14.7708 33.2708H13.0416V29.6875H14.7916C15.7916 29.6875 16.6458 30.5 16.6458 31.4792C16.6458 32.4583 15.7916 33.2708 14.7916 33.2708H14.7708ZM39.625 28.3958C39.625 29.125 39.0416 29.6875 38.3333 29.6875H34.8125V32.0625H37.3958C38.125 32.0625 38.6875 32.6458 38.6875 33.3542C38.6875 34.0625 38.1041 34.6458 37.3958 34.6458H34.8125V38.3958C34.8125 39.125 34.2291 39.6875 33.5208 39.6875C32.8125 39.6875 32.2291 39.1042 32.2291 38.3958V28.375C32.2291 27.6458 32.8125 27.0833 33.5208 27.0833H38.3333C39.0625 27.0833 39.625 27.6667 39.625 28.375V28.3958ZM25.1875 27.1042H22.9166C21.7708 27.1042 20.8333 28.0417 20.8333 29.1875V38.4375C20.8333 39.1667 21.4166 39.6042 22.125 39.6042C22.8333 39.6042 25.1666 39.6042 25.1666 39.6042C27.625 39.6042 29.625 37.625 29.625 35.2083V31.5C29.625 29.0833 27.625 27.1042 25.1666 27.1042H25.1875ZM27.0416 35.2083C27.0416 36.1875 26.1875 37 25.1875 37H23.4583V29.7083H25.2083C26.2083 29.7083 27.0625 30.5208 27.0625 31.5V35.2083H27.0416Z" fill="#E9651B" /> </g> <defs> <clipPath id="clip0_13_321"> <rect width="50" height="50" fill="white" /> </clipPath> </defs> </svg>
                            </div>
                            <div class="title">download<span class="small"> brochure</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <section class="footer-wrapper">
            <div class="container-ctn pos-rel">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6 col-12">
                        <div class="left-box">
                            <div class="footer-content">
                                @if (@$siteInformation->footer_logo != '' || @$siteInformation->footer_logo != null)
                                <div class="foot-logo">
                                    <img src="{{ url('/') }}/{{ @$siteInformation->footer_logo }}" class="img-fluid" width="202" height="81" {!! @$siteInformation->footer_logo_attribute !!} />
                                </div>
                                @endif
                                <div class="discription">
                                    @if (@$siteInformation->company_info_footer != '' ||
                                    @$siteInformation->company_info_footer != null)
                                    <p>{!! isset($siteInformation) ? $siteInformation->company_info_footer : '' !!}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer-content">
                            <div class="foot-title">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="foo-links">
                                <ul class="list-inline mb-0 li-img">
                                    <li><a href="{{ url('/') }}" class="nav-link text-decoration-none">Home</a></li>
                                    <li><a href="{{ url('about') }}" class="nav-link text-decoration-none">About Us</a>
                                    </li>
                                    <li><a href="{{ url('container-list') }}" class="nav-link text-decoration-none">Containers</a></li>
                                    <li><a href="{{ url('portfolio') }}" class="nav-link text-decoration-none">Gallery</a></li>
                                    <li><a href="{{ url('services') }}" class="nav-link text-decoration-none">Services</a></li>
                                    <li><a href="{{ url('sizes') }}" class="nav-link text-decoration-none">Sizes</a></li>
                                    <li></li>
                                    <li><a href="{{ url('blogs') }}" class="nav-link text-decoration-none">Our Blog</a></li>
                                    <li><a href="{{ url('contact') }}" class="nav-link text-decoration-none">Contact Us</a></li>
                                    @if (@$siteInformation->privacy_policy != '' || @$siteInformation->privacy_policy !=
                                    null)
                                    <li><a href="{{ url('privacy-policy') }}" class="nav-link text-decoration-none">Privacy Policy</a></li>
                                    @endif
                                    @if (@$siteInformation->terms_and_conditions != '' ||
                                    @$siteInformation->terms_and_conditions != null)
                                    <li><a href="{{ url('terms-and-conditions') }}" class="nav-link text-decoration-none">Terms & Conditions</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="footer-content">
                            <div class="foot-title"><h3>Our Services</h3></div>
                            <div class="foo-links">
                                <ul class="list-inline mb-0 li-img">
                                    @foreach ($menufooter as $service_item)
                                    <li><a href="{{ url('/') }}/service/{!! $service_item->short_url !!}" class="nav-link text-decoration-none">{!! $service_item->title !!}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                        <div class="footer-content">
                            <div class="foot-title"><h3>Locate Us</h3></div>
                            <ul class="list-inline top-info">
                                <li>
                                    <div class="left">
                                        <span><img src="{{ asset('web/images/icons/orange-location.webp') }}" width="30" height="30" alt="location" /></span>
                                        @if($locationList[0]->office_address)
                                        <span class="loc-">{!! $locationList[0]->office_address !!}</span>
                                        @endif
                                    </div>
                                </li>
                                @if (@$siteInformation->email != '' || @$siteInformation->email != null)
                                <li>
                                    <div class="left">
                                        <span>
                                            <img src="{{ asset('web/images/icons/orange-email.webp') }}" width="30" height="30" alt="location" />
                                        </span>

                                        <span>
                                            <a href="mailto:{{ @$siteInformation->email }}" aria-label="email us" class="text-decoration-none">{{ @$siteInformation->email }}</a>
                                        </span>
                                    </div>
                                </li>
                                @endif
                                <li>
                                    <div class="call-flex">
                                        <div class="left">
                                            <img src="{{ asset('web/images/icons/orange-call.webp') }}" class="img-fluid" width="30" height="30" alt="location" />
                                        </div>
                                        <div clas="right">
                                            @foreach ($locationList as $location)
                                            <div><a href="tel:{{ $location->phone_number }}" class="text-decoration-none">
                                                    {{ $location->phone_number }}</a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="social-connect">
                                <p>Connect Us</p>
                                <ul class="list-inline header-social">
                                    {{-- youtube --}}
                                    @if (@$siteInformation->youtube_url != '' || @$siteInformation->youtube_url != null)
                                    <li class="list-inline-item">
                                        <a href="{{ @$siteInformation->youtube_url }}" aria-label="click to visit youtube " target="_blank">
                                            <svg width="34" height="25" viewBox="0 0 34 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M32.7332 4.29688C32.4219 2.57873 30.9387 1.32752 29.2175 0.93689C26.6419 0.390625 21.875 0 16.7175 0C11.5631 0 6.71998 0.390625 4.14123 0.93689C2.42309 1.32752 0.936891 2.49939 0.625609 4.29688C0.311281 6.25 0 8.98438 0 12.5C0 16.0156 0.311281 18.75 0.701906 20.7031C1.01623 22.4213 2.49939 23.6725 4.21753 24.0631C6.95191 24.6094 11.6394 25 16.7969 25C21.9543 25 26.6418 24.6094 29.3762 24.0631C31.0944 23.6725 32.5775 22.5006 32.8918 20.7031C33.2031 18.75 33.5937 15.9363 33.6731 12.5C33.5144 8.98438 33.1238 6.25 32.7332 4.29688ZM12.5 17.9688V7.03125L22.0306 12.5L12.5 17.9688Z" fill="white" /> </svg>
                                        </a>
                                    </li>
                                    @endif
                                    {{-- pinterest --}}
                                    @if (@$siteInformation->youtube_url != '' || @$siteInformation->youtube_url != null)
                                    <li class="list-inline-item">
                                        <a href="{{ @$siteInformation->youtube_url }}" aria-label="click to visit youtube " target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M12 0C5.37877 0 0 5.37877 0 12C0 18.6212 5.37877 24 12 24C18.6212 24 24 18.6212 24 12C24 5.37877 18.6212 0 12 0ZM12 1.04348C18.0573 1.04348 22.9565 5.9427 22.9565 12C22.9565 18.0573 18.0573 22.9565 12 22.9565C10.892 22.9565 9.82315 22.7907 8.81555 22.4857C9.26438 21.7353 9.84383 20.6627 10.074 19.7772C10.2108 19.2521 10.7731 17.1104 10.7731 17.1104C11.1385 17.808 12.2062 18.3984 13.3431 18.3984C16.726 18.3984 19.1647 15.2873 19.1647 11.4212C19.1647 7.71471 16.1402 4.94225 12.2486 4.94225C7.40704 4.94225 4.83729 8.19173 4.83729 11.73C4.83729 13.3755 5.71247 15.4238 7.11378 16.0761C7.32605 16.1749 7.44003 16.1321 7.48878 15.9263C7.52632 15.7701 7.71561 15.0088 7.80061 14.6546C7.82779 14.5415 7.81462 14.4439 7.72316 14.3325C7.25936 13.7699 6.88756 12.7366 6.88756 11.7728C6.88756 9.29846 8.76075 6.90387 11.9521 6.90387C14.7077 6.90387 16.6376 8.78237 16.6376 11.4681C16.6376 14.5024 15.1054 16.605 13.1117 16.605C12.0107 16.605 11.1863 15.6941 11.4507 14.5771C11.7679 13.244 12.3801 11.8054 12.3801 10.8424C12.3801 9.98124 11.918 9.26291 10.9606 9.26291C9.83498 9.26291 8.93071 10.4267 8.93071 11.9868C8.93071 12.9795 9.26698 13.6518 9.26698 13.6518C9.26698 13.6518 8.15506 18.353 7.95143 19.2279C7.74736 20.1022 7.80201 21.2798 7.88621 22.1566C3.8719 20.5317 1.04348 16.6014 1.04348 12C1.04348 5.9427 5.9427 1.04348 12 1.04348Z" fill="white" /> </svg>
                                        </a>
                                    </li>
                                    @endif
                                    {{-- snapchat --}}
                                    @if (@$siteInformation->snapchat_url != '' || @$siteInformation->snapchat_url !=
                                    null)

                                    <li class="list-inline-item">
                                        <a href="{{ @$siteInformation->snapchat_url }}" aria-label="click to visit snapchat " target="_blank">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M24.3222 18.2405C21.3038 17.7428 19.9246 14.6167 19.8799 14.5152C19.8738 14.4969 19.8596 14.4644 19.8514 14.4461C19.76 14.2633 19.6686 14.0053 19.7458 13.8225C19.8778 13.5097 20.5055 13.3106 20.8813 13.1908C21.0133 13.1481 21.1392 13.1095 21.2367 13.071C22.1488 12.7094 22.6038 12.2381 22.5936 11.6653C22.5855 11.2042 22.2321 10.7817 21.7121 10.5989C21.5313 10.5217 21.3241 10.4831 21.1149 10.4831C20.9727 10.4831 20.7574 10.5035 20.5502 10.5989C20.2028 10.7614 19.8981 10.8488 19.6808 10.8589C19.6341 10.8569 19.5935 10.8528 19.5589 10.8467L19.5813 10.4892C19.6828 8.87236 19.8108 6.85736 19.2644 5.63252C17.6516 2.02299 14.235 1.74268 13.2255 1.74268L12.7664 1.74674C11.7589 1.74674 8.34847 2.02705 6.73972 5.63455C6.19332 6.85939 6.31926 8.87236 6.42285 10.4913L6.42691 10.5522C6.43301 10.6517 6.4391 10.7513 6.4452 10.8467C6.21973 10.8874 5.77895 10.8122 5.32191 10.5989C4.70035 10.3085 3.58113 10.6924 3.42676 11.5049C3.3577 11.8644 3.44097 12.5469 4.76535 13.0689C4.86488 13.1096 4.98879 13.1481 5.12285 13.1908C5.4966 13.3106 6.12426 13.5077 6.25629 13.8225C6.33348 14.0053 6.24207 14.2633 6.13442 14.4847C6.07755 14.6167 4.70645 17.7428 1.68192 18.2405C1.29598 18.3035 1.02176 18.6447 1.04207 19.0388C1.04817 19.1424 1.07457 19.246 1.11723 19.3475C1.39145 19.9914 2.38879 20.4342 4.24942 20.7369C4.28192 20.8466 4.31848 21.0091 4.3388 21.0985C4.37739 21.2833 4.42005 21.4702 4.47692 21.6652C4.53177 21.85 4.72067 22.2786 5.30973 22.2786C5.48848 22.2786 5.68348 22.24 5.8927 22.1994C6.20145 22.1385 6.58739 22.0633 7.08301 22.0633C7.35926 22.0633 7.64364 22.0877 7.93005 22.1344C8.45817 22.2217 8.93551 22.561 9.49005 22.951C10.3554 23.5644 11.3365 24.2571 12.8579 24.2571C12.8985 24.2571 12.9391 24.255 12.9777 24.253C13.0325 24.255 13.0894 24.2571 13.1463 24.2571C14.6677 24.2571 15.6488 23.5624 16.5161 22.951C17.0443 22.5752 17.544 22.2238 18.0741 22.1344C18.3605 22.0877 18.6449 22.0633 18.9211 22.0633C19.3985 22.0633 19.7763 22.1242 20.1135 22.1913C20.3532 22.238 20.5441 22.2603 20.7208 22.2603C21.1149 22.2603 21.4175 22.0349 21.5272 21.6571C21.5841 21.4661 21.6247 21.2813 21.6654 21.0944C21.6816 21.0253 21.7202 20.8506 21.7547 20.7349C23.6154 20.4322 24.6127 19.9894 24.8849 19.3516C24.9296 19.25 24.954 19.1444 24.9621 19.0347C24.9824 18.6467 24.7082 18.3055 24.3222 18.2405Z" fill="white" /> </svg>
                                        </a>
                                    </li>
                                    @endif
                                    @if (@$siteInformation->tiktok_url != '' || @$siteInformation->tiktok_url != null)
                                    {{-- ticktok --}}
                                    <li class="list-inline-item">
                                        <a href="{{ @$siteInformation->tiktok_url }}" aria-label="click to visit tiktok " target="_blank">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M22.0238 0H2.97619C1.33512 0 0 1.33512 0 2.97619V22.0238C0 23.6649 1.33512 25 2.97619 25H22.0238C23.6649 25 25 23.6649 25 22.0238V2.97619C25 1.33512 23.6649 0 22.0238 0ZM19.6464 10.9065C19.5113 10.919 19.3744 10.9274 19.2357 10.9274C17.6744 10.9274 16.3024 10.1244 15.5042 8.91071C15.5042 12.0946 15.5042 15.7173 15.5042 15.778C15.5042 18.581 13.2315 20.8536 10.4286 20.8536C7.6256 20.8536 5.35298 18.581 5.35298 15.778C5.35298 12.975 7.6256 10.7024 10.4286 10.7024C10.5345 10.7024 10.6381 10.7119 10.7423 10.7185V13.2196C10.6381 13.2071 10.5357 13.1881 10.4286 13.1881C8.99762 13.1881 7.83809 14.3476 7.83809 15.7786C7.83809 17.2095 8.99762 18.369 10.4286 18.369C11.8595 18.369 13.1232 17.2417 13.1232 15.8107C13.1232 15.7542 13.1482 4.14762 13.1482 4.14762H15.5387C15.7637 6.28512 17.4893 7.97202 19.6464 8.12679V10.9065Z" fill="white" /> </svg>
                                            </a>
                                    </li>
                                    @endif
                                    @if (@$siteInformation->instagram_url != '' || @$siteInformation->instagram_url !=
                                    null)


                                    <li class="list-inline-item">
                                        <a href="{{ @$siteInformation->instagram_url }}" aria-label="click to visit instagram " target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_66)"> <path d="M12.5 16.5C14.7091 16.5 16.5 14.7091 16.5 12.5C16.5 10.2909 14.7091 8.5 12.5 8.5C10.2909 8.5 8.5 10.2909 8.5 12.5C8.5 14.7091 10.2909 16.5 12.5 16.5Z" fill="white" /> <path d="M18 0H7C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7V18C0 19.8565 0.737498 21.637 2.05025 22.9497C3.36301 24.2625 5.14348 25 7 25H18C19.8565 25 21.637 24.2625 22.9497 22.9497C24.2625 21.637 25 19.8565 25 18V7C25 5.14348 24.2625 3.36301 22.9497 2.05025C21.637 0.737498 19.8565 0 18 0ZM12.5 18.5C11.3133 18.5 10.1533 18.1481 9.16658 17.4888C8.17988 16.8295 7.41085 15.8925 6.95672 14.7961C6.5026 13.6997 6.38378 12.4933 6.61529 11.3295C6.8468 10.1656 7.41824 9.09647 8.25736 8.25736C9.09647 7.41824 10.1656 6.8468 11.3295 6.61529C12.4933 6.38378 13.6997 6.5026 14.7961 6.95672C15.8925 7.41085 16.8295 8.17988 17.4888 9.16658C18.1481 10.1533 18.5 11.3133 18.5 12.5C18.5 14.0913 17.8679 15.6174 16.7426 16.7426C15.6174 17.8679 14.0913 18.5 12.5 18.5ZM19 7.5C18.7033 7.5 18.4133 7.41203 18.1666 7.2472C17.92 7.08238 17.7277 6.84811 17.6142 6.57403C17.5007 6.29994 17.4709 5.99834 17.5288 5.70736C17.5867 5.41639 17.7296 5.14912 17.9393 4.93934C18.1491 4.72956 18.4164 4.5867 18.7074 4.52882C18.9983 4.47094 19.2999 4.50065 19.574 4.61418C19.8481 4.72771 20.0824 4.91997 20.2472 5.16665C20.412 5.41332 20.5 5.70333 20.5 6C20.5 6.39782 20.342 6.77936 20.0607 7.06066C19.7794 7.34196 19.3978 7.5 19 7.5Z" fill="white" /> </g> <defs> <clipPath id="clip0_13_66"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                        </a>
                                    </li>
                                    @endif
                                    @if (@$siteInformation->facebook_url != '' || @$siteInformation->facebook_url !=
                                    null)
                                    <li class="list-inline-item">
                                        <a href="{{ @$siteInformation->facebook_url }}" aria-label="click to visit facebook " target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_61)"> <path d="M25 12.5762C25 18.8147 20.4229 23.9866 14.4479 24.9251V16.2137H17.3531L17.9062 12.6095H14.4479V10.271C14.4479 9.28451 14.9312 8.32409 16.4792 8.32409H18.051V5.25534C18.051 5.25534 16.624 5.01159 15.2604 5.01159C12.4125 5.01159 10.5521 6.73763 10.5521 9.86159V12.6085H7.38646V16.2126H10.5521V24.9241C4.57812 23.9845 0 18.8137 0 12.5762C0 5.67305 5.59687 0.0761719 12.5 0.0761719C19.4031 0.0761719 25 5.67201 25 12.5762Z" fill="white" /> </g> <defs> <clipPath id="clip0_13_61"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                        </a>
                                    </li>
                                    @endif
                                    @if (@$siteInformation->linkedin_url != '' || @$siteInformation->linkedin_url !=
                                    null)
                                    <li class="list-inline-item">
                                        <a href="{{ @$siteInformation->linkedin_url }}" aria-label="click to visit linkedin " target="_blank">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_64)"> <path d="M21.3025 21.4921H17.5979V15.6906C17.5979 14.3071 17.5732 12.5268 15.671 12.5268C13.7417 12.5268 13.446 14.0336 13.446 15.5908V21.4921H9.74264V9.56143H13.2994V11.1914H13.3487C14.0743 9.95197 15.4221 9.21154 16.8574 9.26451C20.6125 9.26451 21.3037 11.7347 21.3037 14.9465L21.3025 21.4921ZM5.56247 7.93026C4.37482 7.93026 3.41263 6.96807 3.41263 5.78043C3.41263 4.59278 4.37482 3.63059 5.56247 3.63059C6.75011 3.63059 7.7123 4.59278 7.7123 5.78043C7.7123 6.96807 6.75011 7.93026 5.56247 7.93026ZM7.41416 21.4921H3.70585V9.56143H7.41416V21.4921ZM23.1492 0.190853H1.8443C0.837758 0.179765 0.01232 0.986724 0 1.99327V23.3857C0.01232 24.3934 0.837758 25.2004 1.8443 25.1893H23.1492C24.1582 25.2016 24.9874 24.3947 25.0009 23.3857V1.99203C24.9861 0.983028 24.157 0.176069 23.1492 0.189621" fill="white" /> </g> <defs> <clipPath id="clip0_13_64"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                        </a>
                                    </li>
                                    @endif
                                    @if (@$siteInformation->twitter_url != '' || @$siteInformation->twitter_url != null)
                                    <li class="list-inline-item">
                                        <a href="{{ @$siteInformation->twitter_url }}" aria-label="click to visit twitter " target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"> <g clip-path="url(#clip0_13_71)"> <path d="M12.6749 11.0563L8.05526 4.59229H5.59131L11.3139 12.599L12.0343 13.6062L16.9325 20.4655H19.3964L13.3922 12.0635L12.6749 11.0563Z" fill="white" /> <path d="M22.9089 0H2.09115C0.936197 0 0 0.936197 0 2.09115V22.9089C0 24.0638 0.936197 25 2.09115 25H22.9089C24.0638 25 25 24.0638 25 22.9089V2.09115C25 0.936197 24.0638 0 22.9089 0ZM16.1765 21.5909L11.2191 14.5307L5.013 21.5909H3.40909L10.5078 13.5174L3.40909 3.40909H8.82346L13.5168 10.0931L19.3972 3.40909H21.0011L14.2318 11.1087L21.5909 21.5909H16.1765Z" fill="white" /> </g> <defs> <clipPath id="clip0_13_71"> <rect width="25" height="25" fill="white" /> </clipPath> </defs> </svg>
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-12">-->
                <!--        <div class="certified-img">-->
                <!--            <img src="{{ asset('web/images/qrs2.webp') }}" class="img-fluid" width="420"-->
                <!--                height="96" alt="certicfied" />-->
                <!--<img src="{{ asset('web/images/iso.webp') }}" class="img-fluid" width="182"-->
                <!--    height="108" alt="certicfied" />-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </section>
        <section class="c-write-wrapper">
            <div class="container-ctn">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="c-right">
                            <div class="c">
                                @if (@$siteInformation->copyright != '' || @$siteInformation->copyright != null)
                                <p>{!! isset($siteInformation) ? $siteInformation->copyright : '' !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 d-flex justify-content-end">
                        <div class="designby">
                            <p>Designed By</p>
                            <span><img src="{{ asset('web/images/mighty-warner-white-logo.webp') }}" class="img-fluid" width="147" height="27" alt="Mighty Warner" /></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of footer section -->
    </footer>
    <div class="leftFixedBox">
        <div class="btn-group dropstart"></div>
        @if (@$siteInformation->whatsapp_number != '' || @$siteInformation->whatsapp_number != null)
        <div class="QuickSideRightBar QuickSideRightBarWhatsapp">
            <a href="#" class="a-width" data-bs-toggle="modal" data-bs-target="#enquiry-modal" aria-label="click to open popup">
                <div class="iconBox">
                    <img src="{{ asset('web/images/icons/enq-btn-icon.webp') }}" class="img-fluid desk-none" width="20" height="20" alt="Enquiry" />
                </div>
                <div class="slideLeft"><span class="textRight">Enquiry</span></div>
            </a>
        </div>
        @endif
        @if (@$siteInformation->phone != '' || @$siteInformation->phone != null)
        <div class="QuickSideRightBar QuickSideRightBarWhatsapp">
            <a href="tel:{!! isset($siteInformation) ? $siteInformation->phone : '' !!}" aria-label="click to call">
                <div class="iconBox animateBox"><img class="img-fluid" src="{{ asset('web/images/icons/call.webp') }}" width="20" height="20" alt="social Connect" /></div>
                <div class="slideLeft"><span class="textRight">{!! isset($siteInformation) ? $siteInformation->phone : '' !!}</span></div>
            </a>
        </div>
        @endif
    </div>
    <div class="fixedBottomBar">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="fixedWrapper">
                        <a href="#" class="a-width" data-bs-toggle="modal" data-bs-target="#enquiry-modal" aria-label="Open enquiry form">
                            <span class="iconBox animateBox">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke-width="0"/> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/> <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M23.7994 18.3704L23.8013 18.373C24.1307 18.8032 24.2888 20.2316 22.0258 19.9779C21.3596 19.9033 20.4282 19.7715 19.3088 19.3471C18.5551 19.0613 17.8986 18.7026 17.3584 18.3522C16.4699 18.7098 15.5118 18.9296 14.5113 18.9857C13.1436 20.8155 10.9602 22 8.50001 22C7.69152 22 6.91135 21.8717 6.17973 21.6339C5.74016 21.8891 5.24034 22.1376 4.68789 22.3471C3.56851 22.7715 2.63949 22.9297 1.97092 22.9779C1.47028 23.014 1.11823 22.9883 0.944098 22.9681C0.562441 22.9239 0.219524 22.7064 0.072134 22.3397C-0.0571899 22.0179 -0.0104055 21.6519 0.195537 21.3728C0.448192 21.0283 0.680439 20.6673 0.899972 20.3011C1.32809 19.5868 1.74792 18.8167 1.85418 17.9789C1.30848 16.9383 1.00001 15.7539 1.00001 14.5C1.00001 11.5058 2.75456 8.92147 5.29159 7.71896C6.30144 3.85296 9.81755 1 14 1C18.9706 1 23 5.02944 23 10C23 11.3736 22.6916 12.6778 22.1395 13.8448C21.9492 15.5687 22.8157 17.0204 23.7994 18.3704ZM7.00001 10C7.00001 6.13401 10.134 3 14 3C17.866 3 21 6.13401 21 10C21 11.1198 20.7378 12.1756 20.2723 13.1118C20.2242 13.2085 20.1921 13.3124 20.1772 13.4194C19.9584 14.9943 20.3278 16.43 21.0822 17.8083C19.9902 17.5451 18.9611 17.0631 18.0522 16.4035C17.7546 16.1875 17.3625 16.1523 17.0312 16.3117C16.1152 16.7525 15.0879 17 14 17C10.134 17 7.00001 13.866 7.00001 10ZM5.00353 10.2543C5.11889 14.4129 8.05529 17.8664 11.9674 18.7695C11.0213 19.5389 9.8145 20 8.50001 20C7.7707 20 7.07689 19.8586 6.44271 19.6026C6.14147 19.481 5.79993 19.5133 5.52684 19.6892C5.08797 19.972 4.56616 20.2543 3.9788 20.477C3.58892 20.6248 3.23263 20.7316 2.91446 20.8083C3.24678 20.2012 3.58332 19.4779 3.73844 18.7971C3.81503 18.461 3.8572 18.1339 3.87625 17.8266C3.88848 17.6293 3.84192 17.4327 3.74245 17.2618C3.27058 16.451 3.00001 15.5086 3.00001 14.5C3.00001 12.7904 3.78 11.263 5.00353 10.2543Z" fill="#fff"/> </g> </svg>
                                <div class="btn-title"><p>Enquiry</p></div>
                            </span>
                        </a>
                        <a class="a-width animateBox" href="tel:{{ $siteInformation->phone }}" aria-label="Call {{ $siteInformation->phone }}">
                            <span class="iconBox animateBox">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke-width="0"/> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/> <g id="SVGRepo_iconCarrier"> <path d="M10.0376 5.31617L10.6866 6.4791C11.2723 7.52858 11.0372 8.90532 10.1147 9.8278C10.1147 9.8278 10.1147 9.8278 10.1147 9.8278C10.1146 9.82792 8.99588 10.9468 11.0245 12.9755C13.0525 15.0035 14.1714 13.8861 14.1722 13.8853C14.1722 13.8853 14.1722 13.8853 14.1722 13.8853C15.0947 12.9628 16.4714 12.7277 17.5209 13.3134L18.6838 13.9624C20.2686 14.8468 20.4557 17.0692 19.0628 18.4622C18.2258 19.2992 17.2004 19.9505 16.0669 19.9934C14.1588 20.0658 10.9183 19.5829 7.6677 16.3323C4.41713 13.0817 3.93421 9.84122 4.00655 7.93309C4.04952 6.7996 4.7008 5.77423 5.53781 4.93723C6.93076 3.54428 9.15317 3.73144 10.0376 5.31617Z" fill="#fff"/> <path d="M13.2595 1.87983C13.3257 1.47094 13.7122 1.19357 14.1211 1.25976C14.1464 1.26461 14.2279 1.27983 14.2705 1.28933C14.3559 1.30834 14.4749 1.33759 14.6233 1.38082C14.9201 1.46726 15.3347 1.60967 15.8323 1.8378C16.8286 2.29456 18.1544 3.09356 19.5302 4.46936C20.906 5.84516 21.705 7.17097 22.1617 8.16725C22.3899 8.66487 22.5323 9.07947 22.6187 9.37625C22.6619 9.52466 22.6912 9.64369 22.7102 9.72901C22.7197 9.77168 22.7267 9.80594 22.7315 9.83125L22.7373 9.86245C22.8034 10.2713 22.5286 10.6739 22.1197 10.7401C21.712 10.8061 21.3279 10.53 21.2601 10.1231C21.258 10.1121 21.2522 10.0828 21.2461 10.0551C21.2337 9.9997 21.2124 9.91188 21.1786 9.79572C21.1109 9.56339 20.9934 9.21806 20.7982 8.79238C20.4084 7.94207 19.7074 6.76789 18.4695 5.53002C17.2317 4.29216 16.0575 3.59117 15.2072 3.20134C14.7815 3.00618 14.4362 2.88865 14.2038 2.82097C14.0877 2.78714 13.9417 2.75363 13.8863 2.7413C13.4793 2.67347 13.1935 2.28755 13.2595 1.87983Z" fill="#fff"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4857 5.3293C13.5995 4.93102 14.0146 4.7004 14.4129 4.81419L14.2069 5.53534C14.4129 4.81419 14.4129 4.81419 14.4129 4.81419L14.4144 4.81461L14.4159 4.81505L14.4192 4.81602L14.427 4.81834L14.4468 4.8245C14.4618 4.82932 14.4807 4.8356 14.5031 4.84357C14.548 4.85951 14.6074 4.88217 14.6802 4.91337C14.8259 4.97581 15.0249 5.07223 15.2695 5.21694C15.7589 5.50662 16.4271 5.9878 17.2121 6.77277C17.9971 7.55775 18.4782 8.22593 18.7679 8.7154C18.9126 8.95991 19.009 9.15897 19.0715 9.30466C19.1027 9.37746 19.1254 9.43682 19.1413 9.48173C19.1493 9.50418 19.1555 9.52301 19.1604 9.53809L19.1665 9.55788L19.1688 9.56563L19.1698 9.56896L19.1702 9.5705C19.1702 9.5705 19.1707 9.57194 18.4495 9.77798L19.1707 9.57194C19.2845 9.97021 19.0538 10.3853 18.6556 10.4991C18.2607 10.6119 17.8492 10.3862 17.7313 9.99413L17.7276 9.98335C17.7223 9.96832 17.7113 9.93874 17.6928 9.89554C17.6558 9.8092 17.5887 9.66797 17.4771 9.47938C17.2541 9.10264 16.8514 8.53339 16.1514 7.83343C15.4515 7.13348 14.8822 6.73078 14.5055 6.50781C14.3169 6.39619 14.1757 6.32909 14.0893 6.29209C14.0461 6.27358 14.0165 6.26254 14.0015 6.25721L13.9907 6.25352C13.5987 6.13564 13.3729 5.72419 13.4857 5.3293Z" fill="#fff"/> </g> </svg>
                                <span>Call Us</span>
                            </span>
                        </a>
                        <!--<a class="a-width" href="https://wa.me/{{ $siteInformation->whatsapp_number }}">-->
                        <!--    <span class="iconBox">-->
                        <!--        <img src="{{ asset('web/images/icons/wp.webp') }}" class="img-fluid desk-none"-->
                        <!--            alt="whatsapp" />-->
                        <!--        <span>Whatsapp</span>-->
                        <!--    </span>-->
                        <!--</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of sidebar -->

    <!-- main modal -->
    <div class="modal fade enquiry-form" id="enquiry-modal" tabindex="-1" aria-labelledby="EnquiryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen">
            <div class="modal-content en-modal-form">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="contact-form modal-enqury-wrapper">
                        <form class="enq-form" id="modal-enquiry-form" method="post" action="{{ url('/') }}/enquiry">
                            {{ csrf_field() }}
                            <div class="row align-items-center heit-100">
                                <div class="col-xxl-6 col-xl-6 col-lg-5 col-md-5 col-sm-12 col-12 img-100">
                                    <div class="modl-img">
                                        <img src="{{ asset('web/images/ful-enq.png') }}" class="img-fluid" width="860" height="921" alt="modal-img" />
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7 col-sm-12 col-12">
                                    <div class="green-bg">
                                        <div class="form-title"><div>Enquiry Now</div></div>
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                                                    <div id="enquiry-error-name" class="error-message">Please enter your name</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="number" class="form-label">Phone number</label>
                                                    <input type="tel" class="form-control" id="number" name="phone" placeholder="+18989889898" />
                                                    <div id="enquiry-error-number" class="error-message">Please enter your phone number.</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="email" class="form-label">Email Id</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com" />
                                                    <div id="enquiry-error-email" class="error-message">Please enter your email address.</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="branch" class="form-label">Branch</label>
                                                    <select class="select2" id="branch" name="type">
                                                        <option value="">None</option>
                                                        @foreach ($locationList as $key => $location)
                                                        <option value="{{ $location->name }}">
                                                            {{ $location->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="enquiry-error-branch" class="error-message">Please select
                                                        branch</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm">
                                                    <label for="service" class="form-label">Services</label>
                                                    <select class="select2" id="service" name="service_id">
                                                        <option value="">None</option>
                                                        @foreach (@$services_list as $service_enquiry)
                                                        <option value="{{ @$service_enquiry->id }}">
                                                            {{ @$service_enquiry->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="enquiry-error-service" class="error-message">Please
                                                        select services</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm">
                                                    <label for="msg" class="form-label">Message</label>
                                                    <textarea class="form-control" placeholder="Say Something" id="msg" name="message"></textarea>
                                                    <div id="enquiry-error-msg" class="error-message">Please enter message</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm mt-4 mb-0">
                                                    <input type="hidden" name="enquiry_type" value="contact-us">
                                                    <div class="whiteBtn" id="btnposition">
                                                        <div id="slide"></div>
                                                        <button class="btn" type="submit" id="formSubmit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of main modal -->
    <style>
        #clist-container {
            pointer-events: none;
        }
    </style>
    <!-- contanier modal -->
    <div class="modal fade enquiry-form" id="contanier-enquiry-modal" tabindex="-1"
        aria-labelledby="ContainerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen">
            <div class="modal-content en-modal-form">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="contact-form modal-enqury-wrapper">
                        <form class="enq-form" id="contanier-enquiry-modal-form" method="post"
                            action="{{ url('/') }}/enquiry">
                            {{ csrf_field() }}
                            <div class="row align-items-center heit-100">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 img-100">
                                    <div class="modl-img">
                                        <img src="{{ asset('web/images/ful-enq.png') }}" class="img-fluid" width="860" height="921" alt="modal-img" />
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="green-bg">
                                        <div class="form-title">
                                            <h2>Enquiry Now</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="clist-name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="clist-name" name="name" placeholder="Name" />
                                                    <div id="container-error-name" class="error-message">Please enter your name</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="clist-number" class="form-label">Phone number</label>
                                                    <input type="tel" class="form-control" id="clist-number" name="phone" placeholder="+18989889898" />
                                                    <div id="container-error-number" class="error-message">Please enter your phone number.</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="clist-email" class="form-label">Email Id</label>
                                                    <input type="email" class="form-control" id="clist-email" name="email" placeholder="example@gmail.com" />
                                                    <div id="container-error-email" class="error-message">Please enter your email address.</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="clist-branch" class="form-label">Branch</label>
                                                    <select class="select2" id="clist-branch" name="type">
                                                        <option value="">None</option>
                                                        @foreach ($locationList as $key => $location)
                                                        <option value="{{ $location->name }}">
                                                            {{ $location->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="container-error-branch" class="error-message">Please select branch</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm">
                                                    <label for="clist-service" class="form-label">Container</label>
                                                    {{-- <select class="select2" id="clist-service" name="service_id">
                                                        <option value="">None</option>
                                                        @foreach (@$services_list as $service_enquiry)
                                                            <option value="{{ @$service_enquiry->id }}">
                                                    {{ @$service_enquiry->title }}</option>
                                                    @endforeach
                                                    </select> --}}
                                                    <input type="text" disabled class="form-control"
                                                        id="clist-containers" placeholder="Container" />
                                                    <input type="hidden" class="form-control" id="clist-container"
                                                        name="product_id" autocomplete="off" placeholder="Container" />
                                                    <div id="container-error-service" class="error-message">Please select services</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm">
                                                    <label for="clist-msg" class="form-label">Message</label>
                                                    <textarea class="form-control" name="message"
                                                        placeholder="Say Something" id="clist-msg"></textarea>
                                                    <div id="container-error-msg" class="error-message">Please enter message</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm mt-4 mb-0">
                                                    <div class="whiteBtn" id="btnposition">
                                                        <input type="hidden" name="enquiry_type" value="container">
                                                        <div id="slide"></div>
                                                        <button class="btn" type="submit" id="ClistSubmit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of contanier modal -->
    <a id="backButton" class="backButton"></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var base_url = "{{ url('/') }}";
    </script>
    {!! isset($siteInformation) ? $siteInformation->footer_tag : '' !!}
    <!--<script src="{{ asset('web/js/bootstrap.min.js') }}"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        @if (!Request::is('/'))
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
        @endif
    <script src="{{ asset('web/js/custom.js?v=1.3') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>
    <script src="{{ asset('web/js/scripts.js?v=1.3') }}"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!--<script src="{{ asset('web/js/star-rating-svg.min.js') }}"></script>-->
    <!-- <script src="{{ asset('web/js/toast.js"></') }}script> -->
    <script src=" {{ asset('web/js/countup.js') }}"></script>
    <script src="{{ asset('web/js/equal-height.js') }}"></script>
    <script src="{{ asset('web/js/error-msg-form.js') }}"></script>
    @if (!Request::is('/'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
    <script>
        function initializePhoneInput(selector) {
            const phoneInputFieldss = document.querySelector(selector);
            if (phoneInputFieldss) {
                phoneInputFieldss.setAttribute("inputmode", "numeric");
                const phoneInput = window.intlTelInput(phoneInputFieldss, {
                    preferredCountries: ["us", "ae"],
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                });
                phoneInputFieldss.addEventListener('input', function (e) {
                    const phoneNumber = phoneInput.getNumber();
                    phoneInputFieldss.value = phoneNumber;
                });
            }
        }
        initializePhoneInput("#number");
        initializePhoneInput("#snumber");
        initializePhoneInput("#clist-number");
        initializePhoneInput("#c-number");
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var url = window.location.href;
            var hash = url.substring(url.indexOf('#') + 1);

            if (hash) {
                var tab = document.querySelector('.nav-pills [data-bs-target="#' + hash + '"]');
                if (tab) {
                    tab.click();
                }
            }

        });

        function reloadPage(hash) {
            window.location.hash = hash;
            window.location.reload(true);
        }
        
        document.querySelectorAll('img.lazy-load').forEach(img => { img.setAttribute('loading', 'lazy'); });
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LflJZwrAAAAAL0Ev7Wvlhl8XbuaKivdM7Uz8cHZ"></script>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
            const forms = document.querySelectorAll('form');
        
            // Add hidden reCAPTCHA input field to each form
            forms.forEach(form => {
                const recaptchaResponse = document.createElement('input');
                recaptchaResponse.setAttribute('type', 'hidden');
                recaptchaResponse.setAttribute('name', 'recaptcha_response');
                recaptchaResponse.setAttribute('class', 'recaptchaResponse');
                form.appendChild(recaptchaResponse);
            });
        
            grecaptcha.ready(function() {
                grecaptcha.execute('6LflJZwrAAAAAL0Ev7Wvlhl8XbuaKivdM7Uz8cHZ', {action: 'submit'}).then(function(token) {
                    forms.forEach(form => {
                        form.querySelector('.recaptchaResponse').value = token;
                    });
                });
            });
        });
        
        </script>
    
    
</body>
</html>