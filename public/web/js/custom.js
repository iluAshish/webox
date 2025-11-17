const header = document.querySelector(".main-nav");
            const toggleClass = "is-sticky";

            window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 150) {
                header.classList.add(toggleClass);
            } else {
                header.classList.remove(toggleClass);
            }
            });

// active menu
    const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
              }
        });
// for rating
// const starEls = document.querySelectorAll(".star.rating");
// starEls.forEach((star) => {
//     star.addEventListener("click", function (e) {
//         let starEl = e.currentTarget;
//         console.log(starEl.parentNode.dataset.stars + ", " + starEl.dataset.rating);
//         starEl.parentNode.setAttribute("data-stars", starEl.dataset.rating);
//     });
// }); 
//  $(document).ready(function() {
//         $(".rating").starRating({
//             starSize: 18,
//             initialRating: 5,
//           readOnly: true, 
//             useFullStars: true,
//         });
//     });
// form validation

function LoadMoreData() {
    var type=$('#type').val();
    var total = $('#total').val();
    var offset = $('#loading_offset').val();
    var loading_limit = $('#loading_limit').val();


    var btnHtml = $('.load-more-button').html();
    $('.load-more-button').html('Load More');
    $.ajax({
        type: 'GET',
        data: {type:type,total: total, offset: offset,loading_limit:loading_limit},
        url:  'https://pentacodesdemos.com/dhabicart/testing/load-more',
        success: function (response) {
            if (response != 0) {
                $('.appendHere_' + offset).after(response).remove();
                $('.more-section-' + offset).remove();
                $('.load-more-button').html(btnHtml);
            } else {
                swal.fire({
                    title: 'Error', text: 'Some error occurred', icon: 'error'
                });
            }
        }
    });
}

