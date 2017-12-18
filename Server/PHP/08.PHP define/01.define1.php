<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 13:54
 */
header('Content-type:text/html;charset=utf-8');
/*
 * define()函数用于设置常量
 * 该函数有三个参数:
 * name：必选参数，常量名称，即标志符。
 * value：必选参数，常量的值。
 * case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。
 */
//大小写敏感

define('GREETING','欢迎访问菜鸟教程');
echo GREETING;
echo '<br>';
echo greeting;

//大小写不敏感
echo '<hr>';
define('GREET','欢迎访问菜鸟教程',true);
echo GREET;
echo '<br/>';
echo greet;