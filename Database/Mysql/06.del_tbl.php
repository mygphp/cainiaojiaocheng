<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 10:49
 */
require_once('dbconfig.php');
$sql = "DROP TABLE runoob_tbl";
$create_table = mysqli_query($link,$sql);
if(!$create_table) exit('数据表删除失败'.mysqli_error($link));
if($create_table) echo '数据表删除成功';
mysqli_close($link);