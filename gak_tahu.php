<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.masjmzs.com/app/mission_new/handler?id=8",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => 
"language=in&ticket=sHp2r312otmCpnGns3mCqJhovNiBh4uWruCjr8Cld8ywoIZofqyryo-phae0m4mphYq3236dfM67uoVps6V6la2jra6KZM3XjZSKo7-Ik2ubfrCUi4RzoQ&meid=2fc33ca3d799d3a7&sign=121213213123&os=android&version=2.1.1&code_or_phone=G17105",
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
    "postman-token: a818c1c1-0c1b-e74f-d7b5-d395c7b9be13",
    "referer: http://com.masjmzs.com//personal/enterCode.html",
    "user-agent: Mozilla/5.0 (Linux; Android 7.1.2; Redmi 5A 
Build/N2G47H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 
Chrome/64.0.3282.137 Mobile Safari/537.36",
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
