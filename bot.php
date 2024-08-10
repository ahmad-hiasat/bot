 <?php
ob_start();
define('API_KEY',':AAFZOtoy6-c1L4w8CYBUsHu9_5m6zPccgYI');
$sudo = 6099993354;//ايديك تلي
$admin = "6099993354";//ايديك تلي
$bot_id = 7291428449;// ايدي بوتك
$botid = $bot_id;
#echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/"
     .$method;
     $linkhelp = "https://t.me/thtss";
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//»»»»»»»»»»»»»»»»»»
$g = str_replace('https://','',$SAIEDZip14);
$SAIEDZip14 = "vayuwug2.serv00.net";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
$text = $message->text;
$name = $message->from->first_name;
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$ch = file_get_contents("ch.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$hkok = file_get_contents("hkok.txt");
$g = file_get_contents('server.txt');
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$photo = $update->message->photo;
$video = $update->message->video;
$sticker = $update->message->sticker;
$file = $update->message->document;
$music = $update->message->audio;
$voice = $update->message->voice;
$caption = $message->caption;
$photo_id = $update->message->photo[0]->file_id;
$video_id= $update->message->video->file_id;
$sticker_id = $update->message->sticker->file_id;
$file_id = $update->message->document->file_id;
$music_id = $update->message->audio->file_id;
$voice_id = $update->message->voice->file_id;
 $ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
$tv1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$tv&user_id=$from_id");
$tv2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$tv&user_id=".$from_id);
#$export1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$tv"));
#$linkchannel1 = $export1->result;
#$export2 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$ch"));
#$linkchannel2 = $export2->result;
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
$tvp = str_replace('@','',$tv);
if($message && (strpos($tv1,'"status":"left"') or strpos($tv1,'"Bad Request: USER_ID_INVALID"') or strpos($tv1,'"status":"kicked"') or strpos($tv2,'"status":"left"') or strpos($tv2,'"Bad Request: USER_ID_INVALID"') or strpos($tv2,'"status":"kicked"'))!== false){
$linktv=file_get_contents("linktv.txt");
if($linktv==null){
$linktv="https://t.me/$tvp";
}
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"*☆︙مرحبا بگ عزيزي ،
☆︙لا يمڪنـك استخدام البوت ،
☆︙عليك الإشتراگ في قناة البوت ،
☆︙*[اضغط هنا للإشتراك في القناة]($linktv)* ،

☆︙بعد الاشتراك اضغط ⦗ /start ⦘*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك¹ ✅','url'=>"$linktv"]
],
]])
]);return false;}
$chp = str_replace('@','',$ch);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$linkch=file_get_contents("linkch.txt");
if($linkch==null){
$linkch="https://t.me/$chp";
}
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*☆︙مرحبا بگ عزيزي ،
☆︙لا يمڪنـك استخدام البوت ،
☆︙عليك الإشتراگ في قناة البوت ،
☆︙*[اضغط هنا للإشتراك في القناة]($linktv)* ،

