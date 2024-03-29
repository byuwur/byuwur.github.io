(function ($) {
	"use strict"; // Start of use strict
	// Smooth scrolling using jQuery easing
	$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
		if (
			location.pathname.replace(/^\//, "") ==
			this.pathname.replace(/^\//, "") &&
			location.hostname == this.hostname
		) {
			let target = $(this.hash);
			target = target.length
				? target
				: $("[name=" + this.hash.slice(1) + "]");
			if (target.length) {
				$("html, body").animate(
					{
						scrollTop: target.offset().top
					},
					888,
					"easeInOutExpo"
				);
				return false;
			}
		}
	});
	// Closes responsive menu when a scroll trigger link is clicked one second after
	$(".js-scroll-trigger").click(function () {
		setTimeout(function () {
			$(".navbar-collapse").collapse("hide");
		}, 999);
	});
	// Activate scrollspy to add active class to navbar items on scroll
	$("body").scrollspy({
		target: "#sideNav"
	});
})(jQuery); // End of use strict
