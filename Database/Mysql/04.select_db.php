<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 10:40
 */
require_once('dbconfig.php');

mysqli_select_db($link,'runoob');
mysqli_close($link);