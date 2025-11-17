$(document).ready(function () {
  var slider = $('.video-slider').slick({
    loop:true,
    slidesToShow: 1,
    slidesToScroll: 1,
    // infinite: true,
    autoplay: false,
    fade: true,
    swipeToSlide: true,
    initialSlide: 0,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots: false,
        },
      },
    ],
  });

  // Listen for 'afterChange' event and play the video on the current slide
  slider.on('afterChange', function (event, slick, currentSlide) {
    var video = $(slick.$slides[currentSlide]).find('.banner-previewVideo')[0];
    video.play();
  });

  // Listen for 'beforeChange' event and pause the video on the current slide
  slider.on('beforeChange', function (event, slick, currentSlide) {
    var video = $(slick.$slides[currentSlide]).find('.banner-previewVideo')[0];
    video.pause();
  });

  // Listen for 'ended' event on the video and move to the next slide
  $('.banner-previewVideo').on('ended', function () {
    slider.slick('slickNext');
  });
});
$('.hero-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 1000,
    fade:true,
    centerPadding: '40px',
    swipeToSlide: true,
    initialSlide: 0,
    cssEase: 'linear',
    useTransform: true,
    arrows: true,
    dots:true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots:false,
        }
      },
    ]
  }); 

  $('.service-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    swipeToSlide: true,
    cssEase: 'linear',
    arrows: true,
    dots:false,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots:true,
          arrows: false,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots:true,
          arrows: false,
        }
      },
      {
        breakpoint: 590,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots:true,
          arrows: false,
        }
      }
    ]
  });
  $('.client-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    swipeToSlide: true,
    cssEase: 'linear',
    arrows: true,
    dots:false,
    responsive: [
      {
        breakpoint: 1410,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1195,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 590,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots:false,
        }
      }
    ]
  });
    $('.testimonal-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 2000,
        speed: 500,
        swipeToSlide: true,
        cssEase: 'linear',
        arrows: false,
        dots:true,
        responsive: [
          {
            breakpoint: 1195,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 590,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots:false,
            }
          },
          {
            breakpoint: 500,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots:false,
            }
          }
        ]
        }); 
  