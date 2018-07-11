'use strict';
/* global window: false */
/* global document: false */
/* global screen: false */
var app = {};

/**
 * Detect user device
 * @returns {*}
 */
function getMobileOperatingSystem() {
	var userAgent = navigator.userAgent || navigator.vendor || window.opera;

	// Windows Phone must come first because its UA also contains "Android"
	if (/windows phone/i.test(userAgent)) {
		return 'Windows Phone';
	}

	if (/android/i.test(userAgent)) {
		return 'Android';
	}

	// iOS detection from: http://stackoverflow.com/a/9039885/177710
	if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
		return 'iOS';
	}

	return 'unknown';
}

app.ui = {
	disableDragging: function () {
		$('img, a').on('dragstart', function (event) {
			event.preventDefault();
		});
	},

	setHeroSliderHeight: function () {
		$('#js-hero-slider').css('height', $(window).outerHeight() - $('#js-header').outerHeight() + 'px');
	},
	// heroSliderInit: function() {
	// 	$('#js-hero-slider').slick({
	// 		slidesToShow: 1,
	// 		slidesToScroll: 1,
	// 		arrows: false,
	// 		dots: false,
	// 		infinite: true,
	// 		fade: true,
	// 		autoplay: true,
	// 		autoplaySpeed: 3000,
	// 		focusOnSelect: false,
	// 		accessibility: true,
	// 		draggable: false,
	// 		mobileFirst: true,
	// 		pauseOnFocus: false,
	// 		pauseOnHover: false,
	// 		edgeFriction: 0
	// 	});
	// },
	sidebarBg: function () {
		var windowWidth = $(window).outerWidth();
		var containerWidth = $('.o-container').outerWidth();
		var sidebarBgWidth = ((windowWidth - containerWidth) / 2) + 1;
		$('#js-sidebar-bg').css('width', sidebarBgWidth + 'px');
	},

	burgerMenu: function () {
		$(".burger__menu").click(function (event) {
			$(this).toggleClass('open');
			$('.navigation').toggleClass('open');
			return false;

		});
	},
	progressMenu: function () {
		$(".progress-bar").loading();
	},

	fixedMenu: function () {
		var heroPaddingTop = $(".hero").css("paddingTop").slice(0, -2);
		$(window).scroll(function () {
			if ($(this).scrollTop() > heroPaddingTop) {
				$(".js-hero__header").addClass("sticky");
			} else {
				$(".js-hero__header").removeClass("sticky");
			};
		});
	},

	initPotfolio: function () {
		$(function () {
			var selectedClass = "";
			$(".fil-cat").click(function () {
				selectedClass = $(this).attr("data-rel");
				$('.fil-cat').removeClass('active');
				$(this).addClass("active");
				$(".js-portfolio").fadeTo(100, 0.1);
				$(".js-portfolio .portfolio__item").not("." + selectedClass).fadeOut().removeClass('scale-anm');
				setTimeout(function () {
					$("." + selectedClass).fadeIn().addClass('scale-anm');
					$(".js-portfolio").fadeTo(300, 1);
				}, 300);

			});
		});
	},

	initSliderReviews: function () {
		var slider = $('.js-reviews-slider');
		if (slider.length) {
			if (($(window).outerWidth() <= 768) && !slider.hasClass('slick-initialized')) {
				slider.slick({
					infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
				{
					breakpoint: 769,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						dots: true
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
				});
			} else {
				if (slider.hasClass('slick-initialized')) {
					slider.slick('unslick');
				}
			};
		}
	},

	initSlider: function () {
		$('.js-row-slider').slick({
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						infinite: true,
						dots: true

					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						dots: true
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						dots: true
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});
	}
	// modal: function() {
	// 	$( 'a[data-modal]' ).click( function( event ) {
	// 		$( this ).modal( {showClose: false, fadeDuration: 250, fadeDelay: 0} );
	// 		return false;
	// 	} );
	// },
};

$(function () {
	// UI
	// app.ui.modal();
	app.ui.disableDragging();
	app.ui.setHeroSliderHeight();
	app.ui.burgerMenu();
	app.ui.initSlider();
	app.ui.progressMenu();
	app.ui.initSliderReviews();
	app.ui.initPotfolio();
	app.ui.fixedMenu();
	// app.ui.heroSliderInit();
	// app.ui.sidebarBg();
});

$(window).on('resize', function () {
	app.ui.setHeroSliderHeight();
	app.ui.sidebarBg();
});

$(window).on('orientationchange', function () {

});
