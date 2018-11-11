<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.masjmzs.com/app/mission_new/handler",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{"id":"2","type_id":"20981715","type_name":"video","nonce_str":"kYIMBtGtaBo","sign":"b5aea87921ec28e9bafeb041eb58e396097b2652a160a0d71045641229082b74","time":"1541891905842"}',
  CURLOPT_HTTPHEADER => array(
    "accept-encoding: gzip",
    "bh: 1",
    "brand: Xiaomi",
    "cache-control: no-cache",
    "connection: Keep-Alive",
    "content-length: 174",
    "content-type: application/json; charset=UTF-8",
    "country: ID",
    "cpu: 1",
    "host: www.masjmzs.com",
    "language: in",
    "lat: -7.097696",
    "lng: 112.34886",
    "meid: 2fc33ca3d799d3a7",
    "os: android",
    "postman-token: 938fdd97-7553-dcaf-025c-899c3caad0d4",
    "ratio: 720*1280",
    "sensor: 1",
    "ticket: sHp2r312otmCpnGns3mCqJhovNiBh4uWruCjr8Cld8ywoIZofqyryo-phae0m4mphYq3236dfM67uoVps6V6la2jra6KZM3XjZSKo7-Ik2ubfrCUi4RzoQ",
    "user-agent: okhttp/3.8.0",
    "version: 2.1.1"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>