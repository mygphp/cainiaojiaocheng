<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 9:40
 */
header("Content-type: text/html; charset=utf-8");
//mysql服务器的基本信息
$dbhost = '127.0.0.1';      //mysql服务器的主机地址
$dbusername = 'root';       //mysql用户名
$dbpassword = '123456';     //mysql用户密码

//php连接mysql服务器
$link = mysqli_connect($dbhost,$dbusername,$dbpassword);
if(!$link) echo '数据库连接失败'.mysqli_error();
if($link) echo '数据库连接成功';
mysqli_close($link);