<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 11:04
 */
require_once ('dbconfig.php');
$sql = 'SELECT runoob_id, runoob_title, runoob_author, submission_date FROM runoob_tbl';
$selectDB = mysqli_query($link,$sql);
if(!$selectDB) exit('无法获取数据'.mysqli_error($link));
echo '<h2>菜鸟教程 mysqli_fetch_array 测试<h2>';
echo '<table border="1"><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
/*
 * mysqli_fetch_array()从结果集中取得一行作为关联数组，或数字数组，或二者兼有
 * 可选。规定返回哪种结果。可能的值：
    MYSQL_ASSOC - 关联数组
    MYSQL_NUM - 数字数组
    MYSQL_BOTH - 默认。同时产生关联和数字数组
 */
while($row = mysqli_fetch_array($selectDB,MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['runoob_id']}</td> ".
        "<td>{$row['runoob_title']} </td> ".
        "<td>{$row['runoob_author']} </td> ".
        "<td>{$row['submission_date']} </td> ".
        "</tr>";
}
echo '</table>';
echo '<hr/>';
echo '<h2>菜鸟教程 mysqli_fetch_assoc 测试<h2>';
echo '<table border="1"><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
$selectDB1 = mysqli_query($link,$sql);
/*
 * mysqli_fetch_assoc()从结果集中取得一行作为关联数组
 */
while($row1 = mysqli_fetch_assoc($selectDB1))
{
    echo "<tr><td> {$row1['runoob_id']}</td> ".
        "<td>{$row1['runoob_title']} </td> ".
        "<td>{$row1['runoob_author']} </td> ".
        "<td>{$row1['submission_date']} </td> ".
        "</tr>";
}
echo '</table>';
echo '<hr/>';
echo '<h2>菜鸟教程 mysqli_fetch_array 测试<h2>';
echo '<table border="1"><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
$selectDB2 = mysqli_query($link,$sql);
/*
 * mysqli_fetch_assoc()从结果集中取得一行作为数字数组
 */
while($row2 = mysqli_fetch_array($selectDB2, MYSQLI_NUM))
{
    echo "<tr><td> {$row2[0]}</td> ".
        "<td>{$row2[1]} </td> ".
        "<td>{$row2[2]} </td> ".
        "<td>{$row2[3]} </td> ".
        "</tr>";
}
echo '</table>';
mysqli_free_result($selectDB);  //释放内存
mysqli_free_result($selectDB1);
mysqli_free_result($selectDB2);
mysqli_close($link);