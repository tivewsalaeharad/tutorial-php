<?php
        
$base_url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/party/";
$token = "adee027eb4ce56647a19c49796ddad6722f5bfd8";

$handle = curl_init();
curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($handle, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Accept: application/json",
    "Authorization: Token " . $token
));
curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_URL, $base_url);
curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode(["query"=>"7707083893", "count"=>1]));

$result = curl_exec($handle);
$result = json_decode($result, true);

echo "<pre>";
print_r($result);
echo "</pre>";

curl_close($handle);

