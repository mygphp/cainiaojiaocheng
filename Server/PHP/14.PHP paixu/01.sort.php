<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:57
 */

//对数组升序排序
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
echo '<br>';
$cars1 = sort($cars);//成功返回true
var_dump($cars1);
echo '<br>';
var_dump($cars);

echo '<hr/>';

$numbers=array(4,6,2,22,11);
var_dump($numbers);
echo '<br>';
$result = sort($numbers);
var_dump($result);
echo '<br>';
var_dump($numbers);