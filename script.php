<?php
function blockedhttp($ip){
$url = "https://ai-mail.tk/?ip=$ip";
$data = file_get_contents($url);
$json = json_decode($data);
return $json->status;
}

if(blockedhttp($_SERVER['REMOTE_ADDR']) === "fake"){
exit(" ini situs plagiat ");
}