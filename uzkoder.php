<?php
$token = '1238243700:AAFp9lE_BO8KpdWeyTjbW6_NgdUQejA9C1Q';

function UzKoDeR($method,$datas=[]){
global $token;
    $url = "https://api.telegram.org/bot".$token."/".$method;
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


$update = json_decode(file_get_contents('php://input'));
$cid = $message->chat->id;
$tx = $message->text;
$rname= $message->from->first_name;



  if ($tx=="/start") {
  UzKoDeR('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"🤟😁Salom *$rname* men @Uzb_Coderchik ni rasmiy botiman Bizning Rasmiy Kanal @Hacker_Bey. Usa Olishni hoxlasangiz  @Gold_Oddiy_USA !",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"Admin", 'url'=>"t.me/Uzb_Coderchik"]] 
       ] 
       ]) 
]);
}



