<?php
echo 123;
//登陆慕课网
$data = "account=*********@qq.com&password=****&remember=1";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"https://mp.weixin.qq.com/cgi-bin/loginpage");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

date_default_timezone_set('PRC');

curl_setopt($curl,CURLOPT_COOKIESESSION,TRUE);
curl_setopt($curl,CURLOPT_COOKIEFILE,'cookiefile');
curl_setopt($curl,CURLOPT_COOKIEJAR,'cookiefile');
curl_setopt($curl,CURLOPT_COOKIE,session_name().'='.session_id());

curl_setopt($curl,CURLOPT_HEADER,0);
curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1);

curl_setopt($curl,CURLOPT_POST,1);
curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
curl_setopt($curl,CURLOPT_HTTPHEADER,array("application/x-www-form-urlencoded;charset=utf-8","Content-length:".strlen($data )));

curl_exec($curl);
// echo $output;
// die;
//下载个人中心主页
curl_setopt($curl,CURLOPT_URL,"https://mp.weixin.qq.com/cgi-bin/home?t=home/index&lang=zh_CN&token=577305476");
curl_setopt($curl,CURLOPT_POST,0);
curl_setopt($curl,CURLOPT_HTTPHEADER,array("Content-type:text/xml"));

$output = curl_exec($curl);
curl_close($curl);
echo $output;





















