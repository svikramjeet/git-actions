<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$endpoint = getenv('WEBHOOK_URL');
$payload  = [
    'text' => getenv('TEXT') ?? "Hello",
    'channel' => getenv('CHANNEL') ?? "general",
    'username' => getenv('USERNAME') ?? "svikramjeet",
    'icon_url' => getenv('ICON') ?? ':ghost:'
];

$encoded = json_encode($payload, JSON_UNESCAPED_UNICODE);

    if ($encoded === false) {
        throw new RuntimeException(sprintf('JSON encoding error %s: %s', json_last_error(), json_last_error_msg()));
    }

$guzzle = new GuzzleHttp\Client();
$guzzle->post($endpoint, ['body' => $encoded]);