☆︙بعد الاشتراك اضغط ⦗ /start ⦘*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك² ✅' ,'url'=>"$linkch"]
],
]])
]);return false;}
if($user == null){}else{$user5 = $user;}
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
//»»»»»»»»»»»»
$baageel = file_get_contents("baageel.txt");
if($text == "⦗ تفعيل البوت ⦘" and $chat_id == $admin){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
☆︙تم تفعيل البوت بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("baageel.txt","on");
}
if($text == "⦗ تعطيل البوت ⦘" and $chat_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙تم بنجاح تعطيل البوت ✓",
]);
file_put_contents("baageel.txt","off");
} 
if($message and $baageel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$from_id,
 "text"=>"👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة",
 ]);return false;
}
//»»»»»»»»»»»»»»»»»»
$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$chat_id=$message->chat->id;
$name=$message->from->first_name; 
$sub=substr($name,0,10)." ..."; 
if($text == '/start' or $text == '⦗ الصفحة الرئيسية ⦘'){
	$start = str_replace('الاسم',$name,$start);
bot('sendMessage',[
        'chat_id'=>$from_id,
        'text'=>$start,
'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ تعليمات البوت ⦘"]
],
[
['text'=>"⦗ المطور الرسمي ⦘"]
],
],
'resize_keyboard'=>true
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "⦗ تعليمات البوت ⦘"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$hkok,
'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الصفحة الرئيسية ⦘"] 
],
],
'resize_keyboard'=>true
])
]);
}
if($text == "⦗ المطور الرسمي ⦘"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*☆︙مرحبا بك في معلومات البوت :
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*
*☆︙المطور الرسمي للبوت :* [tom](t.me/T_0_M0)
*☆︙القناة التابعة للمطور :* [ᴘʀᴏɢʀᴀᴍᴍɪɴɢ ᴄᴏᴅᴇs](t.me/izeoe)
*☆︙قناة الملفات :* [ملفات بوتات PHP](t.me/Files_php3)
",'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الصفحة الرئيسية ⦘"]
],
],
'resize_keyboard'=>true
])
]);
}
//»»»»»»»»»»»»»»»»»»

