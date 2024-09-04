"use strict";
$(() => {
	// Typing text
	if ($("#typed").length)
		new TypeIt("#typed", {
			speed: 100,
			loop: true,
			strings: ["Vegas Pro", "Premiere Pro", "Davinci Resolve", "Photoshop", "Lightroom", "LAMP full-stack", "Java for Android", "Git version control", "SQL databases", "Java", "Unity", "Blender", "After Effects", "Web development", "Mobile development"],
			breakLines: false
		});
	// Section scroll on non-scrollable body
	$("section").each(function () {
		$(this)
			.off("mousewheel")
			.on("mousewheel", function (e) {
				const delta = e.originalEvent.deltaY;
				const scrollSum = $(this).scrollTop() + $(this).innerHeight();
				if (delta > 0) {
					if (scrollSum < this.scrollHeight) return;
					const nextSection = $(this).next("section");
					if (!$(nextSection).length) return;
					$(`html, body, ${byCommon.APP_CONTAINER_SELECTOR ?? ""}`)
						.stop()
						.animate({ scrollTop: nextSection.offset().top - 1 }, 990, "easeInOutExpo");
				} else if (delta < 0) {
					if (scrollSum > $(this).innerHeight()) return;
					const prevSection = $(this).prev("section");
					if (!$(prevSection).length) return;
					$(`html, body, ${byCommon.APP_CONTAINER_SELECTOR ?? ""}`)
						.stop()
						.animate({ scrollTop: prevSection.offset().top - 1 }, 990, "easeInOutExpo");
				}
			});
	});
});
