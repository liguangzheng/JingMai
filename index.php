<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if (version_compare ( PHP_VERSION, '5.3.0', '<' ))
    die ( 'require PHP > 5.3.0 !' );
    
    // 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define ( 'APP_DEBUG', True );

// 定义运行时目录
define ( 'RUNTIME_PATH', './Runtime/' );

// 定义公共配置目录
define ( 'COMMON_PATH', './Common/' );

// 绑定Admin模块到当前入口文件，用于生成新模块
// define ( 'BIND_MODULE', 'Install' );

// 默认加载应用目录
define ( 'APP_PATH', './Application/' );

// 默认加载模块
$_GET ['m'] = 'Home';

// 默认加载控制器
$_GET['c'] = 'Index';

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';