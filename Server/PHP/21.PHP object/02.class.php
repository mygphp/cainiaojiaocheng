<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 17:06
 */
header('Content-type:text/html;charset=utf-8');
class descClass{
    function __construct(){
        echo '创建构造函数';
        $this->name = '123456';
        echo '<br>';
    }
    function __destruct(){
        echo '销毁:'.$this->name;
    }
}
$obj = new descClass();