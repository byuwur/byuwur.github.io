(function ($) {
	"use strict";
	let by = {};
	/** Pre Load */
	let loading = document.getElementById("loading");
	by.WebLoad = function () {
		if (loading.style.visibility == "hidden" || loading.style.display == "none") {
			loading.style.visibility = "visible"; loading.style.opacity = "1"; setTimeout(function () { loading.style.display = "block"; }, 1000);
		} else {
			loading.style.visibility = "hidden"; loading.style.opacity = "0"; setTimeout(function () { loading.style.display = "none"; }, 1000);
		}
	};
	/** Owl Slider */
	by.ClientSlider = function () {
		let testimonials_slider = $("#client-slider-single");
		testimonials_slider.owlCarousel({
			loop: true,
			margin: 30,
			nav: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				768: {
					items: 1
				},
				991: {
					items: 1
				},
				1140: {
					items: 2
				}
			}
		});
	};
	/** Owl Slider */
	by.BlogSlider = function () {
		let testimonials_slider = $("#portfolio-slider-single");
		testimonials_slider.owlCarousel({
			loop: true,
			margin: 30,
			nav: false,
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 1
				},
				991: {
					items: 2
				},
				1140: {
					items: 3
				}
			}
		});
	};
	/** Isotope */
	by.MasoNry = function () {
		let portfolioWork = $(".portfolio-content");
		$(portfolioWork).isotope({
			resizable: false,
			itemSelector: ".portfolio-item",
			layoutMode: "masonry",
			filter: "*"
		});
		//Filtering items on portfolio.html
		let portfolioFilter = $(".filter li");
		// filter items on button click
		$(portfolioFilter).on("click", function () {
			let filterValue = $(this).attr("data-filter");
			portfolioWork.isotope({ filter: filterValue });
		});
		//Add/remove class on filter list
		$(portfolioFilter).on("click", function () {
			$(this)
				.addClass("active")
				.siblings()
				.removeClass("active");
		});
	};
	by.PopupVideo = function () {
		$(".popup-video").magnificPopup({
			disableOn: 700,
			type: "iframe",
			mainClass: "mfp-fade",
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	};
	by.LightboxGallery = function () {
		$(".portfolio-col").magnificPopup({
			delegate: ".lightbox-gallery",
			type: "image",
			tLoading: "#%curr%",
			mainClass: "mfp-fade",
			fixedContentPos: true,
			closeBtnInside: true,
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
			}
		});
	};
	by.mTypeIt = function () {
		new TypeIt("#type-it", {
			speed: 100,
			loop: true,
			strings: [
				"Vegas Pro",
				"Premiere Pro",
				"Davinci Resolve",
				"Photoshop",
				"Lightroom",
				"LAMP full-stack",
				"Java for Android",
				"Git version control",
				"SQL databases",
				"Java",
				"Unity",
				"Blender",
				"After Effects",
				"Web development",
				"Mobile development"
			],
			breakLines: false
		});
	};
	// Window on Load
	$(window).on("load", function () {
		by.MasoNry(), by.WebLoad();
	});
	//Document on ready
	$(document).ready(function () {
		by.ClientSlider(),
			by.BlogSlider(),
			by.MasoNry(),
			by.PopupVideo(),
			by.LightboxGallery(),
			by.mTypeIt();
	});
})(jQuery);
