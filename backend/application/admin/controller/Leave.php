<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\Leave as leaveModel;
use think\Log;


class Leave extends Common{
    //获取留言列表
	public function index(){
	    $list = leaveModel::getAll();
		$this->assign("list",$list);
		return view();
	}
}