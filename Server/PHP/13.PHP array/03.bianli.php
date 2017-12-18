<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:50
 */
$cars=array("Volvo","BMW","Toyota");
$len = count($cars);

for($i = 0;$i < $len; $i ++){
    echo $cars[$i];
    echo '<br>';
}