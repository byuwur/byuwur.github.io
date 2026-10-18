"use strict";
$(() => {
  /**
   * Bind the legacy menu toggle and synchronize its expanded page classes.
   * @returns {void}
   */
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
  /**
   * Close the legacy mobile menu when a click occurs outside it.
   * @returns {void}
   */
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
  /**
   * Initialize the legacy hero slider after its plugin and markup are available.
   * @returns {void}
   */
  const sliderMain = function () {
    if ($(".mnm-slider").length)
      tns({
        container: ".mnm-slider",
        autoplay: true,
        rewind: true,
        controlsPosition: "bottom",
        controlsText: [/* HTML */ `<i class="fas fa-arrow-circle-left"></i>`, /* HTML */ `<i class="fas fa-arrow-circle-right"></i>`],
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
