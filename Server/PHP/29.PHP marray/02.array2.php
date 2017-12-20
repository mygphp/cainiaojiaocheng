<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/20
 * Time: 16:07
 */
header('Content-type:text/html;charset=utf-8');
$sites = array
(
    "runoob"=>array
    (
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "google"=>array
    (
        "Google 搜索",
        "http://www.google.com"
    ),
    "taobao"=>array
    (
        "淘宝",
        "http://www.taobao.com"
    )
);
echo $sites['runoob'][0] . '地址为：' . $sites['runoob'][1];
print("<pre>"); // 格式化输出数组
print_r($sites);
print("</pre>");