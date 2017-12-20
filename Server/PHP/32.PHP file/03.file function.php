<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/20
 * Time: 16:36
 */
header('Content-type:text/html;charset=utf-8');
$file_path = 'welcome.txt';
//basename() 函数返回路径中的文件名部分。
echo basename($file_path);
echo '<br>';
//第二个参数：规定文件扩展名。如果文件有名有文件扩展名，将不会显示这个扩展名。
echo basename($file_path,'.txt');
echo '<hr>';
//copy() 函数复制文件。
//echo copy($file_path,'copy1.txt');
echo '<hr>';
//unlink() 函数删除文件
$file_path1 = 'copy.txt';
/*if(!unlink($file_path1)){
    echo '不能删除文件';
}else{
    echo '删除文件成功';
}*/
echo '<hr>';
//dirname() 函数返回路径中的目录名称部分
echo dirname($file_path);
echo '<th>';
//disk_free_space() 函数返回指定目录的可用空间，以字节为单位。
echo disk_free_space('G:');
echo '<hr>';
//disk_total_space() 函数返回指定目录的磁盘总容量，以字节为单位。
echo disk_total_space('G:');
echo '<hr>';
//fgetss() 函数从打开的文件中返回一行，并过滤掉 HTML 和 PHP 标签。
$file = fopen($file_path,'r') or exit('不能打开此文件');
echo fgetss($file);
echo '<hr>';
//file() 函数把整个文件读入一个数组中。数组中的每个元素都是文件中相应的一行，包括换行符在内。
print_r(file($file_path));
echo '<hr>';
//file_get_contents() 把整个文件读入一个字符串中。
echo file_get_contents($file_path);
echo '<hr>';
//file_put_contents() 函数把一个字符串写入文件中。
//echo file_put_contents("test.txt","Hello World. Testing!");
echo '<hr>';
//fileatime() 函数返回指定文件的上次访问时间。
echo fileatime($file_path);
echo '<hr>';
//filectime() 函数返回指定文件的上次修改时间。
echo filectime($file_path);
echo '<hr>';
//fileowner() 函数返回指定文件的用户 ID（所有者）。
echo fileowner($file_path);
echo '<hr>';
//fileperms() 函数返回文件或目录的权限。
echo fileperms($file_path);
echo '<hr>';
//filesize() 函数返回指定文件的大小。
echo filesize($file_path);
echo '<hr>';
//filetype() 函数返回指定文件或目录的类型。
echo filetype($file_path);
echo '<hr>';
//fread() 函数读取打开的文件。
$contents = fread($file,'10');
echo $contents;
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<br>';
echo '<br>';
echo '<hr>';
