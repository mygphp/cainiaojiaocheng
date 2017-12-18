<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 16:05
 */
header('Content-type:text/html;charset=utf-8');
//当前的函数名。
function myfunction(){
    echo '当前函数的名：'.__FUNCTION__;
}
myfunction();