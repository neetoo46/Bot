<?php
$accessToken = "SketXvTppjjOuu1PyXvPRQxgxThH3k9XiWzGA+Xw4FqEtC9CovGVv1y50SbAIIB7QxlpEotvx0RBGsr4foNcaFH4wa3Hsmf3Y2ni1Lfvl9lyfbv8fxEuDWCDtI2V+c0UAZbt0T68NXIWwYnDkXmhTQdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
$content = file_get_contents('php://input');
$arrayJson = json_decode($content, true);
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$accessToken}";
//รับข้อความจากผู้ใช้

$message = $arrayJson['events'][0]['message']['text'];
//$message = ereg_replace('[[:space:]]+', '', trim($message));

//รับ id ของผู้ใช้
$id = $arrayJson['events'][0]['source']['groupId'];

if($arrayJson['events'][0]['type']=='memberJoined'){
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="ยินดีต้อนรับจ้า
  คู่มือการใช้งานโปรแกรม
  ------------------------
  
  ------------------------
  โปรดอ่านในโน๊ต..
  ------------------------
  easylotto.in.th";
  pushMsg($arrayHeader,$arrayPostData);
}
if($arrayJson['events'][0]['type']=='memberLeft'){
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="ขอบคุณที่ใช้บริการค่ะ";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);
}


//$idsmile ='Cd8562369e04d45495e12c8c830ea3863';
//$checkid ='Cb2a0ab426f804a15c8233782ea28805d':
$userid = $arrayJson['events'][0]['source']['userId'];

$idcheck ='C6158fb947c96653e2706ce8eb2dbae9b';
$idcheck1 ='C000b66e767252bdc4efb43fb116d798e';
$idfree ='C6158fb947c96653e2706ce8eb2dbae9bxxx';
//$idfree2 ='C000b66e767252bdc4efb43fb116d798e';
//$idfree2 ='C000b66e767252bdc4efb43fb116d798e';
date_default_timezone_set("Asia/Bangkok");
 $today=date("Y-m-d");

/*if($message=="เลขวิน"||$message=="เลขรูด"||$message=="เลขเสียว"||$message=="เลขปัก"||$message=="เลขเจาะ"){
 if($id==$idcheck){ //||$id==$idcheck1
if(time()>=strtotime("00:00:00") && time()<strtotime("06:00:00")){

   $arrayPostData['to'] =$id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] ="
 ==============================
        ระบบเปิดให้บริการตั้งแต่เวลา
               06.00-00.00
 ==============================
easylotto.in.th";
pushMsg($arrayHeader,$arrayPostData);
//$idfree ='C6158fb947c96653e2706ce8eb2dbae9bbbbbb';
//$idfree2 ='C000b66e767252bdc4efb43fb116d798eeee';
}else{
//$idfree2 ='C000b66e767252bdc4efb43fb116d798e';
$idfree ='C6158fb947c96653e2706ce8eb2dbae9b';

}
}
}*/


//$id='C22521a49473a70959e78d41650314a50';
$idadmin ='C701d3b84cd8afc5d2800f7b1b0f0b09c';
//$idvip ='C22521a49473a70959e78d41650314a50';
//$id199 ='C678b1d0f7f216ba96cf8b6e784bac718xxx';
//ห้องใหม่
$idvip1='Cfee29536f26d44c081fe4eeb08a5400e';
$idvip2='Cd95550591ae6ca7084af635c0d822c59';
$id100='Cb12ff2198b553dd2fd950432db7c852d';

