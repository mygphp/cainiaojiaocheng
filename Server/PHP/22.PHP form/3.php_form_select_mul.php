<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19
 * Time: 9:07
 */
header('Content-type:text/html;charset=utf-8');
$p = isset($_POST['p']) ? $_POST['p'] : '';
if($p){
    $sites = array('cainiao'=>'菜鸟','github'=>'git','mayun'=>'码云');
    foreach($p as $value){
        echo $sites[$value].'<br>';
    }
}else {
    ?>
    <form action="" method="post">
        <select name="p[]" id="" multiple="multiple">
            <option value="cainiao">cainiao</option>
            <option value="github">github</option>
            <option value="mayun">mayun</option>
        </select>
        <br><br>
        <input type="submit" value="提交">
    </form>
    <?php
}
    ?>