<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 13:23
 */
/*
 * PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。
 * index 保存变量的名称。
 * 这个数组可以在函数内部访问，也可以直接用来更新全局变量。
 */
$x = 5;
$y = 10;

function myTest(){
    echo $GLOBALS['x'];
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y;