//"เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขตอง","เลขมัดบน","เลขมัดล่าง","เลขรูดบน","เลขรูดล่าง",
//"วินบน","วินล่าง","รูดบน","รูดล่าง","รูดบนล่าง","ปักสิบบน","ปักหน่วยบน","ปักสิบล่าง","ปักหน่วยล่าง","เลขเจาะ",
$formula =["หวยรัฐบาล","หวยลาว","หวยเวียดนาม","หวยมาเลย์","หุ้นไทยเย็น","หุ้นดาวน์โจน","นิเคอิเช้า","นิเคอิบ่าย","ฮั่งเส็งเช้า","ฮั่งเส็งบ่าย","หวยธกส","หวยออมสิน","หุ้นไทยเช้า","หุ้นไทยเที่ยง","หุ้นไทยบ่าย"
,"หุ้นเกาหลี","จีนรอบเช้า","จีนรอบบ่าย","หุ้นไต้หวัน","หุ้นสิงคโปร์","หุ้นอิยิปต์","หุ้นอังกฤษ","หุ้นเยอรมัน","หุ้นรัสเซีย","หุ้นอินเดีย"]; //,,"เลขวินบน","เลขวินล่าง","เลขรูดบน","เลขรูดล่าง"
/*"http://easylotto.in.th/line-bot/push-win.php","http://easylotto.in.th/line-bot/push-rood.php","http://easylotto.in.th/line-bot/push-seal.php"
,"http://easylotto.in.th/line-bot/push-puk.php","http://easylotto.in.th/line-bot/remind.php",
"http://easylotto.in.th/line-bot/yeekee-bundle.php","http://easylotto.in.th/line-bot/yeekee-bundle-lo.php","http://easylotto.in.th/line-bot/push-rood-on.php"
,"http://easylotto.in.th/line-bot/push-rood-lower.php",

/////////////////////////////
,"http://easylotto.in.th/line-bot/line_winon.php?formula=wh"
,"http://easylotto.in.th/line-bot/line_winon.php?formula=wl","http://easylotto.in.th/line-bot/line_winon.php?formula=rh","http://easylotto.in.th/line-bot/line_winon.php?formula=rl"
,"http://easylotto.in.th/line-bot/line_winon.php?formula=rhl","http://easylotto.in.th/line-bot/line_winon.php?formula=ph1"
,"http://easylotto.in.th/line-bot/line_winon.php?formula=ph2","http://easylotto.in.th/line-bot/line_winon.php?formula=pl0","http://easylotto.in.th/line-bot/line_winon.php?formula=pl1"
,"http://easylotto.in.th/line-bot/yeekee-drill.php",
*/
$url =["http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"];

/*"http://easylotto.in.th/line-bot/reviews-win.txt","http://easylotto.in.th/line-bot/reviews-rood.txt","http://easylotto.in.th/line-bot/reviews-rood.txt",
"http://easylotto.in.th/line-bot/reviews-puk.txt","http://easylotto.in.th/line-bot/reviews-tong.txt"
,"http://easylotto.in.th/line-bot/reviews-on.txt","http://easylotto.in.th/line-bot/reviews-lo.txt","http://easylotto.in.th/line-bot/reviews-rood.txt",
"http://easylotto.in.th/line-bot/reviews-rood.txt",



,"http://easylotto.in.th/line-bot/reviews-winon.txt","http://easylotto.in.th/line-bot/reviews-winon.txt","http://easylotto.in.th/line-bot/reviews-winon.txt",
"http://easylotto.in.th/line-bot/reviews-winon.txt","http://easylotto.in.th/line-bot/reviews-winon.txt","http://easylotto.in.th/line-bot/reviews-winon.txt"
,"http://easylotto.in.th/line-bot/reviews-winon.txt","http://easylotto.in.th/line-bot/reviews-winon.txt","http://easylotto.in.th/line-bot/reviews-winon.txt"
,"http://easylotto.in.th/line-bot/reviews-drill.txt"
*/

