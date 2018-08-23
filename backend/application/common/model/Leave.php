<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/23
 * Time: 21:18
 */

namespace app\common\model;


use think\Model;

class Leave extends Model
{
    protected $table = 'iycms_leave';

    public static function getAll(){

        $list = self::with('user')->select();

        return $list;
    }

    public function user(){
        return $this->hasOne('User','qq','qq');
    }
}