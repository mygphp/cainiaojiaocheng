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
$link = mysqli_connect($dbhost,$dbusername,$dbpassword) or die('mysql连接失败');

//设置字符集
$charsql = "set names utf8";
$charq = mysqli_query($link,$charsql);
if(!$charq) die('字符集设置失败'.mysqli_error($link));

//选择数据库
mysqli_select_db($link,'runoob');