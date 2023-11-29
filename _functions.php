<?php
// This file is always required by ./_config.php but can be required by its own

// --- API functions ---
function api_respond(int $status, bool $error, string $message, array $data = [])
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

function make_http_request(string $url, array $get = [], array $post = [])
{
    $req = curl_init();
    curl_setopt($req, CURLOPT_URL, $url . '?' . http_build_query($get));
    curl_setopt($req, CURLOPT_POST, 1);
    curl_setopt($req, CURLOPT_POSTFIELDS, $post);
    curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
    $requested = curl_exec($req);
    if (curl_errno($req)) echo "<script>console.error('CURL ERROR: " . curl_error($req) . "');</script>";
    curl_close($req);
    return $requested;
}

// --- functions ---
function suppress_errors()
{
    error_reporting(0);
    ini_set('display_errors', 0);
}

function escape_html($input)
{
    $output = htmlspecialchars($input, ENT_QUOTES, 'UTF-8', false);
    return nl2br($output);
}

function exit_json($json)
{
    header('Content-Type: application/json');
    echo json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

function print_json($json)
{
    echo json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function random_string($length)
{
    $string = "";
    $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz";
    for ($i = 0; $i < $length; $i++) $string .= substr($char, rand(0, strlen($char)), 1);
    return $string;
}

function show_modal_back($state = "success", $title = "INFO.", $message = "Message.", $hideCancelBtn = false, $redirect = "javascript:destroy_modal_back();")
{
    echo '<div id="modal_back" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
        <div id="modal_back_container" class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div id="modal_back_title" class="modal-header m-0 fs-5 alert alert-' . $state . '">' . $title . '</div>
                <div id="modal_back_body" class="modal-body text-dark">' . $message . '</div>
                <div class="modal-footer">
                    <a id="modal_back_back" class="btn btn-dark" href="javascript:destroy_modal_back();" onclick="javascript:destroy_modal_back();">CANCEL</a>
                    <a id="modal_back_ok" class="btn btn-success" href="' . $redirect . '">OK</a>
                </div>
            </div>
        </div>
    </div>
    <script>
    "use strict";
    function destroy_modal_back() {
        $("#modal_back").modal("hide");
        setTimeout(() => $("#modal_back").remove(), 999);
    }
    $(document).ready(function () {
        ' . ($hideCancelBtn ? '$("#modal_back_back").addClass("d-none");' : '$("#modal_back_back").removeClass("d-none");') . '
        window.innerWidth < 992 ? $("#modal_back_container").addClass("modal-dialog-centered") : $("#modal_back_container").removeClass("modal-dialog-centered");
        $("#modal_back").modal("show");
    });
    </script>';
}
