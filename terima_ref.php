<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.masjmzs.com/app/mission_new/handler?id=11",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "accept-encoding: gzip, deflate",
    "accept-language: id-ID,en-US;q=0.9",
    "cache-control: no-cache",
    "connection: keep-alive",
    "content-length: 223",
    "content-type: application/x-www-form-urlencoded",
    "host: www.masjmzs.com",
    "origin: http://com.masjmzs.com",
    "postman-token: 857c0069-5989-851d-4ac0-063a4ab05e11",
    "referer: http://com.masjmzs.com//personal/enterCode.html",
    "user-agent: Mozilla/5.0 (Linux; Android 7.1.2; Redmi 5A Build/N2G47H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/64.0.3282.137 Mobile Safari/537.36",
    "x-requested-with: com.sven.huinews.international"
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