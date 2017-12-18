<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 17:13
 */
header('Content-type:text/html;charset=utf-8');
class MyClass{
    public $public1 = 'public';
    protected $prodected1 = 'prodected';
    private $private1 = 'private';

    function printHello(){
        echo $this->public1;
        echo '<br>';
        echo $this->prodected1;
        echo '<br>';
        echo $this->private1;
        echo '<br>';
    }
}

$obj = new MyClass();
echo $obj -> public1;
echo '<br>';
//echo $obj -> prodected1;
echo '<br>';
//echo $obj -> private1;
echo '<br>';
echo $obj -> printHello();

class MyClass2 extends MyClass
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected1 = 'Protected2';

    function printHello()
    {
        echo $this->public1;
        echo $this->protected1;
        //echo $this->private1;
    }
}

$obj2 = new MyClass2();
echo $obj2->public1; // 这行能被正常执行
//echo $obj2->private1; // 未定义 private
//echo $obj2->protected; // 这行会产生一个致命错误
$obj2->printHello(); // 输出 Public、Protected2 和 Undefined
