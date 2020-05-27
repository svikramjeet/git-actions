<?php

$endpoint = getenv('WEBHOOK_URL');

$payload  = [
    'message' => getenv('MESSAGE') ?? "Hello",
    'channel' => getenv('CHANNEL') ?? "general",
    'username' => getenv('USERNAME') ?? "svikramjeet",
    'icon_url' => getenv('ICON') ?? ':ghost:'
];

$data = "payload=" . json_encode($payload);

curl_setopt_array($curl, array(
    CURLOPT_URL => $endpoint,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/x-www-form-urlencoded"
    ),
));

$response = curl_exec($curl);

curl_close($curl);

echo $response;
