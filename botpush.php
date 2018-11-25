<?php



require "vendor/autoload.php";

$access_token = 'u8pTRBkSCAqlTRTbyk2L673Gyg7HoysqcqX8BC/998/SB12Vr6BTVg45mLKsgipw+nX9Q7imQd0s7e9SBrkg1OOJKzcn7tKX0NN7j2BRZMNh9hh6HZ3mN514E1UbGDsxEpCbVLW9Tyh9ugwdZ0hJ/QdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c4bff4de359b9eb3f3e337e5c28fa8d9';

$pushID = 'U826a705ea856f49fa55a2951c46f17d0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
