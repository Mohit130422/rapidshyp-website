$(document).ready(function () {
    $(".question").hide();
    $('input[type="radio"]').click(function () {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".post_content").not(targetBox).hide();
        $(targetBox).show();
    });

    $(window).scroll(function() {
        $("#act-box").hide()
        $("#box").hide();
        $("#profile-box").hide()
        $(".sidebar").removeClass('openside');
    });

    $("#bell").click(function () {
        $("#box").toggle();
    });
    $(".action-btn").click(function () {
        $("#act-box").toggle()
    });
    $(".profile-pic").click(function () {
        $("#profile-box").toggle()
    });
    $("#close, main").click(function () {
        $("#box").hide();
        $(".sidebar").removeClass('openside');
        $("#act-box").hide();
        $("#profile-box").hide();
        $(".search-area").css({top: "-65%"});
    });
    $(".btnmenu").click(function(){
        $(".sidebar").toggleClass('openside');
    });
    $(".option").click(function(){
        $("#opt-box").toggle();
    });
    $("#option1").click(function(){
        $("#opt-box1").toggle();
    });
    $("#option2").click(function(){
        $("#opt-box2").toggle();
    });
    $("#share-course").click(function(){
        $("#share-box").css("display","flex");
    });
    $("#share-btn").click(function(){
        $("#share-modal").css("display","flex");
    });
    $("#close-share").click(function(){
        $("#share-modal").hide();
    });
    $("#buyNow").click(function(){
        $("#subscription-modal").css("display","flex");
    });
    $("#close-subscription").click(function(){
        $("#subscription-modal").hide();
    });
    $('#book-session').click(function(){
        $("#confirmation-box").css("display","flex");
    });
    $("#btnCloseDone, #btnDone").click(function(){
        $("#confirmation-box").hide();
    });
    $("#vertical-menu").click(function(){
        $(".item-menu").css("display","flex");
    });
    $(".call-end").click(function(){
        $("#confirm-modal").css("display","flex");
    })
    $("#report").click(function(){
        $("#report-modal").css("display","flex");
    })
    $("#message-box").click(function(){
        $(".chat-box").toggle();
    })
    $('#search').click(function () {
        $(".search-area").css({top: "18%"});
    });
    $("#hero-banner").owlCarousel({
        loop: true,
        margin: 16,
        dots: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('#plans-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    $("#trending-banner").owlCarousel({
        loop: true,
        margin: 16,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('#featuredBanner').owlCarousel({
        loop: true,
        margin: 16,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
    $('#recommended-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    $('#trending-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    $('#guideline-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    $('#products-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    $('#teachers-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    $('#members-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    $('#instructor-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        lazyLoad:true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

});