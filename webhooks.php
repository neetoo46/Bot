<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '1NUUgjOQlbTUnjVwKOEdIA2fAaovIpH/jprB9ijn3xA63Wg4mJ/JJkL9H/hfHL0H3UvZxLsLON4HNSoOn9VCnXHVsg7Q6mLT5kvUi7mNQqbH5yzenexUq988nJFb8KdrNoqzNXweS0dL0Fbc9GBQjQdB04t89/1O/w1cDnyilFU=';
//u8pTRBkSCAqlTRTbyk2L673Gyg7HoysqcqX8BC/998/SB12Vr6BTVg45mLKsgipw+nX9Q7imQd0s7e9SBrkg1OOJKzcn7tKX0NN7j2BRZMNh9hh6HZ3mN514E1UbGDsxEpCbVLW9Tyh9ugwdZ0hJ/QdB04t89/1O/w1cDnyilFU=
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['source']['groupId'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
