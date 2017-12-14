<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 10:14
 */
require_once('dbconfig.php');
$sql = 'create database if not exists runoob';
$createdb = mysqli_query($link,$sql);
if(!$createdb) echo '创建数据库失败'.mysqli_error($link);
if($createdb) echo '创建数据库成功';
mysqli_close($link);