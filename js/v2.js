"use strict";
$(() => {
  // Typing text
  if ($("#typed").length) {
    let strings = [];
    try {
      strings = JSON.parse($("#typed").attr("data-strings") || "[]");
      if (!Array.isArray(strings) || !strings.length) strings = [];
    } catch {}
    new Typed("#typed", {
      typeSpeed: 25,
      backSpeed: 10,
      loop: true,
      strings
    });
  }
});