$url1=["http://easylotto.in.th/bot-lotto-all.php?lotto=1","http://easylotto.in.th/bot-lotto-all.php?lotto=2","http://easylotto.in.th/bot-lotto-all.php?lotto=4"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=5","http://easylotto.in.th/bot-lotto-all.php?lotto=3","http://easylotto.in.th/bot-lotto-all.php?lotto=6"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=7","http://easylotto.in.th/bot-lotto-all.php?lotto=8","http://easylotto.in.th/bot-lotto-all.php?lotto=9","http://easylotto.in.th/bot-lotto-all.php?lotto=10"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=23","http://easylotto.in.th/bot-lotto-all.php?lotto=24","http://easylotto.in.th/bot-lotto-all.php?lotto=11","http://easylotto.in.th/bot-lotto-all.php?lotto=12"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=13","http://easylotto.in.th/bot-lotto-all.php?lotto=25","http://easylotto.in.th/bot-lotto-all.php?lotto=14","http://easylotto.in.th/bot-lotto-all.php?lotto=15"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=16","http://easylotto.in.th/bot-lotto-all.php?lotto=17","http://easylotto.in.th/bot-lotto-all.php?lotto=18","http://easylotto.in.th/bot-lotto-all.php?lotto=20"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=19","http://easylotto.in.th/bot-lotto-all.php?lotto=21","http://easylotto.in.th/bot-lotto-all.php?lotto=22"];


/*"http://easylotto.in.th/line-bot/del-win.php","http://easylotto.in.th/line-bot/del-rood.php","http://easylotto.in.th/line-bot/del-rood.php",
"http://easylotto.in.th/line-bot/del-bot.php","http://easylotto.in.th/line-bot/del-tong.php",
"http://easylotto.in.th/line-bot/del-mux-on.php","http://easylotto.in.th/line-bot/del-mux-lo.php","http://easylotto.in.th/line-bot/del-rood.php"
,"http://easylotto.in.th/line-bot/del-rood.php",

,"http://easylotto.in.th/line-bot/del-winon.php"
,"http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php"
,"http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php"
,"http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-drill.php"

เรียนสมาชิก : เรื่องการวางเลขแบบใหม่
คืนนี้ทีมงานจะทดลองการวางเลขแบบใหม่ ให้โปรแกรมแสดงผลรอบเดียว 6-8 สูตร (ปัก เสียว รูด วิน เจาะ ตอง ไหล มัด) แบบรอบเดียวจบทุกๆ 15 นาที
ตามที่เจสออกผลรางวัล โดยที่สมาชิกไม่ต้องพิมพ์สั่งเลขใดๆ ออกมาแล้ว เพื่อไม่เป็นการรบกวนสมาธิท่านที่กำลังติดตามเลขสูตรนั้นๆ อยู่และ ทางทีมงานจะได้มีโอกาสมาเสนอ
แนะนำการใช้โปรแกรมแบบเจาะลึก พาเล่น พาถอนโดยแอตมิน และเราจะได้คุยกันมากขึ้น.
คู่มือการใช้งานโปรแกรม
https://keep.line.me/s/S0Es1nujIivnH3lGSuyexQQ4kXwkldz7ERxR1xGVMuU
เข้าสู่หน้าโปรแกรมคลิกที่นี้ :easylotto.in.th

*/
$remove=["http://easylotto.in.th/line-bot/del-win.php","http://easylotto.in.th/line-bot/del-rood.php","http://easylotto.in.th/line-bot/del-rood.php",
"http://easylotto.in.th/line-bot/del-bot.php","http://easylotto.in.th/line-bot/del-tong.php",
"http://easylotto.in.th/line-bot/del-mux-on.php","http://easylotto.in.th/line-bot/del-mux-lo.php","http://easylotto.in.th/line-bot/del-rood.php"
,"http://easylotto.in.th/line-bot/del-rood.php","http://easylotto.in.th",,"http://easylotto.in.th/line-bot/del-winon.php"
,"http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php"
,"http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php"
,"http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-winon.php","http://easylotto.in.th/line-bot/del-drill.php"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"];

$useradmin1="U890a31fb1c5c8f07cc06e8ae47202f75";
$useradmin2="U2f4fe4ca40895f6913b908a4c6fdcb95";
$useradmin3="U6d0021f8e019a176ff0c11a6b6677bcb";
if($id==$idvip1||$id==$idadmin||$userid==$useradmin1||$userid==$useradmin2||$userid==$useradmin3){
for($i = 0; $i<count($formula);$i++) {
    if($message==$formula[$i]){

         $requal = file_get_contents($url[$i]);
         if($requal!=""){
         $content = file_get_contents($url1[$i], "\xEF\xBB\xBF");
          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] =$content;
          pushMsg($arrayHeader,$arrayPostData);
         //$requal = file_get_contents($remove[$i]);

        $idfree ='C6158fb947c96653e2706ce8eb2dbae9bbbbbb';
        $idfree2 ='C000b66e767252bdc4efb43fb116d798eeee';
        $id100='Cb12ff2198b553dd2fd950432db7c852dxxx';
}else{
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="คำสั่งในการเรียกเลข อยู่ช่วงเวลาปรับปรุง ขออภัยในความไม่สะดวกครับ ดูเลขเพิ่มเติมได้ที่ :http://easylotto.in.th";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);

}
      }
    }
}


$formula100 =["เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขตอง","เลขมัดบน","เลขมัดล่าง","เลขรูดบน","เลขรูดล่าง","เลขเจาะ","หวยรัฐบาล","หวยลาว","หวยเวียดนาม","หวยมาเลย์","หุ้นไทยเย็น","หุ้นดาวน์โจน","นิเคอิเช้า","นิเคอิบ่าย","ฮั่งเส็งเช้า","ฮั่งเส็งบ่าย"]; //,,"เลขวินบน","เลขวินล่าง","เลขรูดบน","เลขรูดล่าง"
$url100 =["http://easylotto.in.th/line-bot/push-win.php","http://easylotto.in.th/line-bot/push-rood.php","http://easylotto.in.th/line-bot/push-seal.php"
,"http://easylotto.in.th/line-bot/push-puk.php","http://easylotto.in.th/line-bot/remind.php",
"http://easylotto.in.th/line-bot/yeekee-bundle.php","http://easylotto.in.th/line-bot/yeekee-bundle-lo.php","http://easylotto.in.th/line-bot/push-rood-on.php"
,"http://easylotto.in.th/line-bot/push-rood-lower.php","http://easylotto.in.th/line-bot/yeekee-drill.php","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"];

