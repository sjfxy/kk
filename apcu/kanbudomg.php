<?php
$ph="22";
$data='{"mobile":"'.$ph.'","captcha_code":"","scene":"login","type":"sms"}';
var_dump($data);
https_request("http://www.baidu.com",'ss=22');
function https_request($url,$data = null){
    $user_agent="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.221 Safari/537.36 SE 2.X MetaSr 1.0";
    $curl = curl_init();
    $head=[
        'User-Agent: Mozilla/5.0 (Windows NT 5.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36',
        'X-FORWARDED-FOR:154.125.25.15',
        'CLIENT-IP:154.125.25.15'
    ];
    curl_setopt($curl, CURLOPT_HTTPHEADER, $head);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);#10s超时时间
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}