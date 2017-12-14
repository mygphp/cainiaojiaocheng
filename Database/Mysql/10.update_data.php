<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 11:47
 */
require_once ('dbconfig.php');
$sql = 'UPDATE runoob_tbl SET runoob_title="学习 Python" WHERE runoob_id=3';
$updateData = mysqli_query($link,$sql);
if(!$updateData) exit('数据更新失败'.mysqli_error($link));
if($updateData) echo '数据更新成功';
mysqli_close($link);
'DELETE FROM runoob_tbl
        WHERE runoob_id=3';