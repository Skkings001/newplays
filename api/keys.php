<?php

$apikey = "babel-9064ba5b81f8d0ef20d14868c8343a65"; // get your own apiKey from " https://babel-in.xyz "

$id = $_GET['id'] ?? exit("Error: ID not provided.");
$api = "https://babel-in.xyz/$apikey/tata/key/$id";
$userAgent = 'Babel-IN'; // u can change if u wanna
$serverIP = @file_get_contents('https://api.ipify.org');

function fetchMPDManifest($url, $userAgent, $userIP) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'User-Agent: ' . $userAgent,
        'X-Forwarded-For: ' . $userIP,
    ]);
    $manifestContent = curl_exec($curl);
    if ($manifestContent === false) return null;
    curl_close($curl);
    return $manifestContent;
}

$json = fetchMPDManifest($api, $userAgent, $serverIP);
$data = json_decode($json, true);
$keyPart = $data['key'];
$keys = json_encode($keyPart, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

echo $keys;
