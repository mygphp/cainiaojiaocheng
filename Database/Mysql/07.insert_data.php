<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 10:51
 */
require_once('dbconfig.php');

$runoob_title = '学习 Python';
$runoob_author = 'RUNOOB.COM';
$submission_date = '2016-03-06';

$sql = "insert into runoob_tbl (runoob_title,runoob_author,submission_date) values ('学习 PHP','菜鸟教程',NOW()),('学习 MySQL','菜鸟教程',NOW()),('JAVA 教程','RUNOOB.COM','2016-05-06'),('$runoob_title','$runoob_author','$submission_date')";
$insertData = mysqli_query($link,$sql);
if(!$insertData) exit('数据插入失败'.mysqli_error($link));
if($insertData) echo '数据插入成功';
mysqli_close($link);