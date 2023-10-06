"use strict";

function showModal($state = "success", $title = "INFO.", $message = "Message.", $redirect = "javascript:;", $hideCancelBtn = false) {
    $hideCancelBtn ? $("#modal_front_back").addClass("d-none") : $("#modal_front_back").removeClass("d-none");
    window.innerWidth < 992 ? $("#modal_front_container").addClass("modal-dialog-centered") : $("#modal_front_container").removeClass("modal-dialog-centered");
    $("#modal_front_title").removeAttr("class");
    $("#modal_front_title").addClass("modal-header m-0 fs-5 alert alert-" + $state);
    $("#modal_front_ok").attr("href", $redirect);
    $("#modal_front_title").html($title);
    $("#modal_front_body").html($message);
    $("#modal_front").modal("show");
}