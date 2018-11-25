<?php
$access_token = 'u8pTRBkSCAqlTRTbyk2L673Gyg7HoysqcqX8BC/998/SB12Vr6BTVg45mLKsgipw+nX9Q7imQd0s7e9SBrkg1OOJKzcn7tKX0NN7j2BRZMNh9hh6HZ3mN514E1UbGDsxEpCbVLW9Tyh9ugwdZ0hJ/QdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
