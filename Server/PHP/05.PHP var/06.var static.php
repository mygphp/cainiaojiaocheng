<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 13:27
 */
/*
 * 当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除
 */

function myTest(){
    static $x = 0;
    echo $x;
    $x ++;
}
myTest();
myTest();
myTest();