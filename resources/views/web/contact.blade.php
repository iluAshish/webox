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
                        <div class="big-title">Contact Us</div>
                    @endif

                    <ul class="list-inline bread-nav-action">
                        <li class="list-inline-item">
                            <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            <a href="{{ url('contact') }}" class="active text-decoration-none">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end">
                    @if (@$banner->image != '')
                        <div class="brid-right">
                            {!! Helper::printImage($banner, 'image', 'image_webp', 'image_attribute', 'img-fluid') !!}
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
                            <a href="{{url('contact')}}" class="active text-decoration-none">Contact Us</a>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>
    </section>
@endif
    <section class="container-map-wrapper pb-0">
        <div class="container-ctn">
            <div class="blogs-title text-center">
                <p class="small-title">
                    CONTACT US
                </p>
                <h1 class="big-title">REACH US</h1>
            </div>
        </div>
        <img src="{{ asset('web/images/Map.webp') }}" class="img-fluid" alt="map" />
    </section>
    <section class="contact-wrapper">
        <div class="container-ctn">
            <div class="address-map">
                <div class="row gap-mar">
                    @foreach ($locations as $location)
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pos-rel">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 pe-0">
                                    <div class="map-box" data-match-height="groupName">
                                        <ul class="list-inline country-icon">
                                            <li class="">
                                                <div class="country-flag">
                                                    <img src="{{ asset('web/images/icons/map.png') }}" class="img-fluid"
                                                        alt="location" />
                                                    <div class="flag">
                                                        <img src="{{ $location->image }}" class="img-fluid"
                                                            alt="uae" />
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <h2>{{ $location->location }}</h2>
                                                <p>{{ $location->name }}</p>
                                            </li>
                                        </ul>
                                        <ul class="list-inline cta">
                                            @if ($location->phone_number)
                                                <li>
                                                    <a href="tel:{{ $location->phone_number }}">
                                                        <div class="left">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g clip-path="url(#clip0_250_564)">
                                                                        <path
                                                                            d="M12.5401 -0.000351562C12.5176 -0.0011849 7.4876 -0.0011849 7.4651 -0.000351562C5.1851 0.0196484 3.33594 1.88132 3.33594 4.16548V15.8321C3.33594 18.1297 5.2051 19.9988 7.5026 19.9988H12.5026C14.8001 19.9988 16.6693 18.1297 16.6693 15.8321V4.16632C16.6693 1.88132 14.8201 0.0204818 12.5401 -0.000351562ZM15.0026 15.8321C15.0026 17.2105 13.8809 18.3321 12.5026 18.3321H7.5026C6.12427 18.3321 5.0026 17.2105 5.0026 15.8321V4.16632C5.0026 2.95548 5.8676 1.94382 7.01177 1.71465L7.5901 2.87215C7.73094 3.15465 8.0201 3.33298 8.33594 3.33298H11.6693C11.9851 3.33298 12.2734 3.15465 12.4151 2.87215L12.9934 1.71465C14.1376 1.94298 15.0026 2.95548 15.0026 4.16632V15.8321ZM10.8359 16.6655H9.16927C8.70927 16.6655 8.33594 16.2921 8.33594 15.8321C8.33594 15.3721 8.70927 14.9988 9.16927 14.9988H10.8359C11.2959 14.9988 11.6693 15.3721 11.6693 15.8321C11.6693 16.2921 11.2959 16.6655 10.8359 16.6655Z"
                                                                            fill="#E9651B" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_250_564">
                                                                            <rect width="20" height="20"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="right">
                                                            <p class="font-robo">{{ $location->phone_number }}</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($location->land_phone)
                                                <li>
                                                    <a href="tel:{{ $location->land_phone }}">
                                                        <div class="left">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g clip-path="url(#clip0_250_562)">
                                                                        <path
                                                                            d="M10 8.33286C7.7025 8.33286 5.83333 10.202 5.83333 12.4995C5.83333 14.797 7.7025 16.6662 10 16.6662C12.2975 16.6662 14.1667 14.797 14.1667 12.4995C14.1667 10.202 12.2975 8.33286 10 8.33286ZM10 14.9995C8.62167 14.9995 7.5 13.8779 7.5 12.4995C7.5 11.1212 8.62167 9.99953 10 9.99953C11.3783 9.99953 12.5 11.1212 12.5 12.4995C12.5 13.8779 11.3783 14.9995 10 14.9995ZM17.205 9.13286C18.7717 8.96536 20 7.6512 20 6.04203C20 4.86286 19.53 3.74203 18.6725 2.88453C14.8625 -0.925469 5.13583 -0.924635 1.3275 2.88453C0.47 3.74203 0 4.86286 0 6.0412C0 7.6512 1.22917 8.96536 2.795 9.13286L1.07833 12.352C0.3725 13.6754 0 15.167 0 16.6662C0 18.5045 1.495 19.9995 3.33333 19.9995H16.6667C18.505 19.9995 20 18.5045 20 16.6662C20 15.167 19.6275 13.6754 18.9217 12.352L17.205 9.13286ZM1.66667 6.04036C1.66667 5.30703 1.96333 4.60453 2.50583 4.06286C5.72833 0.842031 14.2733 0.842031 17.4942 4.06286C18.0358 4.60453 18.3342 5.30703 18.3333 6.0412C18.3333 6.84536 17.6792 7.49953 16.875 7.49953H16.305L15.6575 6.42036C15.3117 5.84286 14.8125 5.39203 14.2167 5.11786C13.275 4.6837 11.7792 4.16703 10 4.16703C8.22083 4.16703 6.725 4.68453 5.78417 5.11786C5.18667 5.39286 4.68833 5.84286 4.3425 6.42036L3.695 7.49953H3.125C2.32083 7.49953 1.66667 6.84536 1.66667 6.04036ZM16.6667 18.3329H3.33333C2.41417 18.3329 1.66667 17.5854 1.66667 16.6662C1.66667 15.4395 1.97167 14.2187 2.55 13.137L4.89833 8.7337L5.77167 7.27703C5.945 6.9887 6.19 6.76536 6.4825 6.6312C7.27167 6.26703 8.52333 5.83286 10.0008 5.83286C11.4783 5.83286 12.7292 6.26703 13.52 6.6312C13.8117 6.76536 14.0567 6.9887 14.23 7.27703L15.1033 8.7337L17.4517 13.137C18.0292 14.2195 18.335 15.4404 18.335 16.6662C18.335 17.5854 17.5875 18.3329 16.6683 18.3329H16.6667Z"
                                                                            fill="#E9651B" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_250_562">
                                                                            <rect width="20" height="20"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="right">
                                                            <p class="font-robo">{{ $location->land_phone }}</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($location->email)
                                                <li>
                                                    <a href="mailto:{{ $location->email }}">
                                                        <div class="left">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g clip-path="url(#clip0_250_566)">
                                                                        <path
                                                                            d="M15.8333 0.833008H4.16667C3.062 0.834331 2.00296 1.27374 1.22185 2.05486C0.440735 2.83597 0.00132321 3.89501 0 4.99967L0 14.9997C0.00132321 16.1043 0.440735 17.1634 1.22185 17.9445C2.00296 18.7256 3.062 19.165 4.16667 19.1663H15.8333C16.938 19.165 17.997 18.7256 18.7782 17.9445C19.5593 17.1634 19.9987 16.1043 20 14.9997V4.99967C19.9987 3.89501 19.5593 2.83597 18.7782 2.05486C17.997 1.27374 16.938 0.834331 15.8333 0.833008ZM4.16667 2.49967H15.8333C16.3323 2.50066 16.8196 2.65094 17.2325 2.93118C17.6453 3.21142 17.9649 3.6088 18.15 4.07217L11.7683 10.4547C11.2987 10.9224 10.6628 11.1851 10 11.1851C9.33715 11.1851 8.70131 10.9224 8.23167 10.4547L1.85 4.07217C2.03512 3.6088 2.35468 3.21142 2.76754 2.93118C3.1804 2.65094 3.66768 2.50066 4.16667 2.49967ZM15.8333 17.4997H4.16667C3.50363 17.4997 2.86774 17.2363 2.3989 16.7674C1.93006 16.2986 1.66667 15.6627 1.66667 14.9997V6.24967L7.05333 11.633C7.83552 12.4132 8.89521 12.8514 10 12.8514C11.1048 12.8514 12.1645 12.4132 12.9467 11.633L18.3333 6.24967V14.9997C18.3333 15.6627 18.0699 16.2986 17.6011 16.7674C17.1323 17.2363 16.4964 17.4997 15.8333 17.4997Z"
                                                                            fill="#E9651B" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_250_566">
                                                                            <rect width="20" height="20"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="right">
                                                            <p>{{ $location->email }}</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($location->alternate_email)
                                                <li>
                                                    <a href="mailto:{{ $location->alternate_email }}">
                                                        <div class="left">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g clip-path="url(#clip0_250_566)">
                                                                        <path
                                                                            d="M15.8333 0.833008H4.16667C3.062 0.834331 2.00296 1.27374 1.22185 2.05486C0.440735 2.83597 0.00132321 3.89501 0 4.99967L0 14.9997C0.00132321 16.1043 0.440735 17.1634 1.22185 17.9445C2.00296 18.7256 3.062 19.165 4.16667 19.1663H15.8333C16.938 19.165 17.997 18.7256 18.7782 17.9445C19.5593 17.1634 19.9987 16.1043 20 14.9997V4.99967C19.9987 3.89501 19.5593 2.83597 18.7782 2.05486C17.997 1.27374 16.938 0.834331 15.8333 0.833008ZM4.16667 2.49967H15.8333C16.3323 2.50066 16.8196 2.65094 17.2325 2.93118C17.6453 3.21142 17.9649 3.6088 18.15 4.07217L11.7683 10.4547C11.2987 10.9224 10.6628 11.1851 10 11.1851C9.33715 11.1851 8.70131 10.9224 8.23167 10.4547L1.85 4.07217C2.03512 3.6088 2.35468 3.21142 2.76754 2.93118C3.1804 2.65094 3.66768 2.50066 4.16667 2.49967ZM15.8333 17.4997H4.16667C3.50363 17.4997 2.86774 17.2363 2.3989 16.7674C1.93006 16.2986 1.66667 15.6627 1.66667 14.9997V6.24967L7.05333 11.633C7.83552 12.4132 8.89521 12.8514 10 12.8514C11.1048 12.8514 12.1645 12.4132 12.9467 11.633L18.3333 6.24967V14.9997C18.3333 15.6627 18.0699 16.2986 17.6011 16.7674C17.1323 17.2363 16.4964 17.4997 15.8333 17.4997Z"
                                                                            fill="#E9651B" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_250_566">
                                                                            <rect width="20" height="20"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="right">
                                                            <p>{{ $location->alternate_email }}</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($location->working_hours)
                                            <li>
                                                    <a href="javascript:;">
                                                        <div class="left">
                                                            <span style="margin-left: -6px;">
                                                                <svg fill="#E9651B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" xml:space="preserve" stroke="#E9651B" width="30" height="30" enable-background="new 0 0 100 100">

                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                
                                                                <g id="SVGRepo_iconCarrier"> <path d="M48.1,35.3h3.2c0.9,0,1.6,0.7,1.6,1.6c0,0,0,0,0,0v14c0,0.4-0.2,0.8-0.4,1.2l-9,9c-0.6,0.6-1.6,0.6-2.2,0 l-2.2-2.2c-0.6-0.6-0.6-1.6,0-2.2l7.5-7.6V37c-0.1-0.8,0.5-1.6,1.4-1.7C48,35.3,48,35.3,48.1,35.3z"></path> <path d="M84.5,49.2h-4.8c0-0.3-0.1-0.7-0.1-1.1c-1.3-16.4-15.6-28.7-32-27.5c-16.4,1.3-28.7,15.6-27.5,32 C21.3,68.1,34,80,49.5,80.2c8.4,0.2,16.5-3.3,22.2-9.4c0.5-0.5,1-1,0.4-1.6l-2.6-3.1c-0.9-1.1-1.7-0.6-2.4,0.1 c-5,5.5-12.4,8.3-19.8,7.5c-10.3-1-19.9-10.6-21-20.7c-1.3-12.9,8.1-24.5,21-25.8s24.5,8.1,25.8,21H73c0.1,0.4,0.1,0.7,0.1,1.1h-4.7 c-0.9,0-1.6,0.7-1.6,1.6c0,0.4,0.1,0.7,0.3,1l8,9.7c0.7,0.7,1.8,0.7,2.5,0c0,0,0,0,0,0l8-9.7c0.6-0.6,0.6-1.6,0-2.2 C85.3,49.4,84.9,49.2,84.5,49.2z"></path> </g>
                                                                
                                                                
                                                                
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="right">
                                                            <p>{!! $location->working_hours !!}</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                            @if ($location->office_address)
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="left">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <g clip-path="url(#clip0_250_568)">
                                                                        <path
                                                                            d="M9.9974 5C9.33813 5 8.69366 5.1955 8.1455 5.56177C7.59733 5.92804 7.17009 6.44863 6.9178 7.05772C6.66551 7.66681 6.5995 8.33703 6.72811 8.98363C6.85673 9.63024 7.1742 10.2242 7.64037 10.6904C8.10655 11.1565 8.70049 11.474 9.3471 11.6026C9.9937 11.7312 10.6639 11.6652 11.273 11.4129C11.8821 11.1606 12.4027 10.7334 12.769 10.1852C13.1352 9.63707 13.3307 8.9926 13.3307 8.33333C13.3307 7.44928 12.9795 6.60143 12.3544 5.97631C11.7293 5.35119 10.8815 5 9.9974 5ZM9.9974 10C9.66776 10 9.34553 9.90225 9.07145 9.71912C8.79737 9.53598 8.58374 9.27568 8.4576 8.97114C8.33145 8.6666 8.29845 8.33149 8.36276 8.00818C8.42706 7.68488 8.5858 7.38791 8.81889 7.15482C9.05197 6.92174 9.34895 6.763 9.67225 6.69869C9.99555 6.63438 10.3307 6.66739 10.6352 6.79353C10.9397 6.91968 11.2 7.1333 11.3832 7.40738C11.5663 7.68147 11.6641 8.0037 11.6641 8.33333C11.6641 8.77536 11.4885 9.19928 11.1759 9.51184C10.8633 9.82441 10.4394 10 9.9974 10Z"
                                                                            fill="#E9651B" />
                                                                        <path
                                                                            d="M10.0003 19.9997C9.29855 20.0033 8.60619 19.8387 7.98115 19.5198C7.35611 19.2008 6.81659 18.7367 6.40776 18.1664C3.23193 13.7855 1.62109 10.4922 1.62109 8.37721C1.62109 6.15492 2.5039 4.02365 4.07529 2.45225C5.64669 0.88085 7.77797 -0.00195312 10.0003 -0.00195312C12.2226 -0.00195312 14.3538 0.88085 15.9252 2.45225C17.4966 4.02365 18.3794 6.15492 18.3794 8.37721C18.3794 10.4922 16.7686 13.7855 13.5928 18.1664C13.1839 18.7367 12.6444 19.2008 12.0194 19.5198C11.3943 19.8387 10.702 20.0033 10.0003 19.9997ZM10.0003 1.81721C8.26061 1.8192 6.59278 2.51115 5.36265 3.74127C4.13253 4.9714 3.44058 6.63923 3.43859 8.37888C3.43859 10.0539 5.01609 13.1514 7.87943 17.1005C8.12251 17.4354 8.4414 17.7079 8.81002 17.8958C9.17864 18.0837 9.58651 18.1816 10.0003 18.1816C10.414 18.1816 10.8219 18.0837 11.1905 17.8958C11.5591 17.7079 11.878 17.4354 12.1211 17.1005C14.9844 13.1514 16.5619 10.0539 16.5619 8.37888C16.5599 6.63923 15.868 4.9714 14.6379 3.74127C13.4077 2.51115 11.7399 1.8192 10.0003 1.81721Z"
                                                                            fill="#E9651B" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_250_568">
                                                                            <rect width="20" height="20"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="right">
                                                            <p>{{ $location->office_address }}</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 ps-0">
                                    <div class="map">
                                        <iframe src="{{ $location->google_map }}" style="border: 0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="enquiry-form-wrapper">
        <div class="container-ctn-left">
            <div class="main-form">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="left-content">
                            <img src="{{ asset('web/images/contact-enq.png') }}" class="img-fluid left-img" alt="form image" />
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="right-content">
                            <div class="enq-area">
                                <div class="enq-form">
                                    <form id="contact-form" method="POST" action="{{ url('/') }}/enquiry">
                                        {{ csrf_field() }}
                                        <h2>Enquire Now</h2>
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="c-name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="c-name"
                                                        name="name" placeholder="Name" />
                                                    <div id="contact-error-name" class="error-message">Please enter your
                                                        name</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="c-number" class="form-label">Phone number</label>
                                                    <input type="tel" class="form-control" id="c-number"
                                                        name="phone" placeholder="+971 89898 8989" />
                                                    <div id="contact-error-number" class="error-message">Please enter your
                                                        phone number.</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="c-email" class="form-label">Email Id</label>
                                                    <input type="email" class="form-control" id="c-email"
                                                        name="email" placeholder="example@gmail.com" />
                                                    <div id="contact-error-email" class="error-message">Please enter your
                                                        email address.</div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="filed-btm">
                                                    <label for="c-branch" class="form-label">Branch</label>
                                                    <select class="select2" id="c-branch" name="type">
                                                        <option value="">None</option>
                                                        @foreach ($locationList as $key => $location)
                                                            <option value="{{ $location->name }}">{{ $location->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="contact-error-branch" class="error-message">Please select
                                                        branch</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm">
                                                    <label for="c-service" class="form-label">Services</label>
                                                    <!-- <select class="form-select form-control" id="service" aria-label="Default select example">
                                                        <option value="" selected disabled>Select any services</option>
                                                        <option value="1">Container Trading</option>
                                                        <option value="2">Container Shiping</option>
                                                        <option value="3">Container Trading</option>
                                                    </select> -->
                                                    <select class="select2" id="c-service" name="service_id">
                                                        @foreach (@$services_list as $service_enquiry)
                                                            <option value="{{ @$service_enquiry->id }}">
                                                                {{ @$service_enquiry->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="contact-error-service" class="error-message">Please select
                                                        services</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm">
                                                    <label for="c-msg" class="form-label">Message</label>
                                                    <textarea class="form-control" placeholder="Say Something" id="c-msg" name="message"></textarea>
                                                    <div id="contact-error-msg" class="error-message">Please enter message
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="filed-btm mt-4 mb-0">
                                                    <input type="hidden" name="enquiry_type" value="contact-us">
                                                    <div class="primaryBtn" id="btnposition">
                                                        <div id="slide"></div>
                                                        <button class="btn" type="submit"
                                                            id="CformSubmit">Submit</button>
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
            </div>
        </div>
    </section>
@endsection