if($user == null){}else{$user5 = $user;}
if($message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
  if($message && in_array($from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
//»»»»»»»»»»»»»»»»»»
if($text == "/admin" or $text == "⦗ رجوع ⦘" or $text == "⦗ الغاء الامر ⦘"  or $text == '⦗ رجوع ⦘' or $text =="/ADMIN"){
if($from_id == $admin)
	bot('sendmessage',[
	'chat_id'=>$from_id, 
	'text' =>"☆︙أهلا بك عزيزي الأدمن
☆︙هذه الاعدادات الخاصة بك 
☆︙يمكنك التحكم من الاسفل",'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ تعيين رسالة /start ⦘"]
],
[
['text'=>"⦗ تعيين اشتراك | 1 ⦘"],['text'=>"⦗ تعيين اشتراك | 2 ⦘"]
],
[
['text'=>"⦗ حذف اشتراك | 1 ⦘"],['text'=>"⦗ حذف اشتراك | 2 ⦘"]
],
[
['text'=>"⦗ تفعيل التنبيه ⦘"],['text'=>"⦗ تعطيل التنبيه ⦘"]
], 
[
['text'=>"⦗ تفعيل البوت ⦘"],['text'=>"⦗ تعطيل البوت ⦘"]
],
[
['text'=>"⦗ تفعيل التوجية ⦘"],['text'=>"⦗ تعطيل التوجية ⦘"]
], 
[
['text'=>"⦗ حضر خاص ⦘"],['text'=>"⦗ الغاء حظر الخاص ⦘"]
],
[
['text'=>"⦗ قسم الاذاعة ⦘"]
],
[
['text'=>"⦗ حضر باليوزر ⦘"],['text'=>"⦗ الغاء حضر باليوزر ⦘"]
],
[
['text'=>"⦗ الاحصائيات ⦘"],['text'=>"⦗ وضع التعليمات ⦘"]
],
[
['text'=>"⦗ تفعيل التواصل ⦘"],['text'=>"⦗ تعطيل التواصل ⦘"]
],
[
['text'=>"⦗ المشتركين ⦘"],['text' =>"⦗ نسخه احتياطيه ⦘"]
],
[
['text'=>"⦗ الاوامر الاضافيه ⦘"]
],
], 
])
]);} 
//»»»»»»»»»»»»»»»»»»
if($text == "⦗ تعيين اشتراك | 1 ⦘" and $from_id == $admin){
	file_put_contents("sting.txt","knat");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙أرسل معرف القناة العام الان
☆︙اذا كانت خاصة قم بتوجيه منشور*
",'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "⦗ الغاء ⦘" and $sting =="knat" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"☆︙تم إلغاء الأمر بنجاح" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="knat" and $from_id == $admin){
file_put_contents("sting.txt","link1");
$idchannel= $message->forward_from_chat->id;
file_put_contents("tv.txt","$idchannel"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*☆︙تم حفظ ايدي القناة بنجاح √
☆︙ايدي القناة : *$idchannel*
☆︙تأكد ان البوت أدمن في القناة

☆︙قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);
}
if($text!=null and $text != "⦗ الغاء ⦘" and $sting =="link1" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linktv.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "☆︙مرحبا بك عزيزي
☆︙تم حفظ رابط القناة بنجاح √
☆︙تأكد ان البوت أدمن في القناة

☆︙الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text!=null and $text != "⦗ الغاء ⦘" and $sting =="knat" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("tv.txt","$text"); 
unlink("linktv.txt"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>"*☆︙مرحبا بك عزيزي
☆︙تم حفظ معرف القناة بنجاح √
☆︙فضلا تأكد ان البوت أدمن في القناة *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
//********♥*****//
if($text == "⦗ حذف اشتراك | 1 ⦘" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙*تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tv.txt");}
//»»»»»»»»»»»»»»»»»»
if ($text == "⦗ تعيين اشتراك | 2 ⦘" and $from_id == $admin) {
file_put_contents("sting.txt","sting");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙مرحبا بك عزيزي↯
☆︙أرسل معرف القناة العام الان
☆︙اذا كانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "⦗ الغاء ⦘" and $sting =="sting" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"☆︙تم إلغاء الأمر بنجاح" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="sting" and $from_id == $admin){
unlink("sting.txt");
$idchannel= $message->forward_from_chat->id;
file_put_contents("ch.txt","$idchannel"); 
file_put_contents("sting.txt","link2"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*☆︙تم حفظ ايدي القناة بنجاح √
☆︙ايدي القناة : *$idchannel*
☆︙تأكد ان البوت أدمن في القناة

☆︙قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
])]);
}
if($text!=null and $text != "⦗ الغاء ⦘" and $sting =="link2" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linkch.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "☆︙مرحبا بك عزيزي
☆︙تم حفظ رابط القناة بنجاح 
☆︙تأكد ان البوت أدمن في القناة

☆︙الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if( $text !=null and $text != "⦗ الغاء ⦘" and $sting =="sting" and $from_id == $admin and !$message->forward_from_chat ){
file_put_contents("ch.txt","$text"); 
unlink("linkch.txt");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*☆︙مرحبا بك عزيزي↯
☆︙أرسل معرف القناة العام الان
☆︙اذا كانت خاصه قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text =="⦗ حذف اشتراك | 2 ⦘" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*☆︙تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("ch.txt") ;
} 
//»»»»»»»»»»»»»»»»»»
if($text == "⦗ حضر باليوزر ⦘" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙حسنا ارسل المعرف العضو الذي تريد حظرة من البوت 
"]) ;
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$text) and $sting == "bandu" and $from_id == $admin){
$tf = str_replace("@","",$text);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙تم حظر العضو بنجاح
☆︙[$text](https://t.me/$tf) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>"$text", 
'text'=>"☆︙عذرا عزيزي
☆︙لقد تم حظرك من البوت
☆︙بواسطة المطور الاساسي
"]);$tf = str_replace("@","",$text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text =="⦗ الغاء حضر باليوزر ⦘" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"☆︙مرحبا عزيزي المطور
☆︙ارسل ايدي العضو لالغاء الحظر
"]);file_put_contents("sting.txt","unkband1");} 

if($text =="$text" and $sting == "unkband1" and $from_id == $admin) {
$tf = str_replace("@","",$text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$text);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"☆︙تم الغاء الحظر بنجاح 
☆︙[$text](https://t.me/$tf) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"☆︙مرحبا عزيزي العضو
☆︙لقد تم رفع القيود عنك
☆︙يمكنك الان استخدام البوت
",]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
$rt = $update->message->reply_to_message;
$id = $message->reply_to_message->forward_from->id;
if($tw == "tw" and $from_id != $admin){
	if($text != "/start"){
	bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
	}
	if($tw == "tw" and $rt and $from_id == $admin){
		bot("sendMessage",[
"chat_id"=>$id,
"text"=>"
$text
"
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙تم الارسال بنجاح √
"]);}
if($text == "⦗ تعطيل التواصل ⦘" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙تم تعطيل التواصل بنجاح
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tw.txt") ;
	}
if($text == "⦗ تفعيل التواصل ⦘" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙تم تفعيل التواصل بنجاح 
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents('tw.txt','tw');	}
if($text == "⦗ المشتركين ⦘" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" *☆︙عدد مشتركين البوت هو ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);} 
if($text == "عدد البوتات 🔰" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>count($ok)
	, 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text =="⦗ تفعيل التنبيه ⦘" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*☆︙تم تفعيل التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("onstart.txt","start");
} 
if($text =="⦗ تعطيل التنبيه ⦘" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*☆︙تم تعطيل ❎ التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("onstart.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "⦗ قسم الاذاعة ⦘" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙أهلا بك عزيزي في قسم الاذاعة
☆︙إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ نشر رسالة ⦘"],['text'=>"⦗ نشر صورة ⦘"]
],
[
['text'=>"⦗ نشر فيديو ⦘"],['text'=>"⦗ نشر ملصق ⦘"]
],
[
['text'=>"⦗ نشر ملف ⦘"],['text'=>"⦗ نشر صوت ⦘"]
],
[
['text'=>"⦗ نشر ماركدوان ⦘"],['text'=>"⦗ نشر HTML ⦘"]
],
[
['text'=>"⦗ اذاعة عام بالتوجية ⦘"],['text'=>"⦗ اذاعة عام للكل ⦘"]
],
[
['text' =>"⦗ اذاعة في القنوات ⦘"],['text'=>"⦗ اذاعة خاص بالتوجيه ⦘"]
],
[
['text'=>"⦗ رجوع ⦘"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "⦗ الغاء الامر ⦘"){
	unlink("send.txt");
	}
if($text == "⦗ الغاء الامر ⦘" and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙تم الإلغاء بنجاح 
☆︙سيتم الرجوع للقائمة الرئيسة بعد 5 ثواني*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙أهلا بك عزيزي في قسم الاذاعة
☆︙إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ نشر رسالة ⦘"],['text'=>"⦗ نشر صورة ⦘"]
],
[
['text'=>"⦗ نشر فيديو ⦘"],['text'=>"⦗ نشر ملصق ⦘"]
],
[
['text'=>"⦗ نشر ملف ⦘"],['text'=>"⦗ نشر صوت ⦘"]
],
[
['text'=>"⦗ نشر ماركدون ⦘"],['text'=>"⦗ نشر HTML ⦘"]
],
[
['text'=>"⦗ اذاعة عام بالتوجية ⦘"],['text'=>"⦗ اذاعة عام للكل ⦘"]
],
[
['text'=>"⦗ رجوع ⦘"],['text'=>"⦗ نشر اعلان في القنوات ⦘"]
],
],
])
]);}
//»»»»»»»»»»»»»»»»»»
if($text == "⦗ نشر رسالة ⦘" and $from_id == $admin){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙الان ارسل اي شيء 
☆︙لارسله لـ ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء الامر ⦘"]
],
],
])
]);
}
if($text == "⦗ نشر صورة ⦘" and $from_id == $admin){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙الان ارسل اي صوره 
☆︙لارسلها لـ ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء الامر ⦘"]
],
],
])
]);
	}
	if($text == '⦗ نشر فيديو ⦘' and $from_id == $admin){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙الان ارسل اي فيديو 
☆︙لارسلها لـ ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء الامر ⦘"]
],
],
])
]);
	}
	if($text == "⦗ نشر ملصق ⦘" and $from_id == $admin){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙الان ارسل اي ملصق 
☆︙لارسله لـ ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء الامر ⦘"]
],
],
])
]);
}
	if($text == "⦗ نشر ملف ⦘" and $from_id == $admin){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙الان ارسل اي ملف او صورة gif
☆︙لارسله لـ ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء الامر ⦘"]
],
],
])
]);
}
	if($text == "⦗ نشر صوت ⦘" and $from_id == $admin){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙الان ارسل اي ملف صوتي 🎧 
☆︙لارسله لـ ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء الامر ⦘"]
],
],
])
]);
}
	if($text == "⦗ نشر ماركدوان ⦘" and $from_id == $admin){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙الان ارسل اي نص 
☆︙وسيدعم الماركدون 
☆︙لارسله لـ ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء الامر ⦘"]
],
],
])
]);
}
if($text == "⦗ نشر HTML ⦘" and $from_id == $admin){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙الان ارسل اي نص 
☆︙وسيدعم الـ HTML 
☆︙لارسله لـ ⦗ $memberscount ⦘*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ الغاء الامر ⦘"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($from_id == $admin and $text != "⦗ الغاء الامر ⦘"){
if($text != '⦗ الغاء الامر ⦘' and $send == "txt" and $from_id == $admin){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($text == "⦗ الغاء الامر ⦘" and $from_id == $admin){
unlink("sting.txt") ;
unlink('send.txt');
}
if($text =="⦗ تفعيل التوجية ⦘" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*☆︙تم تفعيل التوجيه بنجاح *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("reply.txt","yhya");
} 
if($from_id == $admin){}else{
if($message and $reply == "yhya" ){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}}
	if($text == "⦗ تعطيل التوجية ⦘" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*☆︙تم تعطيل التوجيه بنجاح *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("reply.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "⦗ حضر خاص ⦘" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙مرحبا عزيزي المطور
☆︙ارسل ايدي العضو لحظره من البوت"]) ;
file_put_contents("sting.txt","band");} 

if(preg_match('/^()(\S{5,32})/i',$text) and $sting == "band" and $from_id == $admin ){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
☆︙تم حظره  بنجاح ✔️
☆︙[$text](tg://user?id=$text) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
'text'=>"☆︙عذرا عزيزي
☆︙لقد تم حظرك من البوت
☆︙بواسطة مالك البوت"]) ;
file_put_contents("band_id.txt",$text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="⦗ الغاء حظر الخاص ⦘" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"☆︙مرحبا عزيزي المطور
☆︙ارسل ايدي العضو لالغاء الحظر"]) ;
file_put_contents("sting.txt","unkband");} 
if($text =="$text" and $sting == "unkband" and $from_id == $admin) {
	$a = str_replace("$text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"☆︙تم الغاء الحظر بنجاح 
☆︙[$text](tg://user?id=$text) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"☆︙مرحبا عزيزي العضو
☆︙لقد تم رفع القيود عنك
☆︙يمكنك الان استخدام البوت", 
]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
if ($text =="⦗ تعيين رسالة /start ⦘" and $from_id == $admin) {
file_put_contents("sting.txt","start1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙أرسل نص البدء { /start }
☆︙يمكنك وضع الاسم بشرط ان تضعه بين { }
☆︙هكذا {الاسم}
"]);
}
if($text and $sting =="start1" and $from_id == $admin ){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙تم حفط نص الترحيب هو 
☆︙/start
{ $text }*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
if ($text =="⦗ وضع التعليمات ⦘" and $from_id == $admin) {
file_put_contents("sting.txt","help");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"☆︙أرسل نص التعليمات 
☆︙يمكنك وضع اسم المرسل بشرط ان تضعه بين {}
☆︙هكذا {الاسم}
"]);
file_put_contents("sting.txt","help");}
if($text and $sting =="help" and $from_id == $admin ){
file_put_contents("help","txt"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*☆︙تم حفط نص التعليمات بنجاح
☆︙/help
{ $hkok } *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
])]);unlink('sting.txt');file_put_contents('hkok.txt',$text);}
//»»»»»»»»»»»»»»»»»»
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;

$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="⦗ اذاعة عام بالتوجية ⦘" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*☆︙اهلا عزيزي الـمطور ، 
☆︙قم بتوجيه رسالة*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*☆︙اهلا عزيزي الـمطور ، 
 ☆︙تم ارسال رسالتك الى ⦗ $MOhaMMed ⦘ عضو و ⦗ $MoHaMMedd ⦘ من مجموعات البوت*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص" || $text =="⦗ اذاعه خاص ⦘" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*☆︙اهلا عزيزي الـمطور 
☆︙قم بأرسال رسالتك
☆︙#ملاحظةهہ : يمكنك استعمال الماركداون ،!*",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*☆︙اهلا عزيزي الـمطور ، 
 ☆︙تم ارسال رسالتك الى ⦗ $MOhaMMed ⦘ عضو*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
     'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "⦗ اذاعه ⦘" || $text =="⦗ اذاعة عام للكل ⦘" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*☆︙اهلا عزيزي الـمطور 
☆︙قم بأرسال رسالتك
☆︙#ملاحظةهہ : يمكنك استعمال الماركداون ،!*",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*☆︙اهلا عزيزي الـمطور ، 
☆︙تم ارسال رسالتك الى ⦗ $MOhaMMed ⦘ عضو و ⦗ $MoHaMMedd ⦘ من مجموعات البوت*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($text == "اذاعه خاص بالتوجيه" || $text == "⦗ اذاعة خاص بالتوجيه ⦘" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*☆︙اهلا عزيزي الـمطور ، 
☆︙قم بتوجيه رسالة*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*☆︙اهلا عزيزي الـمطور ، 
☆︙تم توجيه رسالتك الى ⦗ $MOhaMMed ⦘*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);}

//»»»»»»»»»»»»»»»»»»
if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "⦗ الاحصائيات ⦘"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"☆︙الاحصائيات :
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
☆︙عدد المشترڪين ◄ *[$MOhaMMed](t.me/izeoe)* ،
☆︙الوقت ◄ *[$date $aa](t.me/TH3NK)* ،
*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
]) ]);}}
//»»»»»»»»»»»»
$g = str_replace('https://','',$SAIEDZip14);
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "⦗ نسخه احتياطيه ⦘" and $from_id = $admin){
$RSAIED = "$admin";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('',"Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$g/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
Team Yemen : ". @THTSS ." ♥
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⦗ رجوع ⦘"]
], 
], 
'resize_keyboard'=>true
])]);
unlink("Backup-$SAIEDZip13.zip");
}

