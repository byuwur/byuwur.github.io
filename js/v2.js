"use strict";
$(() => {
	// Typing text
	if ($("#typed").length)
		new Typed("#typed", {
			typeSpeed: 50,
			backSpeed: 20,
			loop: true,
			strings: ["PHP", "Javascript - Typescript", "Bootstrap - Tailwind", "React - React Native", "MySQL", "Git", "CI/CD", "Java", "Vegas Pro", "Adobe Premiere Pro", "Adobe Photoshop & Lightroom", "Davinci Resolve"]
		});
});
