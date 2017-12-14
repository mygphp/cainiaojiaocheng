<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 10:35
 */
require_once('dbconfig.php');

$sql = 'drop database runoob';

$dropdb = mysqli_query($link,$sql);
if(!$dropdb) echo '删除数据库失败'.mysqli_error($link);
if($dropdb) echo '删除数据库成功';
mysqli_close($link);