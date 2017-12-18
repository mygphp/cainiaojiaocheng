<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:46
 */
header('Content-type:text/html;charset=utf-8');
$cars=array("Volvo","BMW","Toyota");
echo "你喜欢喜{$cars[0]},{$cars[1]},{$cars[2]}";