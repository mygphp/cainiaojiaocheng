<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19
 * Time: 8:54
 */
header('Content-type:text/html;charset=utf-8');
//htmlspecialchars() 函数把预定义的字符转换为 HTML 实体。
$p = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if($p){
    if($p == 'cainiao'){
        echo '菜鸟教程';
    }else if($p == 'github'){
        echo 'github';
    }else{
        echo '码云';
    }
}else {
    ?>
    <form action="" method="get">
        <select name="q" id="">
            <option value="cainiao">cainiao</option>
            <option value="github">github</option>
            <option value="mayun">mayun</option>
        </select>
        <br>
        <input type="submit" value="提交">
    </form>
<?php
    }
?>