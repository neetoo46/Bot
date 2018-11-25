<?php


$access_token = '9JsyVZesJeoMHmqSvsGVLCJKHQOd3A1VoZW9GP3C+Ps/hNoFy6rPZY66MOlbViN7em5Wfs7lWzVed/YBPVCyvrenb4iJou76TTvvGkMDj8InRwGgHGjPrLv04FHpN9OEay7V9yLs2Jz+XRPVnuLSYgdB04t89/1O/w1cDnyilFU=';

$userId = 'U0d0986d3999098bd1105d89299ee122e';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
