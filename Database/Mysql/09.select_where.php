<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 11:29
 */
require_once ('dbconfig.php');
$sql = "SELECT runoob_id, runoob_title, runoob_author, submission_date FROM runoob_tbl WHERE runoob_author = 'RUNOOB.COM'";
$selectData = mysqli_query($link,$sql);
if(!$selectData) exit('无法读取数据'.mysqli_error($link));
echo '<h2>菜鸟教程 MySQL WHERE 子句测试<h2>';
echo '<table border="1"><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
while($row = mysqli_fetch_array($selectData,MYSQLI_ASSOC)){
    echo "<tr><td>{$row['runoob_id']}</td>";
    echo "<td>{$row['runoob_title']}</td>";
    echo "<td>{$row['runoob_author']}</td>";
    echo "<td>{$row['submission_date']}</td></tr>";
}
echo '</table>';
mysqli_free_result($selectData);
mysqli_close($link);