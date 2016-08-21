<?php
return array(
	//'配置项'=>'配置值'
	'TEST_ADMIN'=>array(
        'NAME'=>'bh_website',//本地环境 admin 数据库appname
        
    ),

    'MODULE_ALLOW_LIST' => array (
        'Home',
        'Admin',
        'User' 
    ),

     //'配置项'=>'配置值'  
    'DB_TYPE'      =>  'mysql',     // 数据库类型  
    'DB_HOST'      =>  'localhost',     // 服务器地址  
    'DB_NAME'      =>  'firstproject',     // 数据库名  
    'DB_USER'      =>  'root',     // 用户名  
    'DB_PWD'       =>  '',     // 输入安装MySQL时设置的密码  
    'DB_PORT'      =>  '3306',     // 端口  
    'DB_PREFIX'    =>  'my_',     // 数据库表前缀  
    'DB_DSN'       =>  '',      // 数据库连接DSN 用于PDO方式
    'DEFAULT_MODULE' => 'Home', // 默认模块
    'PUBLIC_JS_URL' => 'Public/Js',       //公共JS路径
    'REDIS_HOST'   => '127.0.0.1',
    'REDIS_PORT'  => '6379'
);