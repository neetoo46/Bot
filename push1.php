<?php
$accessToken = "u8pTRBkSCAqlTRTbyk2L673Gyg7HoysqcqX8BC/998/SB12Vr6BTVg45mLKsgipw+nX9Q7imQd0s7e9SBrkg1OOJKzcn7tKX0NN7j2BRZMNh9hh6HZ3mN514E1UbGDsxEpCbVLW9Tyh9ugwdZ0hJ/QdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
$content = file_get_contents('php://input');
$arrayJson = json_decode($content, true);
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$accessToken}";
//รับข้อความจากผู้ใช้
$message = $arrayJson['events'][0]['message']['text'];
//รับ id ของผู้ใช้
$id = $arrayJson['events'][0]['source']['groupId'];



if($message == "gettoken1"){ //vip
$content = file_get_contents("http://phonenana.com/line-bot/get-token.php?id=$id&member=1");
//header("Location:http://phonenana.com/line-bot/get-token.php?id=$id");
$arrayPostData['to'] = $id;
$arrayPostData['messages'][0]['type'] = "text";
$arrayPostData['messages'][0]['text'] ="พร้อมรายงานผลยี่กีแล้วจ้า !!";
$arrayPostData['messages'][1]['type'] = "sticker";
$arrayPostData['messages'][1]['packageId'] = "1";
$arrayPostData['messages'][1]['stickerId'] = "2";
pushMsg($arrayHeader,$arrayPostData);

}if($message == "ปิดการทำงาน"){ //free
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="ปิดการรายงานผลยี่กีแล้วจ้า !!";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "42";
  pushMsg($arrayHeader,$arrayPostData);
}


function pushMsg($arrayHeader,$arrayPostData){
   $strUrl = "https://api.line.me/v2/bot/message/push";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,$strUrl);
   curl_setopt($ch, CURLOPT_HEADER, false);
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   $result = curl_exec($ch);
   curl_close ($ch);
}
exit;

?>
