<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 11:52
 */
require_once ('dbconfig.php');
$sql = 'DELETE FROM runoob_tbl WHERE runoob_id=3';
$deleteData = mysqli_query($link,$sql);
if(!$deleteData) exit('数据删除失败'.mysqli_error($link));
if($deleteData) echo '数据删除成功';
mysqli_close($link);
