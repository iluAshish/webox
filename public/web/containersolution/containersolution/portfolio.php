<?php include('web/includes/header.php') ?>
<section class="bread-nav-wrapper">
    <div class="container-ctn">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                <h1 class="big-title">PORTFOLIO</h1>
                <ul class="list-inline bread-nav-action">
                    <li class="list-inline-item">
                        <a href="index.php" class="text-decoration-none">Home</a>
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                        <a href="blogs.php" class="active text-decoration-none">Gallery</a>
                    </li>
                </ul>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end">
                <div class="brid-right">
                    <img src="web/images/breadcumbs/portfolio-brid.png" class="img-fluid" alt="breadcumbs " />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-wrapper">
    <div class="container-ctn">
        <div class="blogs-title text-center">
            <p class="small-title">
                GALLERY
            </p>
            <h2 class="big-title">OUR PORTFOLIO</h2>
        </div>
    </div>
    <div class="container-ctn">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="btn active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="btn" id="cat-1-tab" data-bs-toggle="pill" data-bs-target="#cat-1" type="button" role="tab" aria-controls="cat-1" aria-selected="false">Category 1</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="https://youtu.be/f-5dNRhAyfg" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-1.png" class="img-fluid" alt="portfolio" />
                                <div class="video-wrap">
                                    <img src="web/images/icons/play-btn.svg" class="img-fluid" alt="video" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-2.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-2.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="https://youtu.be/f-5dNRhAyfg" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-3.png" class="img-fluid" alt="portfolio" />
                                <div class="video-wrap">
                                    <img src="web/images/icons/play-btn.svg" class="img-fluid" alt="video" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-4.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-4.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-5.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-5.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-6.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-6.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-7.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-7.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-8.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-8.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="primaryBtn" id="btnposition">
                            <div id="slide"></div>
                            <a href="services_detail.php" class="text-decoration-none"> Load MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="cat-1" role="tabpanel" aria-labelledby="cat-1-tab">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="https://youtu.be/f-5dNRhAyfg" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-1.png" class="img-fluid" alt="portfolio" />
                                <div class="video-wrap">
                                    <img src="web/images/icons/play-btn.svg" class="img-fluid" alt="video" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-2.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-2.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="https://youtu.be/f-5dNRhAyfg" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-3.png" class="img-fluid" alt="portfolio" />
                                <div class="video-wrap">
                                    <img src="web/images/icons/play-btn.svg" class="img-fluid" alt="video" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-4.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-4.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-5.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-5.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-6.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-6.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-7.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-7.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a href="web/images/portfolio/cat-8.png" class="text-decoration-none" data-fancybox="gallery">
                            <div class="portfolio-img">
                                <img src="web/images/portfolio/cat-8.png" class="img-fluid" alt="portfolio" />
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="primaryBtn" id="btnposition">
                            <div id="slide"></div>
                            <a href="services_detail.php" class="text-decoration-none"> Load MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end of testimonial slider -->
<?php include('web/includes/footer.php') ?>