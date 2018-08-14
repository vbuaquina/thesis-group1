<?php

if ( isset( $_POST['submit'] ) ) {
	$image_url = $_POST['url'];
}

$api_credentials = array(
	'key' => 'acc_14f6ea2b571ff3a',
	'secret' => 'b88b11e0ac3421766583f09fc2a5b1f6'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.imagga.com/v1/tagging?url='.$image_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_USERPWD, $api_credentials['key'].':'.$api_credentials['secret']);

$response = curl_exec($ch);
curl_close($ch);

// $json_response = json_decode($response);
// var_dump($json_response);

echo "<pre>" . json_encode(json_decode($response), JSON_PRETTY_PRINT) . "</pre>";