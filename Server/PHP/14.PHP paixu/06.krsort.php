<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 15:13
 */

//数组的键，对关联数组进行降序排列
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
var_dump($age);
echo '<br>';
krsort($age);
var_dump($age);