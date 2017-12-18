<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 14:25
 */
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
echo '<br>';
var_dump($x == $y); //false
echo '<br>';
var_dump($x === $y); //false
echo '<br>';
var_dump($x != $y); //true
echo '<br>';
var_dump($x <> $y); //true
echo '<br>';
var_dump($x !== $y);    //true