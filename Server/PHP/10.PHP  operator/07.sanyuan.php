<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:29
 */
header('Content-type:text/html;charset=utf-8');
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;    //PHP_EOL 是一个换行符，兼容更大平台。

// PHP 5.3+ 版本写法
$username = $test ?: 'nobody';
echo $username, PHP_EOL;

