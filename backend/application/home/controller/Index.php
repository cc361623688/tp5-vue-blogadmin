<?php
namespace app\home\controller;
use think\Controller;

//前台vue 所用的控制器

class Index extends Controller{
    public function index(){
    	//$this->redirect('/admin');
//        $a=@(1+2+'A+3');
//        echo $a;
        return view();
    }
}
