<?php
$accessToken = "1NUUgjOQlbTUnjVwKOEdIA2fAaovIpH/jprB9ijn3xA63Wg4mJ/JJkL9H/hfHL0H3UvZxLsLON4HNSoOn9VCnXHVsg7Q6mLT5kvUi7mNQqbH5yzenexUq988nJFb8KdrNoqzNXweS0dL0Fbc9GBQjQdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
$content = file_get_contents('php://input');
$arrayJson = json_decode($content, true);
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$accessToken}";
//รับข้อความจากผู้ใช้
$message = $arrayJson['events'][0]['message']['text'];
//รับ id ของผู้ใช้
$id = $arrayJson['events'][0]['source']['groupId'];
$userid = $arrayJson['events'][0]['source']['userId'];
if($message == "gettoken"){
    $arrayPostData['to'] = $id;
    $arrayPostData['messages'][0]['type'] = "text";
    $arrayPostData['messages'][0]['text'] =$id;
    pushMsg($arrayHeader,$arrayPostData);
}

?>
