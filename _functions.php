<?php
// This file is always required by ./_config.php

// --- API functions ---
function api_respond($status, $error, $message, $data = null)
{
    header('Content-Type: application/json');
    $response = new stdClass();
    $response->status = $status;
    $response->error = $error;
    $response->message = $message;
    $response->data = $data;
    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

// --- functions ---
function suppressErrors()
{
    error_reporting(0);
    ini_set('display_errors', 0);
}

function escape2html($input)
{
    $output = htmlspecialchars($input, ENT_QUOTES, 'UTF-8', false);
    return nl2br($output);
}

function randomString($length)
{
    $string = "";
    $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz";
    for ($i = 0; $i < $length; $i++) $string .= substr($char, rand(0, strlen($char)), 1);
    return $string;
}

function showModal($state = "success", $title = "INFO.", $message = "Message.", $redirect = "javascript:;", $hideCancelBtn = false)
{
    echo '<div id="modal_back" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
        <div id="modal_back_container" class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div id="modal_back_title" class="modal-header m-0 fs-5 alert alert-' . $state . '">' . $title . '</div>
                <div id="modal_back_body" class="modal-body">' . $message . '</div>
                <div class="modal-footer">
                    <a id="modal_back_back" href="javascript:$(\'#modal_back\').modal(\'hide\');" onclick="$(\'#modal_back\').modal(\'hide\')" class="btn btn-dark">Cerrar</a>
                    <a id="modal_back_ok" href="' . $redirect . '" class="btn btn-success">Entendido</a>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function () {
        "use strict";
        setTimeout(() => {
            ' . ($hideCancelBtn ? '$("#modal_back_back").addClass("d-none");' : '$("#modal_back_back").removeClass("d-none");') . '
            window.innerWidth < 992 ? $("#modal_back_container").addClass("modal-dialog-centered") : $("#modal_back_container").removeClass("modal-dialog-centered");
            $("#modal_back").modal("show");
        }, 999);
    });
    </script>';
}
