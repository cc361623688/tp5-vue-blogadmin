<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


return [
//    'admin/:x$' => 'admin/index/index',
    //后台admin 管理模块的规则
    '[admin]' => [
        ':controller/:action' => ['admin/:controller/:action'],
        ':controller/' => ['admin/login/index'],
    ],
    //前台api 调用模块的规则
    '[api]' => [
        ':controller/:action' => ['api/:controller/:action'],
        ':controller/' => ['api/:controller/index'],
    ],
    //前台vue html 页面的规则
    ':x$'   => 'home/index/index',
    ':x/:x$'   => 'home/index/index',
    ':x/:x/:x$'   => 'home/index/index',
];
