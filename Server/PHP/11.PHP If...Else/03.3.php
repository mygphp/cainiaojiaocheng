<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:37
 */
$t = date('H');
if($t < '10'){
    echo 'goods moring';
}else if ($t < '20'){
    echo 'have a good day!';
}else{
    echo 'have a good night';
}