<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:40
 */
header('Content-type:text/html;charset=utf-8');
$favcolor = 'red';
switch($favcolor){
    case 'red':
        echo '你喜欢的是红色';break;
    case 'green':
        echo '你喜欢的绿色';break;
    case 'yellow':
        echo '你喜欢的是杭瑟';break;
    default:
        echo '你喜欢什么颜色';
}