$urlget=["http://easylotto.in.th/line-bot/reviews-win.txt","http://easylotto.in.th/line-bot/reviews-rood.txt","http://easylotto.in.th/line-bot/reviews-rood.txt",
"http://easylotto.in.th/line-bot/reviews-puk.txt","http://easylotto.in.th/line-bot/reviews-tong.txt"
,"http://easylotto.in.th/line-bot/reviews-on.txt","http://easylotto.in.th/line-bot/reviews-lo.txt","http://easylotto.in.th/line-bot/reviews-rood.txt",
"http://easylotto.in.th/line-bot/reviews-rood.txt","http://easylotto.in.th/line-bot/reviews-drill.txt","http://easylotto.in.th/bot-lotto-all.php?lotto=1","http://easylotto.in.th/bot-lotto-all.php?lotto=2","http://easylotto.in.th/bot-lotto-all.php?lotto=4"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=5","http://easylotto.in.th/bot-lotto-all.php?lotto=3","http://easylotto.in.th/bot-lotto-all.php?lotto=6"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=7","http://easylotto.in.th/bot-lotto-all.php?lotto=8","http://easylotto.in.th/bot-lotto-all.php?lotto=9","http://easylotto.in.th/bot-lotto-all.php?lotto=10"];

$remove100=["http://easylotto.in.th/line-bot/del-win.php","http://easylotto.in.th/line-bot/del-rood.php","http://easylotto.in.th/line-bot/del-rood.php",
"http://easylotto.in.th/line-bot/del-bot.php","http://easylotto.in.th/line-bot/del-tong.php",
"http://easylotto.in.th/line-bot/del-mux-on.php","http://easylotto.in.th/line-bot/del-mux-lo.php","http://easylotto.in.th/line-bot/del-rood.php"
,"http://easylotto.in.th/line-bot/del-rood.php","http://easylotto.in.th/line-bot/del-drill.php","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"];


if($id==$id100){
for($i = 0; $i<count($formula100);$i++) {
    if($message==$formula100[$i]){

         $requal = file_get_contents($url100[$i]);
         if($requal!=""){
         $content = file_get_contents($urlget[$i], "\xEF\xBB\xBF");
          $content=strip_tags($content);
          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] = $content;
          pushMsg($arrayHeader,$arrayPostData);
         $requal = file_get_contents($remove100[$i]);

}else{
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="คำสั่งในการเรียกเลข อยู่ช่วงเวลาปรับปรุง ขออภัยในความไม่สะดวกครับ ดูเลขเพิ่มเติมได้ที่ :http://easylotto.in.th";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);

}
      }
    }
}


