<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 15:10
 */
//根据数组的值降序排序
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
var_dump($age);
echo '<br>';
arsort($age);
var_dump($age);