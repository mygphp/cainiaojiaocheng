<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 13:10
 */
/*
 * global 关键字用于函数内访问全局变量。
 * 在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字
 */
$x = 5;
$y = 10;

function myTest(){
    global $x,$y;
    $y = $x + $y;
}
myTest();
echo $y;

