<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/20
 * Time: 16:10
 */
header('Content-type:text/html;charset=utf-8');
$file_path = 'welcome.txt';
//file_exists() 函数用于检查文件或路径是否存在
if(file_exists($file_path)){
    //fopen() 函数用于打开文件
    $file = fopen($file_path,'r') or exit("Unable to open file!");
    //feof() 函数检测是否已到达文件末尾（EOF）。
    while(!feof($file)) {
        //fgets() 函数从文件指针中读取一行
        echo fgets($file). "<br>";
    }
}
//fclose() 函数用于关闭打开的文件
fclose($file);
