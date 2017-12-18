<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 16:57
 */
header('Content-type:text/html;charset=utf-8');
class Site{
    //成员变量
    var $url;
    var $title;
    //成员函数
    public function setUrl($par){
        $this->url = $par;
    }
    public function getUrl(){
        return $this->url.'<br>';
    }
    public function setTitle($par){
        $this->title = $par;
    }
    public function getTitle(){
        return $this->title.'<br>';
    }
}

$obj = new Site();
$obj -> setUrl('www.abc.com');
echo $obj -> getUrl();
$obj -> setTitle('标题');
echo $obj -> getTitle();