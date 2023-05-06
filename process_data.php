<?php

// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$url = "https://api.covid19api.com/summary";

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);

// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

// Decode JSON into PHP array
$response_data = (array) json_decode($curl_data);

// Split the data
$countries_data = $response_data['Countries'];
$global_data = $response_data['Global'];
?>