//»»»»»»»»»»»»»»»»»»
if($text =="/start" and $onstart == "start" and $from_id != $admin) {
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"*☆︙مرحبا بك عزيز المطور
☆︙شخص قام بالدخول الى البوت !
☆︙معلومات حسابه الشخصي ↯
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*
*☆︙اسم العضو : ❪ *[$name](tg://user?id=$from_id)* ❫
☆︙ايديه : ❪ *$from_id* ❫
☆︙يوزره : ❪ *@$user* ❫
☆︙عدد المشترڪين : ❪ *$MOhaMMed* ❫
➺ *",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,

  ]);
  }

if($text == '/start' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*‣ 𝗕𝗢𝗧 𝗗𝗢𝗪𝗡𝗟𝗢𝗨𝗗𝗘𝗥 𝗬𝗢𝗨𝗧𝗨𝗕𝗘 
• ارسل الرابط
*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- Channel ",'url'=>"t.me/"]],
]
])
]);
}

if(strstr($text,"tiktok") or strstr($text,"instagram")) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يتم التحميل 
",
'reply_to_message_id'=>$message->message_id,
]);
$api = file_get_contents("https://dev-tkx1.pantheonsite.io/newfile.php?u=".$text);
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$api,
'caption'=>"كليشة",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
كليشة
",
'reply_to_message_id'=>$message->message_id,
]);

}
if(strstr($text,"youtu.be")) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يتم التحميل 
",
'reply_to_message_id'=>$message->message_id,
]);
$api = file_get_contents("https://dev-tkx1.pantheonsite.io/x.php?u=".$text);
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$api,
'caption'=>"كليشة",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
كليشة
",
'reply_to_message_id'=>$message->message_id,
]);

}