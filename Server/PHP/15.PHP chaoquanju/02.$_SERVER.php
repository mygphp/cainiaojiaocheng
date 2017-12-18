<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 15:16
 */
/*
 * $_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
 * 这个数组中的项目由 Web服务器创建。不能保证每个服务器都提供全部项目；服务器可能会忽略一些，或者提供一些没有在这里列举出来的项目。
 * 以下实例中展示了如何使用$_SERVER中的元素:实例
 */

echo $_SERVER['PHP_SELF'];          //当前执行脚本的文件名
echo "<br>";
echo $_SERVER['SERVER_NAME'];       //当前执行脚本的服务器主机名
echo "<br>";
echo $_SERVER['HTTP_HOST'];         //当前请求host中的内容
echo "<br>";
echo $_SERVER['HTTP_REFERER'];      //前一页的地址
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];   //
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];       //当前脚本的路径