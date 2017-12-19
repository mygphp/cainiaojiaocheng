<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19
 * Time: 9:17
 */
header('Content-type:text/html;charset=utf-8');
$p = isset($_GET['p']) ? htmlspecialchars($_GET['p']) : '';
if($p){
    if($p == 'cainiao') echo '菜鸟教程';
    if($p == 'git') echo 'github';
    if($p == 'mayun') echo '码云';
}else {
    ?>
    <form action="" method="get">
        <input type="radio" name="p" value="cainiao">菜鸟<br>
        <input type="radio" name="p" value="git">github<br>
        <input type="radio" name="p" value="mayun">码云<br>
        <input type="submit" value="提交">
    </form>
    <?php
}
?>
