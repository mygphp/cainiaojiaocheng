<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 13:34
 */
header("content-type:text/html;charset=utf-8");
$txt1 = "学习 PHP";
$txt2 = "RUNOOB.COM";
$cars = array("Volvo","BMW","Toyota");

echo $txt1;
echo "<br>";
echo "在 $txt2 学习 PHP ";
echo "<br>";
echo "我车的品牌是 {$cars[0]}";