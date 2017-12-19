<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19
 * Time: 8:51
 */
header('Content-type:text/html;charset=utf-8');
echo '你的名字是：'.$_POST['name'];
echo '<br>';
echo '你的年龄是：'.$_POST['age'];