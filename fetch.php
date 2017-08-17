<?php
require_once 'config.php';
require_once 'curl.php';
 $str=urlencode("加油站");
 $re=urlencode("上海");
// $data=get("http://api.map.baidu.com/place/v2/search?q=%E5%8A%A0%E6%B2%B9%E7%AB%99&region=%E4%B8%8A%E6%B5%B7&output=json&ak=WBRvogRKnKH4zSsnGiSAZgY2cVvQnAqm");
// var_dump($data);
//根据城市查询不符合条件 应该是根据用户的经纬度进行展示地图 并且根据用户经纬度 调用这个接口根据返回的数据进行返回
//如果成功就调用展示的周围的加油站的地图基本情况 因为会返回经纬度
// $data=get("http://api.map.baidu.com/place/v2/search?query=$str&page_size=10&page_num=0&scope=1&region=$re&output=json&ak=WBRvogRKnKH4zSsnGiSAZgY2cVvQnAqm");
// var_dump($data);
//获取 矩形区域检索
// $data=get("http://api.map.baidu.com/place/v2/search?query=$str&page_size=10&page_num=0&scope=1&bounds=39.915,116.404,39.975,116.414&output=json&ak=WBRvogRKnKH4zSsnGiSAZgY2cVvQnAqm");
// var_dump($data);

 //圆形区域检索
$ak=$GLOBALS['ak'];
 $data=get("http://api.map.baidu.com/place/v2/search?query=%E5%8A%A0%E6%B2%B9%E7%AB%99&page_size=10&page_num=0&scope=1&location=31.231166944606,121.48939308308&radius=2000&output=json&ak=WBRvogRKnKH4zSsnGiSAZgY2cVvQnAqm");
 var_dump($data);
//  $dada_arr=[];
//  $dataObj=json_decode($data);
//  var_dump($dataObj);
// $data=get("http://www.chaipip.com/ip.php");
// //var_dump($data);
// file_put_contents('a.html', $data);
//单个poi
//  $uid='56e88cbabc605266a4c756cd';
//  $s=get("http://api.map.baidu.com/place/v2/detail?uid=56e88cbabc605266a4c756cd&output=json&scope=2&ak=$ak");
//  var_dump($s);
// $data=get("http://api.map.baidu.com/geocoder/v2/?address=上海黄浦区淮海中路1号柳林大厦1906&output=json&ak=$ak");
// var_dump($data);

// $data=get("http://api.map.baidu.com/geocoder/v2/?location=31.230862128016363,121.48658564292025&output=xml&pois=1&ak=$ak");
// file_put_contents("map.xml", $data);



//ip -> 经纬度 ->百度地图 ->地址 
//地址->经纬度