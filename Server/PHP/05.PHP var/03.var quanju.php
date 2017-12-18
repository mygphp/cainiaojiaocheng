<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 11:46
 */
header('content-type:text/html;charset=utf-8');
$x = 5; //全局变量
function myTest(){
    $y = 10;    //局部变量
    echo '<p>测试函数的内变量</p>';
    echo "变量x为:$x";
    echo '<br>';
    echo "变量y为:$y";
}
myTest();

echo '<p>测试函数的内变量</p>';
echo "变量x为:$x";
echo '<br>';
echo "变量y为:$y";