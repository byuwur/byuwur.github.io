"use strict";
$(() => {
	let isMobile = {
		Android: function () {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function () {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function () {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function () {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function () {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function () {
			return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
		}
	};
	let fullHeight = function () {
		if (!isMobile.any()) {
			$(".js-fullheight").css("height", $(window).height());
			$(window).resize(function () {
				$(".js-fullheight").css("height", $(window).height());
			});
		}
	};
	let burgerMenu = function () {
		$(".js-mnm-nav-toggle").on("click", function (event) {
			event.preventDefault();
			let $this = $(this);
			if ($("body").hasClass("offcanvas")) {
				$this.removeClass("active");
				$("body").removeClass("offcanvas");
			} else {
				$this.addClass("active");
				$("body").addClass("offcanvas");
			}
		});
	};
	// Click outside of offcanvass
	let mobileMenuOutsideClick = function () {
		$(document).click(function (e) {
			let container = $("#mnm-aside, .js-mnm-nav-toggle");
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if ($("body").hasClass("offcanvas")) {
					$("body").removeClass("offcanvas");
					$(".js-mnm-nav-toggle").removeClass("active");
				}
			}
		});
		$(window).scroll(function () {
			if ($("body").hasClass("offcanvas")) {
				$("body").removeClass("offcanvas");
				$(".js-mnm-nav-toggle").removeClass("active");
			}
		});
	};
	let sliderMain = function () {
		if ($(".mnm-slider").length)
			tns({
				container: ".mnm-slider",
				autoplay: true,
				rewind: true,
				controlsPosition: "bottom",
				controlsText: ["<i class='fas fa-arrow-circle-left'></i>", "<i class='fas fa-arrow-circle-right'></i>"],
				speed: 3000,
				autoplayButtonOutput: false,
				mouseDrag: true,
				lazyload: true,
				items: 1
			});
	};
	// Document on load.
	fullHeight();
	burgerMenu();
	mobileMenuOutsideClick();
	sliderMain();
});
