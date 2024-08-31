"use strict";
// Document on Ready
$(() => {
	if ($("#client-slider-single").length)
		tns({
			container: "#client-slider-single",
			autoplay: true,
			rewind: true,
			nav: false,
			controlsPosition: "bottom",
			controlsText: ["<i class='fas fa-arrow-circle-left'></i>", "<i class='fas fa-arrow-circle-right'></i>"],
			speed: 2000,
			autoplayButtonOutput: false,
			mouseDrag: true,
			lazyload: true,
			responsive: {
				0: {
					items: 1
				},
				1140: {
					items: 2
				}
			}
		});
	if ($("#typed").length)
		new TypeIt("#typed", {
			speed: 100,
			loop: true,
			strings: ["Vegas Pro", "Premiere Pro", "Davinci Resolve", "Photoshop", "Lightroom", "LAMP full-stack", "Java for Android", "Git version control", "SQL databases", "Java", "Unity", "Blender", "After Effects", "Web development", "Mobile development"],
			breakLines: false
		});
	// === NAV ===
	let sidevideo, stack, pages, pagesTotal, current, menuCtrl, nav, navItems;
	function buildStack() {
		let stackPagesIdxs = getStackPagesIdxs();
		// set z-index, opacity, initial transforms to pages and add class page--inactive to all except the current one
		for (let i = 0; i < pagesTotal; ++i) {
			let page = $(pages[i]),
				posIdx = stackPagesIdxs.indexOf(i);
			if (current !== i) {
				page.addClass("page--inactive");
				if (posIdx !== -1) page.css("transform", "translate3d(0,100%,0)");
				else page.css("transform", "translate3d(0,75%, -300px)");
			} else page.removeClass("page--inactive");

			page.css("z-index", i < current ? parseInt(current + 1) : parseInt(pagesTotal + current + 1));
			if (posIdx !== -1) page.css("opacity", parseFloat(1 - 0.1 * posIdx));
			else page.css("opacity", 0);
		}
	}
	// event binding
	function initEvents() {
		// menu button click
		menuCtrl.on("click", toggleMenu);
		// navigation menu clicks
		navItems.forEach(function (item) {
			// which page to open?
			let pageid = item.getAttribute("href").slice(1);
			item.addEventListener("click", function (ev) {
				ev.preventDefault();
				openPage(pageid);
			});
		});
		// clicking on a page when the menu is open triggers the menu to close again and open the clicked page
		pages.forEach(function (page) {
			let pageid = page.getAttribute("id");
			page.addEventListener("click", function (ev) {
				if (isMenuOpen) {
					ev.preventDefault();
					openPage(pageid);
				}
			});
		});
		// keyboard navigation events
		document.addEventListener("keydown", function (ev) {
			if (!isMenuOpen) return;
			let keyCode = ev.keyCode || ev.which;
			if (keyCode === 27) {
				closeMenu();
			}
		});
	}

	function toggleMenu() {
		// If it's already open, show the current page
		if (nav.hasClass("pages-nav--open") || menuCtrl.hasClass("menu-button--open") || stack.hasClass("pages-stack--open")) return openPage();
		// toggle the menu button
		menuCtrl.addClass("menu-button--open");
		// stack gets the class "pages-stack--open" to add the transitions
		stack.addClass("pages-stack--open");
		// reveal the menu
		nav.addClass("pages-nav--open");
		// now set the page transforms
		let stackPagesIdxs = getStackPagesIdxs();
		for (let i = 0, len = stackPagesIdxs.length; i < len; ++i) {
			let page = pages[stackPagesIdxs[i]];
			page.style.WebkitTransform = "translate3d(0, 75%, " + parseInt(-1 * 200 - 50 * i) + "px)"; // -200px, -230px, -260px
			page.style.transform = "translate3d(0, 75%, " + parseInt(-1 * 200 - 50 * i) + "px)";
		}
	}
	// opens a page
	function openPage(id) {
		let futurePage = id ? document.getElementById(id) : pages[current],
			futureCurrent = pages.indexOf(futurePage),
			stackPagesIdxs = getStackPagesIdxs(futureCurrent);
		// set transforms for the new current page
		futurePage.style.WebkitTransform = "translate3d(0, 0, 0)";
		futurePage.style.transform = "translate3d(0, 0, 0)";
		futurePage.style.opacity = 1;
		// set transforms for the other items in the stack
		for (let i = 0, len = stackPagesIdxs.length; i < len; ++i) {
			let page = pages[stackPagesIdxs[i]];
			page.style.WebkitTransform = "translate3d(0,100%,0)";
			page.style.transform = "translate3d(0,100%,0)";
		}
		// set current
		if (id) current = futureCurrent;
		// Close the menu
		menuCtrl.removeClass("menu-button--open");
		nav.removeClass("pages-nav--open");
		futurePage.addEventListener("transitionend", function () {
			stack.removeClass("pages-stack--open");
			buildStack();
			isMenuOpen = false;
		});
	}
	// gets the current stack pages indexes. If any of them is the excludePage then this one is not part of the returned array
	function getStackPagesIdxs(excludePageIdx) {
		let nextStackPageIdx = current + 1 < pagesTotal ? current + 1 : 0,
			nextStackPageIdx_2 = current + 2 < pagesTotal ? current + 2 : 1,
			idxs = [];
		if (excludePageIdx != current) idxs.push(current);
		if (excludePageIdx != nextStackPageIdx) idxs.push(nextStackPageIdx);
		if (excludePageIdx != nextStackPageIdx_2) idxs.push(nextStackPageIdx_2);
		return idxs;
	}
	function init() {
		// side video
		sidevideo = $(".side-video");
		// the pages wrapper
		stack = $(".pages-stack");
		// the page elements
		pages = stack.children().toArray();
		// total number of page elements
		pagesTotal = pages.length;
		// index of current page
		current = 0;
		// menu button
		menuCtrl = $("button.menu-button");
		// the navigation wrapper
		nav = $(".pages-nav");
		// the menu nav items
		navItems = nav.find(".link--page").toArray();
		buildStack();
		initEvents();
	}
	init();
});
