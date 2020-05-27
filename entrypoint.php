<?php
include_once('vendor/autoload.php');

$endpoint = getenv('WEBHOOK_URL');
$payload  = [
    'message' => getenv('MESSAGE') ?? "Hello",
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