/*
$formula2 =["เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขเจาะ","หวยรัฐบาล","หวยลาว","หวยเวียดนาม","หวยมาเลย์","หุ้นไทยเย็น","หุ้นดาวน์โจน","นิเคอิเช้า","นิเคอิบ่าย","ฮั่งเส็งเช้า","ฮั่งเส็งบ่าย"];
$formula3 =["เลขไหล","เลขตอง","เลขมัดบน","เลขมัดล่าง","หวยรัฐบน","หวยรัฐล่าง","เลขรูดบน","เลขรูดล่าง","เลขวินบน","เลขวินล่าง","วินบน","วินล่าง","รูดบน","รูดล่าง","รูดบนล่าง","ปักสิบบน","ปักหน่วยบน","ปักสิบล่าง","ปักหน่วยล่าง"];
$url3 =["http://easylotto.in.th/line-bot/push-win.php","http://easylotto.in.th/line-bot/push-rood.php","http://easylotto.in.th/line-bot/push-seal.php"
,"http://easylotto.in.th/line-bot/push-puk.php","http://easylotto.in.th/line-bot/yeekee-drill.php","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"];


$url4=["http://easylotto.in.th/line-bot/reviews-win.txt","http://easylotto.in.th/line-bot/reviews-rood.txt","http://easylotto.in.th/line-bot/reviews-rood.txt",
"http://easylotto.in.th/line-bot/reviews-puk.txt","http://easylotto.in.th/line-bot/reviews-drill.txt","http://easylotto.in.th/bot-lotto-all.php?lotto=1","http://easylotto.in.th/bot-lotto-all.php?lotto=2","http://easylotto.in.th/bot-lotto-all.php?lotto=4"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=5","http://easylotto.in.th/bot-lotto-all.php?lotto=3","http://easylotto.in.th/bot-lotto-all.php?lotto=6"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=7","http://easylotto.in.th/bot-lotto-all.php?lotto=8","http://easylotto.in.th/bot-lotto-all.php?lotto=9","http://easylotto.in.th/bot-lotto-all.php?lotto=10"];


$remove1=["http://easylotto.in.th/line-bot/del-win.php","http://easylotto.in.th/line-bot/del-rood.php","http://easylotto.in.th/line-bot/del-rood.php",
"http://easylotto.in.th/line-bot/del-bot.php","http://easylotto.in.th/line-bot/del-drill.php","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"];

if($id==$idfree){
  for($i = 0; $i<count($formula2);$i++){
    if($message==$formula2[$i]){

      $content = file_get_contents("http://easylotto.in.th/line-bot/status.php?id=$id&message=$formula2[$i]&url1=$url3[$i]&url2=$url4[$i]&remove=$remove1[$i]");
         //$requal = file_get_contents($url3[$i]);
         if($requal!=""){
         $content = file_get_contents($url4[$i], "\xEF\xBB\xBF");
          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] = $content;
          pushMsg($arrayHeader,$arrayPostData);
         $requal = file_get_contents($remove1[$i]);
}else{
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="คำสั่งในการเรียกเลข อยู่ช่วงเวลาปรับปรุง ขออภัยในความไม่สะดวกครับ ดูเลขเพิ่มเติมได้ที่ :http://easylotto.in.th";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);

}
}

}
if($id==$idfree||$id==$idfree2){
  for($i = 0; $i<count($formula3);$i++){
      if($message==$formula3[$i]){
        $arrayPostData['to'] = $id;
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] ="เฉพาะ Vip เท่านั้น สมัครคลิกที่นี้
      http://easylotto.in.th/";
        pushMsg($arrayHeader,$arrayPostData);
            }
    }

}


}*/

/*if($id==$idadmin){
if($message=="setoff1"){
$requal = file_get_contents("http://easylotto.in.th/line-bot/set-onoff.php?id=C701d3b84cd8afc5d2800f7b1b0f0b09c&idfree=C6158fb947c96653e2706ce8eb2dbae9b&status=0&set=ห้องฟรี1");
}
if($message=="setoff2"){
$requal = file_get_contents("http://easylotto.in.th/line-bot/set-onoff.php?id=C701d3b84cd8afc5d2800f7b1b0f0b09c&idfree=C000b66e767252bdc4efb43fb116d798e&status=0&set=ห้องฟรี2");
}
if($message=="seton1"){
$requal = file_get_contents("http://easylotto.in.th/line-bot/set-onoff.php?id=C701d3b84cd8afc5d2800f7b1b0f0b09c&idfree=C6158fb947c96653e2706ce8eb2dbae9b&status=1&set=ห้องฟรี1");
}
if($message=="seton2"){
$requal = file_get_contents("http://easylotto.in.th/line-bot/set-onoff.php?id=C701d3b84cd8afc5d2800f7b1b0f0b09c&idfree=C000b66e767252bdc4efb43fb116d798e&status=1&set=ห้องฟรี2");
}
}*/

if($message=="หมดอายุ"){
if($userid==$useradmin1||$userid==$useradmin2||$userid==$useradmin3){
$requal = file_get_contents("http://easylotto.in.th/line-bot/user-endtime.php");
$content = file_get_contents("http://easylotto.in.th/line-bot/user-endtime.txt", "\xEF\xBB\xBF");
 $arrayPostData['to'] = $id;
 $arrayPostData['messages'][0]['type'] = "text";
 $arrayPostData['messages'][0]['text'] = $content;
 pushMsg($arrayHeader,$arrayPostData);
 $requal = file_get_contents("http://easylotto.in.th/line-bot/del-user.php");

}
}







/*if($id ==$idadmin){ //vip
  //$arrayPostData['to'] = $id;
  //$arrayPostData['messages'][0]['type'] = "text";
  //$arrayPostData['messages'][0]['text'] ="พร้อมรายงานผลแล้วจ้า !!";
  //pushMsg($arrayHeader,$arrayPostData);
$content = file_get_contents("http://easylotto.in.th/line-bot/get-admin.php?userid=$userid");
}*/


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