$(window).scroll(function () {
    //console.log('adsfds');
    $(".load-more-portfolio-button").each(function () {
         var portfolio_id=$(this).data('id');
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = $(this).offset().top;
        var ElementBottom = ElementTop + $(this).height();
        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop){
            portfolioLoadMoreData(portfolio_id);
        }
    });
    $(".load-more-services-button").each(function () {
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = $(this).offset().top;
        var ElementBottom = ElementTop + $(this).height();
        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop){
            servicesLoadMoreData();
        }
    });
    
    $(".load-more-container-button").each(function () {
        var cat_id=$(this).data('category_id');
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = $(this).offset().top;
        var ElementBottom = ElementTop + $(this).height();
        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop){
            containerLoadMoreData(cat_id);
        }
    });
    $(".more-load").each(function () {
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = $(this).offset().top;
        var ElementBottom = ElementTop + $(this).height();
        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop){
            CategoryLoadMoreData();
        }
    });
    $(".single-more-load").each(function () {
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = $(this).offset().top;
        var ElementBottom = ElementTop + $(this).height();
        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop){
            SingleCategoryProductsLoadMoreData();
        }
    });
    $(".blog-load").each(function () {
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = $(this).offset().top;
        var ElementBottom = ElementTop + $(this).height();
        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop){
            BlogsLoadMoreData();
        }
    });
})
function containerLoadMoreData(cat_id) {
    var category_id = cat_id;
    var total = $('.container_'+category_id+'_total').val();
    var offset = $('.container_'+category_id+'_offset').val();
    
    var limit = $('.container_'+category_id+'_limit').val();

    var btnHtml = $('.container_'+category_id+'_load-more-container-button').html();
    
    $('.container_'+category_id+'_load-more-container-button').html('Load More');
    $.ajax({
        type: 'POST',
        data: { 
            offset: offset,
            limit:limit,
            category_id:category_id,
            total:total
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: base_url+'/container-load-more',
        success: function (response) {
            console.log(response);
            if (response !== 0) {
                //  $('.appendHere_' + offset).after(response).remove();
                // $('.more-section-' + offset).remove();
                // $('.load-more-container-button').html(btnHtml);
                    $('.container_'+category_id+'_appendHere_' + offset).after(response).remove();
                    $('.container_'+category_id+'_more-section-' + offset).remove();
                    $('.container_'+category_id+'_load-more-container-button').html(btnHtml);
            } else {
                swal.fire({
                    title: 'Error', text: 'Some error occurred', icon: 'error'
                });
            }
        }
    });
}
function servicesLoadMoreData() {
    var totalServices = $('#totalBlog').val();
    var Offset = $('#blog_loading_offset').val();
    var loadingLimit = $('#blog_loading_limit').val();

    var btnHtml = $('.load-more-services-button').html();
    
    $('.load-more-services-button').html('Load More');
    $.ajax({
        type: 'POST',
        data: { offset: Offset,loading_limit:loadingLimit,total_services:totalServices},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: base_url+'/service-load-more',
        success: function (response) {
            //console.log(response);
            if (response !== 0) {
                    $('.appendHere_' + Offset).after(response).remove();
                    $('.more-section-' + Offset).remove();
                    $('.load-more-services-button').html(btnHtml);
            } else {
                swal.fire({
                    title: 'Error', text: 'Some error occurred', icon: 'error'
                });
            }
        }
    });
}

function BlogsLoadMoreData() {
    var totalBlog = $('#totalBlog').val();
    var offset = $('#blog_loading_offset').val();
    var loading_limit = $('#blog_loading_limit').val();

    var btnHtml = $('.blog-load').html();
    // console.log(totalBlog,offset);

    if(totalBlog !== offset){
        $('.blog-load').html('Load More');
        $.ajax({
            type: 'POST',
            data: { offset: offset,loading_limit:loading_limit},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: base_url+'/blog-load-more',
            success: function (response) {
                //console.log(response);
                if (response !== 0) {
                        $('.appendHere_' + offset).after(response).remove();
                        $('.more-section-' + offset).remove();
                        $('.blog-load').html(btnHtml);

                    if (offset !== totalBlog) {
                        $('.blog-load').html('');
                    }

                } else {
                    swal.fire({
                        title: 'Error', text: 'Some error occurred', icon: 'error'
                    });
                }
            }
        });
    }
}

function SingleCategoryProductsLoadMoreData() {
    var total_product = $('#totalProduct').val();
    var offset = $('#product_loading_offset').val();
    var loading_limit = $('#product_loading_limit').val();
    var category_id = $('#category_id').val();

    var btnHtml = $('.single-more-load').html();
    // console.log(total_portfolio,offset);

    if(total_product !== offset){
        $('.load-more-services-button').html('Load More');
        $.ajax({
            type: 'POST',
            data: { offset: offset,loading_limit:loading_limit,category_id:category_id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: base_url+'/product-load-more',
            success: function (response) {
                //console.log(response);
                if (response !== 0) {
                        $('.appendHere_' + offset).after(response).remove();
                        $('.more-section-' + offset).remove();
                        $('.single-more-load').html(btnHtml);

                    if (offset !== total_product) {
                        $('.single-more-load').html('');
                    }

                } else {
                    swal.fire({
                        title: 'Error', text: 'Some error occurred', icon: 'error'
                    });
                }
            }
        });
    }
}
function CategoryLoadMoreData() {
    var count = $('#count').val();
    var total_portfolio = $('#totalCategory').val();
    var offset = $('#category_loading_offset').val();
    var loading_limit = $('#category_loading_limit').val();

    var btnHtml = $('.more-load').html();
    // console.log(total_portfolio,offset);

    if(total_portfolio !== offset){
        $('.load-more-services-button').html('Load More');
        $.ajax({
            type: 'POST',
            data: { offset: offset,loading_limit:loading_limit,count:count},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: base_url+'/category-load-more',
            success: function (response) {
                console.log(response);
                if (response !== 0) {
                        $('.appendHere_' + offset).after(response).remove();
                        $('.more-section-' + offset).remove();
                        $('.more-load').html(btnHtml);

                    if (offset !== total_portfolio) {
                        $('.more-load').html('');
                    }

                } else {
                    swal.fire({
                        title: 'Error', text: 'Some error occurred', icon: 'error'
                    });
                }
            }
        });
    }
}

function portfolioLoadMoreData(portfolio_id) {
    var total_portfolio = $('.totalPortfolio_' + portfolio_id).val();
    var offset = $('.portfolio_loading_offset_' + portfolio_id).val();
    var loading_limit = $('.portfolio_loading_limit_' + portfolio_id).val();

    var btnHtml = $('.load-more-portfolio-button').html();

    // console.log(loading_limit,offset,total_portfolio);
    if(total_portfolio !== offset){
        $('.load-more-portfolio-button').html('Load More');
        $.ajax({
            type: 'POST',
            data: {
                total_portfolios: total_portfolio, 
                offset: offset,
                loading_limit:loading_limit,
                portfolio_id:portfolio_id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: base_url+'/portfolio-load-more',
            success: function (response) {
                //console.log(response);
                if (response !== 0) {
                        $('.appendHere_' + portfolio_id + '_' + offset).after(response).remove();
                        $('.more-section-' + portfolio_id + '-' + offset).remove();
                        $('.load-more-portfolio-button').html(btnHtml);

                    // if (offset !== total_portfolio) {
                    //     $('.load-more-portfolio-button').html('');
                    // }

                } else {
                    swal.fire({
                        title: 'Error', text: 'Some error occurred', icon: 'error'
                    });
                }
            }
        });
    }
}
