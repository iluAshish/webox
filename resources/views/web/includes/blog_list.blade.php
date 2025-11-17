@foreach ($blogs as $blog)
    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="blog-list-box">
            <a href="{{ url('/') }}/blog/{!! $blog->short_url !!}" class="text-decoration-none" target="_blank">
                <div class="service-img">
                    {!! Helper::printImage($blog,'image','image_webp','image_attribute','img-fluid') !!}
                </div>
            </a>
            <div class="seriver-contant" data-match-height="groupName">
                <a href="{{ url('/') }}/blog/{!! $blog->short_url !!}" class="text-decoration-none">
                    <div class="service-title">
                        @if (@$blog->title != '')
                            <h3>{!! $blog->title !!}</h3>
                        @endif
                    </div>
                    <div class="news-header">
                        <div class="news-title">
                            <h4>
                                @if (@$blog->written_by != '')
                                    {!! $blog->written_by !!}
                                @endif
                            </h4>
                        </div>
                        <div class="news-date">
                            <h4>
                                @if (@$blog->posted_date != '')
                                    {!! $blog->posted_date !!}
                                @endif
                            </h4>
                        </div>
                    </div>
                    <div class="serive-description">
                        @if (@$blog->description != '')
                            <p>{!! $blog->description !!}</p>
                        @endif
                    </div>
                </a>
            </div>
            <div class="read-more">
                <a href="{{ url('/') }}/blog/{!! $blog->short_url !!}" class="text-text-decoration-none">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                            fill="none">
                            <g clip-path="url(#clip0_13_136)">
                                <path
                                    d="M23.75 0H6.25C2.80375 0 0 2.80375 0 6.25V23.75C0 27.1963 2.80375 30 6.25 30H23.75C27.1963 30 30 27.1963 30 23.75V6.25C30 2.80375 27.1963 0 23.75 0ZM20 16.25H16.25V20C16.25 20.6912 15.69 21.25 15 21.25C14.31 21.25 13.75 20.6912 13.75 20V16.25H10C9.31 16.25 8.75 15.6912 8.75 15C8.75 14.3088 9.31 13.75 10 13.75H13.75V10C13.75 9.30875 14.31 8.75 15 8.75C15.69 8.75 16.25 9.30875 16.25 10V13.75H20C20.69 13.75 21.25 14.3088 21.25 15C21.25 15.6912 20.69 16.25 20 16.25Z"
                                    fill="#E9651B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_13_136">
                                    <rect width="30" height="30" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <span class="action-title">Read More</span>
                </a>
            </div>
        </div>
    </div>
@endforeach
<div class="appendHere_{{ $offset }}"></div>
<div class="more-section-{{ $offset }}"></div>
<input type="hidden" id="totalBlog" name="total_blog" value="{{ $totalBlog }}">
<input type="hidden" id="blog_loading_offset" name="offset" value="{{ $offset }}">
<input type="hidden" id="blog_loading_limit" name="loading_limit" value="{{ $loading_limit }}">
@if ($totalBlog > $offset)
    <div class="row py-3 more-section-{{ $offset }}">
        <div class="col-12 d-flex justify-content-center">
            <div class="primaryBtn blog-load" id="btnposition">
                <div id="slide"></div>
                <a href="#" class="text-decoration-none"> Load MORE</a>
            </div>
        </div>
    </div>
@endif
