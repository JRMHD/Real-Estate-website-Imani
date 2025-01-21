(function ($) {
	"use strict";

/*=============================================
	=    		 Preloader			      =
=============================================*/
function preloader() {
	$('#preloader').delay(0).fadeOut();
};

$(window).on('load', function () {
	preloader();
	mainSlider();
	wowAnimation();
});


/*=============================================
	=          Click To Section     =
=============================================*/
$(document).ready(function () {
	$("html").css('scroll-behavior', 'auto');
});
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
	$('a.section-link[href*="#"]:not([href="#"])').on('click', function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: (target.offset().top - 80)
				}, 1200, "easeInOutExpo");
				return false;
			}
		}
	});
});


/*=============================================
	=    		Mobile Menu			      =
=============================================*/
//SubMenu Dropdown Toggle
if ($('.menu-area li.menu-item-has-children ul').length) {
	$('.menu-area .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

}

//Mobile Nav Hide Show
if ($('.mobile-menu').length) {

	var mobileMenuContent = $('.menu-area .main-menu').html();
	$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

	//Dropdown Button
	$('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function () {
		$(this).toggleClass('open');
		$(this).prev('ul').slideToggle(300);
	});
	//Menu Toggle Btn
	$('.mobile-nav-toggler').on('click', function () {
		$('body').addClass('mobile-menu-visible');
	});

	//Menu Toggle Btn
	$('.menu-backdrop, .mobile-menu .close-btn').on('click', function () {
		$('body').removeClass('mobile-menu-visible');
	});
}



/*=============================================
	=     Menu sticky & Scroll to top      =
=============================================*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#sticky-header").removeClass("sticky-menu");
        $('.scroll-to-target').removeClass('open');
		$("#header-fixed-height").removeClass("active-height");

	} else {
		$("#sticky-header").addClass("sticky-menu");
        $('.scroll-to-target').addClass('open');
		$("#header-fixed-height").addClass("active-height");
	}
});


/*=============================================
	=    		 Scroll Up  	         =
=============================================*/
if ($('.scroll-to-target, .section-link-two').length) {
  $(".scroll-to-target, .section-link-two").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
}


/*=============================================
	=          Data Background               =
=============================================*/
$("[data-background]").each(function () {
	$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
})


/*=============================================
	=    		 Main Slider		      =
=============================================*/
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: true,
		fade: true,
		arrows: false,
		responsive: [
			{ breakpoint: 767,
                settings: {
                    dots: false,
                    arrows: false
                }
            }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}


/*=============================================
	=    		 Jarallax Active  	         =
=============================================*/
$('.jarallax').jarallax({
    speed: 0.2,
});


/*=============================================
	=    		Brand Active		      =
=============================================*/
$('.brand-active').slick({
	dots: false,
	infinite: true,
	speed: 500,
	autoplay: true,
	arrows: false,
	slidesToShow: 6,
	slidesToScroll: 2,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});



/*=============================================
	=         banner Active           =
=============================================*/
$('.bannerContent-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.bannerNav-active',
}).slickAnimation();

const bannerSlider = $(".bannerNav-active");
$('.bannerNav-active').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.bannerContent-active',
    dots: false,
    focusOnSelect: true,
    arrows: false,
    speed: 600,
    responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});
bannerSlider.on('wheel', (function (e) {
	e.preventDefault();

	if (e.originalEvent.deltaY < 0) {
		$(this).slick('slickPrev');
	} else {
		$(this).slick('slickNext');
	}
}));


/*=============================================
	=         Courses Active           =
=============================================*/
if (jQuery(".roadmap-active").length > 0) {
	let courses = new Swiper(".roadmap-active", {
		slidesPerView: 1,
		spaceBetween: 24,
		centeredSlides: true,
		loop: true,
		autoplay: false,
		breakpoints: {
			500: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 24,
			},
			992: {
				slidesPerView: 2.5,
				spaceBetween: 24,
			},
			1200: {
				slidesPerView: 3.5,
				spaceBetween: 24,
			},
			1500: {
				slidesPerView: 4.3,
				spaceBetween: 24,
			},
		},
		// If we need pagination
		pagination: {
			el: ".courses-swiper-pagination",
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		// And if we need scrollbar
		scrollbar: {
			el: ".swiper-scrollbar",
		},
	});
}


