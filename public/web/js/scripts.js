

  // Check if .service-img exists on the page
  if (document.querySelector('.service-img')) {

    let mm = gsap.matchMedia();

    mm.add("(min-width: 768px)", () => {
      gsap.timeline({
        scrollTrigger: {
          trigger: '.service-img picture',
          start: 'top bottom',
          end: 'bottom top',
          scrub: true,
          markers: false,
        },
      }).to('.service-img svg', {
        x: '20vw',
      });
    });

  }

$('.hero-slider').slick({slidesToShow:1,slidesToScroll:1,infinite:!0,autoplay:!1,autoplaySpeed:2000,speed:1000,fade:!0,centerPadding:'40px',swipeToSlide:!0,initialSlide:0,cssEase:'linear',useTransform:!0,arrows:!0,dots:!0,responsive:[{breakpoint:768,settings:{dots:!1,}},]});$('.service-slider').slick({slidesToShow:4,slidesToScroll:1,infinite:!0,autoplay:!1,autoplaySpeed:2000,speed:500,swipeToSlide:!0,cssEase:'linear',arrows:!0,dots:!1,responsive:[{breakpoint:1200,settings:{slidesToShow:4,slidesToScroll:1,dots:!0,arrows:!1,}},{breakpoint:992,settings:{slidesToShow:3,slidesToScroll:1,dots:!0,arrows:!1,}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:1,dots:!0,arrows:!1,}},{breakpoint:576,settings:{slidesToShow:1,slidesToScroll:1,dots:!0,arrows:!1,}}]});$('.client-slider').slick({slidesToShow:5,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:2000,speed:500,swipeToSlide:!0,cssEase:'linear',arrows:!0,dots:!1,responsive:[{breakpoint:1410,settings:{slidesToShow:4,slidesToScroll:1,}},{breakpoint:1195,settings:{slidesToShow:3,slidesToScroll:1,}},{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:1,}},{breakpoint:590,settings:{slidesToShow:1,slidesToScroll:1,dots:!1,}}]});$('.testimonal-slider').slick({slidesToShow:3,slidesToScroll:1,infinite:!0,autoplay:!1,autoplaySpeed:2000,speed:500,swipeToSlide:!0,cssEase:'linear',arrows:!1,dots:!0,responsive:[{breakpoint:1195,settings:{slidesToShow:3,slidesToScroll:1,}},{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:1,}},{breakpoint:590,settings:{slidesToShow:2,slidesToScroll:1,dots:!1,}},{breakpoint:500,settings:{slidesToShow:1,slidesToScroll:1,dots:!1,}}]});var btn=$('#backButton');$(window).scroll(function(){var distanceFromBottom=$(document).height()-$(window).scrollTop()-$(window).height();if(distanceFromBottom<1200){btn.addClass('show')}else{btn.removeClass('show')}});btn.on('click',function(e){e.preventDefault();$('html, body').animate({scrollTop:0},1200)});function scrollToLeft(){const scrollContainer=document.querySelector('.nav-pills');scrollContainer.scrollLeft-=2000}

document.addEventListener("DOMContentLoaded", function () { var lazyImages = document.querySelectorAll("img[data-src][loading='lazy']"); var lazyImageObserver = new IntersectionObserver(function (entries, observer) { entries.forEach(function (entry) { if (entry.isIntersecting) { var lazyImage = entry.target; lazyImage.src = lazyImage.dataset.src; lazyImage.alt = lazyImage.dataset.alt; lazyImage.removeAttribute("data-src"); lazyImage.removeAttribute("loading"); lazyImageObserver.unobserve(lazyImage); } }); }); lazyImages.forEach(function (lazyImage) { lazyImageObserver.observe(lazyImage); }); });
