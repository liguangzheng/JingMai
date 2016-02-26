<?php
return array (
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
        'URL_CASE_INSENSITIVE' => true 
);

