<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 10:44
 */
require_once('dbconfig.php');
$sql = "CREATE TABLE runoob_tbl( ".
    "runoob_id INT NOT NULL AUTO_INCREMENT, ".
    "runoob_title VARCHAR(100) NOT NULL, ".
    "runoob_author VARCHAR(40) NOT NULL, ".
    "submission_date DATE, ".
    "PRIMARY KEY ( runoob_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
$create_table = mysqli_query($link,$sql);
if(!$create_table) exit('数据表创建失败'.mysqli_error($link));
if($create_table) echo '数据表创建成功';
mysqli_close($link);