<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'study',
    'DB_USER' => 'root',
    'DB_PWD' => '',
    'DB_PORT' => 3306,
    'DB_PREFIX' => 'study_',
    'SHOW_PAGE_TRACE' => true,   //开启页面调试功能

    'MODULE_ALLOW_LIST' => array('Home', 'Admin'),   //设置可访问模块
    'DEFAULT_MODULE' => 'Home',  //设置默认访问模块

    'THINK_EMAIL' => array(
        'SMTP_HOST' => 'smtp.163.com', //SMTP服务器
        'SMTP_PORT' => '465', //SMTP服务器端口
        'SMTP_USER' => '18340818693@163.com', //SMTP服务器用户名
        'SMTP_PASS' => 'lc632718', //SMTP服务器密码   就是163邮箱的客户端授权密码
        'FROM_EMAIL' => '18340818693@163.com', //发件人EMAIL
        'FROM_NAME' => '邮箱验证', //发件人名称
        'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
        'REPLY_NAME' => '邮箱验证', //回复名称（留空则为发件人名称）
    ),

);