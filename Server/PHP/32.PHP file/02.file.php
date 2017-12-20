<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/20
 * Time: 16:29
 */
header('Content-type:text/html;charset=utf-8');
$file_path = 'welcome.txt';
if(file_exists($file_path)){
    $file = fopen($file_path,'r') or exit('不能打开此文件');
    while(!feof($file)){
        //fgetc() 函数一次读取一个字符
        echo fgetc($file);
    }
}
fclose($file);