/*=============================================
	=         project Active           =
=============================================*/
if (jQuery(".project-active").length > 0) {
	let courses = new Swiper(".project-active", {
		slidesPerView: 1,
		spaceBetween: 24,
		loop: true,
		autoplay: false,
		breakpoints: {
			500: {
				slidesPerView: 1,
				spaceBetween: 24,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 24,
			},
			992: {
				slidesPerView: 2,
				spaceBetween: 24,
			},
			1200: {
				slidesPerView: 2,
				spaceBetween: 24,
			},
			1500: {
				slidesPerView: 2,
				spaceBetween: 24,
			},
		},
		// If we need pagination
		pagination: {
			el: ".courses-swiper-pagination",
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		// And if we need scrollbar
		scrollbar: {
			el: ".swiper-scrollbar",
		},
	});
}



/*=============================================
	=         gallery-active           =
=============================================*/
$('.gallery-active').slick({
	centerMode: true,
	autoplay: true,
	infinite: true,
	speed: 500,
	centerPadding: '0',
	arrows: false,
	slidesToShow: 1,
	responsive: [
		{
			breakpoint: 1800,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				centerPadding: '24px',
			}
		},
		{
			breakpoint: 1500,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				centerPadding: '30px',
				infinite: true,
			}
		},
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				centerPadding: '50px',
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				centerPadding: '0',
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				centerPadding: '0px',
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				centerPadding: '0px',
				arrows: false,
			}
		},
	]
});


/*=============================================
	=     Side Menu Active  	       =
=============================================*/
$('.sideMenu-toggle').on('click', function () {
    $('body').addClass('side-menu-visible');
    return false
});

//Menu Backdrop
$('.sidebar-backdrop').on('click', function () {
    $('body').removeClass('side-menu-visible');
});


/*=============================================
	=     OffNav Menu Active  	       =
=============================================*/
//Menu Toggle Btn
$('.burger-menu').on('click', function (e) {
    $(this).toggleClass('active');
    e.preventDefault();
    if ($('body').hasClass('burger-menu-visible')) {
        setTimeout(function () {
            $('body').removeClass('burger-menu-visible');
        }, 900);
    } else {
        $('body').addClass('burger-menu-visible');
    }
});

//Menu Toggle Btn
$('.tgCanvas-backdrop').on('click', function () {
    $('.burger-menu').removeClass('active');
    setTimeout(function () {
        $('body').removeClass('burger-menu-visible');
    }, 900);
});

//SubMenu Dropdown Toggle
if ($('.tgCanvas-menu li.menu-item-has-children').length) {
	$('.tgCanvas-menu li.menu-item-has-children').append('<i class="dropdown-icon"></i>');
}
$(".tgCanvas-menu .dropdown-icon").on('click', function() {
    var $tgMenu = $(this);
    $(this).parent().siblings().find('.sub-menu').slideUp();
    $tgMenu.prev(".sub-menu").slideToggle();
});

// Menu Animation
$('.burger-menu, .tgCanvas-backdrop').on('click', function (e) {
    var $this = $(this);
    e.preventDefault();
    if ($('body').hasClass('menu-open')) {
        $this.removeClass('active');
        $('.tgCanvas-menu ul.navigation > li').each(function (i) {
            var that = $(this);
            setTimeout(function () {
                that.removeClass('is-show');
            }, i * 100);
        });
        setTimeout(function () {
            $('.side-menu-wrapper').removeClass('side-menu-show');
        }, 800);
        $('body').removeClass('menu-open');
    }
    else {
        $('.side-menu-wrapper').addClass('side-menu-show');
        $this.addClass('active');
        $('body').addClass('menu-open');
        setTimeout(function () {
            $('.tgCanvas-menu ul.navigation > li').each(function (i) {
                var that = $(this);
                setTimeout(function () {
                    that.addClass('is-show');
                }, i * 100);
            });
        }, 500);
    }
});


/*=============================================
	=    		Tab Hover Active     =
=============================================*/
$('.services-list li').on('mouseover', function(){
    var li =$(this),
        ul = li.parent(),
        wrap = li.closest('.services-list'),
        tab_content = $('.services-img-two', wrap),
        current_index = li.index();
    ul
        .find('li')
        .removeClass('active');
    li
        .addClass('active');
    tab_content
        .find( ".tab-pane" )
        .removeClass('active')
        .eq( current_index )
        .addClass('active');
})
.on('mouseout', function(){
    var li =$(this);
    var li =$(this),
        ul = li.parent(),
        wrap = li.closest('.nav-tab-wrap'),
        tab_content = $('.tab-content', wrap),
        current_index = li.index();
        if(ul.find('li.active').length > 1){
            li.removeClass('active');
        }
        if(tab_content.find('.tab-pan.active').length > 1){
            tab_content
                .find( ".tab-pane" )
                .eq( current_index )
                .removeClass('active');
        }
});


/*=============================================
	=    		Odometer Active  	       =
=============================================*/
$('.odometer').appear(function (e) {
	var odo = $(".odometer");
	odo.each(function () {
		var countNumber = $(this).attr("data-count");
		$(this).html(countNumber);
	});
});


/*=============================================
	=    		Magnific Popup		      =
=============================================*/
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
		enabled: true
	}
});
/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});


/*=============================================
	=    		 Wow Active  	         =
=============================================*/
function wowAnimation() {
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: false,
		live: true
	});
	wow.init();
}


})(jQuery);