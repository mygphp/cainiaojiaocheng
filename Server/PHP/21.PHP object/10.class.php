<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 17:34
 */
header('Content-type:text/html;charset=utf-8');
/*
 * PHP 不会在子类的构造方法中自动的调用父类的构造方法。
 * 要执行父类的构造方法，需要在子类的构造方法中调用
 */

class BaseClass {
    function __construct() {
        print "BaseClass 类中构造方法" . PHP_EOL;
    }
}
class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
        print "SubClass 类中构造方法" . PHP_EOL;
    }
}
class OtherSubClass extends BaseClass {
    // 继承 BaseClass 的构造方法
}

// 调用 BaseClass 构造方法
$obj = new BaseClass();

// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();

// 调用 BaseClass 构造方法
$obj = new OtherSubClass();
