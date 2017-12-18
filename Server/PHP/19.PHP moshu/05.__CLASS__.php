<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 16:07
 */

header('Content-type:text/html;charset=utf-8');
//当前类名。
class test{
    function _print(){
        echo '当前类名是：'.__CLASS__;
        echo '<br>';
        echo '当前函数的名：'.__FUNCTION__;
    }
}
$obj = new test();
$obj ->_print();