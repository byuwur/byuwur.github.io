<?php
// First-party usage increments. No session, visitor identifiers or per-request application log.
declare(strict_types=1);

header('Cache-Control: no-store');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Allow: POST');
  http_response_code(405);
  exit;
}

$sites = [
  'https://byuwur.co' => 'portfolio',
  'https://www.byuwur.co' => 'portfolio',
  'https://stream.byuwur.co' => 'stream_html',
  'https://controller.byuwur.co' => 'stream_html',
  'https://fgc.byuwur.co' => 'stream_fgc',
  'https://code.byuwur.co' => 'code_view',
  'https://csv.byuwur.co' => 'csv_view',
  'https://diff.byuwur.co' => 'diff_view',
  'https://json.byuwur.co' => 'json_view',
  'https://log.byuwur.co' => 'log_view',
  'https://mdedit.byuwur.co' => 'md_edit',
  'https://md.byuwur.co' => 'md_view',
  'https://xml.byuwur.co' => 'xml_view',
  'https://yaml.byuwur.co' => 'yaml_view',
];
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
// A no-referrer POST from the collector's own origin can have an opaque Origin.
if (($origin === '' || $origin === 'null') && ($_SERVER['HTTP_SEC_FETCH_SITE'] ?? '') === 'same-origin' && ($_SERVER['HTTP_HOST'] ?? '') === 'byuwur.co') {
  $origin = 'https://byuwur.co';
}
if (!isset($sites[$origin])) {
  http_response_code(403);
  exit;
}
header('Vary: Origin');
header('Access-Control-Allow-Origin: ' . $origin);

$actions = [
  'page_view',
  'configuration_changed',
  'resource_selected',
  'resource_loaded',
  'content_processed',
  'resource_exported',
  'resource_copied',
  'open_project',
  'open_github',
  'open_community',
  'open_contact',
  'download_cv'
];
$surfaces = ['privacy', 'landing', 'documentation', 'playground', 'configurator'];
$resources = array_merge(array_values($sites), array_map(static fn($id) => 'project_' . $id, array_values($sites)), [
  'github_repository',
  'github_documentation',
  'github_release',
  'github_profile',
  'discord',
  'contact_email',
  'meeting',
  'cv_pdf',
  'catalog',
  'controller',
  'keyboard',
  'popup',
  'main',
  'clock',
  'timer',
  'webcam',
  'ticker',
  'watermark',
  'lower-thirds',
  'qr',
  'reminder',
  'badge',
  'credits',
  'schedule',
  'sponsors',
  'info',
  'effects',
  'hud',
  'timeline',
  'randomizer',
  'quotes',
  'shortcuts',
  'now-playing',
  'chat',
  'counter',
]);
$parts = explode('|', file_get_contents('php://input', false, null, 0, 128));
if (($_SERVER['QUERY_STRING'] ?? '') !== '' || count($parts) !== 3
  || !in_array($parts[0], $actions, true) || !in_array($parts[1], $surfaces, true) || !in_array($parts[2], $resources, true)
) {
  http_response_code(400);
  exit;
}

$TO_HOME = __DIR__;
try {
  require_once "{$TO_HOME}/_plugins.php";
} catch (Dotenv\Exception\ExceptionInterface) {
  http_response_code(503);
  exit;
}
$secret = $_ENV['GOOGLE_ANALYTICS_4_API_KEY'] ?? $_SERVER['GOOGLE_ANALYTICS_4_API_KEY'] ?? getenv('GOOGLE_ANALYTICS_4_API_KEY');
if (!$secret || !function_exists('curl_init')) {
  http_response_code(503);
  exit;
}
// GA4 requires a client_id. This resettable ID represents the reporting service across all projects.
$reporter = hexdec(substr(hash_hmac('sha256', 'byuwur-usage-reporter', $secret), 0, 7)) . '.1';
// Set by the host's GeoIP module for the connection. Never trust a country supplied by an HTTP client.
$country = $_SERVER['GEOIP_COUNTRY_CODE'] ?? '';
$params = [
  'project' => $sites[$origin],
  'action' => $parts[0],
  'surface' => $parts[1],
  'resource' => $parts[2],
  'usage_country' => preg_match('/^[A-Z]{2}$/D', $country) && !in_array($country, ['XX', 'ZZ', 'EU', 'AP'], true) ? $country : 'unknown'
];
$payload = [
  'client_id' => $reporter,
  'consent' => ['ad_user_data' => 'DENIED', 'ad_personalization' => 'DENIED'],
  'events' => [['name' => 'usage_count', 'params' => $params]],
];
$request = curl_init('https://www.google-analytics.com/mp/collect?measurement_id=G-YBLWBPK758&api_secret=' . rawurlencode($secret));
curl_setopt_array($request, [
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => json_encode($payload, JSON_THROW_ON_ERROR),
  CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
  CURLOPT_CONNECTTIMEOUT => 2,
  CURLOPT_TIMEOUT => 4,
  CURLOPT_RETURNTRANSFER => true,
]);
$result = curl_exec($request);
$status = curl_getinfo($request, CURLINFO_HTTP_CODE);
http_response_code($result !== false && $status >= 200 && $status < 300 ? 204 : 502);
