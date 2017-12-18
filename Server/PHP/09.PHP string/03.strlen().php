<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:08
 */
/*
 * strlen() 函数返回字符串的长度（字符数）。
 * strlen() 常常用在循环和其他函数中，因为那时确定字符串何时结束是很重要的。
 */
echo strlen('hello world!');
echo '<br>';
//一个中文字符占3个字符
echo strlen('中文字符');
echo '<br/>';
//统计中文字符的个数
echo mb_strlen('中文字符','utf-8');