<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 13:46
 */
/*
 * 在 PHP 中，对象必须声明。
 * 首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构
 */
class Car{
    var $color;
    function Car($color = "green"){
        $this->color = $color;
    }
    function vartColor(){
        return $this->color;
    }
}
$obj = new Car();
echo $obj->vartColor();