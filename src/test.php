<?php
include 'AiSdk.php';

date_default_timezone_set('Asia/Shanghai'); 

$client = new AipSpeech;

$client->appId = '';
$client->apiKey = '';
$client->secretKey = '';

$result = $client->synthesis('你好百度', 'zh', 1, array(
    'vol' => 5,
));

// 识别正确返回语音二进制 错误则返回json 参照下面错误码
if(!is_array($result)){
    file_put_contents('audio.mp3', $result);
}