<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 17:27
 */
header('Content-type:text/html;charset=utf-8');
/*
 * 可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。
 * 常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。
 */
class MyClass
{
    const constant = '常量值';

    function showConstant() {
        echo  self::constant . PHP_EOL;
    }
}

echo MyClass::constant . PHP_EOL;

$classname = "MyClass";
echo $classname::constant . PHP_EOL; // 自 5.3.0 起

$class = new MyClass();
$class->showConstant();

echo $class::constant . PHP_EOL; // 自 PHP 5.3.0 起