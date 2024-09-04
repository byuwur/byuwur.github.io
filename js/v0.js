"use strict";
$(() => {
	const burgerMenu = function () {
		$(".js-mnm-nav-toggle").on("click", function (event) {
			event.preventDefault();
			const $this = $(this);
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
	const mobileMenuOutsideClick = function () {
		$(document).click(function (e) {
			const container = $("#mnm-aside, .js-mnm-nav-toggle");
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
	const sliderMain = function () {
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
	burgerMenu();
	mobileMenuOutsideClick();
	sliderMain();
});
