<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 17:32
 */
header('Content-type:text/html;charset=utf-8');

/*
 * 如果父类中的方法被声明为 final，则子类无法覆盖该方法。
 * 如果一个类被声明为 final，则不能被继承。
 */
class BaseClass {
    public function test() {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called"  . PHP_EOL;
    }
}

class ChildClass extends BaseClass {
    public function moreTesting() {
        echo "ChildClass::moreTesting() called"  . PHP_EOL;
    }
}
// 报错信息 Fatal error: Cannot override final method BaseClass::moreTesting()