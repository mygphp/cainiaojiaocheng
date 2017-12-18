<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:00
 */
header('Content-type:text/html;charset=utf-8');
/*
 * 常量是全局的在任何地方都可以使用
 */
define('GREETING','欢迎访问菜鸟教程');

function myTest(){
    echo GREETING;
}
myTest();