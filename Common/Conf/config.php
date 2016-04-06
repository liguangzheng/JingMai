<?php
return array (
        /**
         * start<<默认操作，一般不执行>>
         */
        // 设置禁止访问的模块列表
        'MODULE_DENY_LIST' => array (
                'Common',
                'Runtime' 
        ),
        // 设置允许访问的模块列表
        'MODULE_ALLOW_LIST' => array (
                'Home',
                'Admin',
                'Mobile',
                'Install' 
        ),
        // 设置默认访问模块
        'DEFAULT_MODULE' => 'Home',
        // 设置不区分URL大小写
        'URL_CASE_INSENSITIVE' => true,
        // 设置URL的PATHINFO模式下的默认分隔符（默认为'/'）
        'USER_PATHINFO_DEPR' => '/',
        // 设置URL普通模式下的m/c/a使用
        'VAR_MODULE' => 'm',
        'VAR_CONTROLLER' => 'c',
        'VAR_ACTION' => 'a',
        /**
         * end<<默认操作，一般不执行>>
         */
        
        /* 数据库设置 */
        'DB_TYPE' => 'mysql', // 数据库类型
        'DB_HOST' => '127.0.0.1', // 服务器地址
        'DB_NAME' => 'jingmai', // 数据库名
        'DB_USER' => 'root', // 用户名
        'DB_PWD' => '', // 密码
        'DB_PORT' => '3306', // 端口
        'DB_PREFIX' => 'jingmai_',
        
        // 开启页面调试工具
        'SHOW_PAGE_TRACE' => true 
);

