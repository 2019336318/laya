<?php

// echo dirname(__FILE__);

define('ROOT', str_replace('\\', '/', dirname(__FILE__)) . '/'); //绝对路径，避免无法访问的情况
include ROOT . 'includes/libs/Smarty.class.php';
include 'includes/function.php';
include 'includes/class/MysqlDb.class.php';
include 'includes/class/Page.class.php';
// 静态后台所有样式加载
define('STA', 'http://' . $_SERVER['HTTP_HOST'] . '/views/admin/');
define('TA','ly_');
// http://www.laya.com/views/admin/
// pre('http://'.$_SERVER['HTTP_HOST'].'/views/adimn/');
//当前页码
$cururl =  pathinfo($_SERVER['SCRIPT_NAME'])['basename'];
// pre($cururl);

$smarty = new Smarty();

$smarty->setTemplateDir(ROOT . 'views/'); //设置模板文件目录
$smarty->setCompileDir(ROOT . 'compiles/');  //设置编译文件目录

$smarty->setCacheDir(ROOT . 'smarty_cache/'); //设置缓存文件目录

//$smarty->caching = false; 	//是否使用缓存，项目在调试期间，不建议启用缓存
$smarty->setCaching(false);
//$smarty->cache_lifetime=60*60*24; // 设置缓存时间


//左右边界符，默认为{}
$smarty->setLeftDelimiter("<{");
$smarty->setRightDelimiter("}>");


$config = [
	'host' => 'localhost',
	'user' => 'root',
	'pwd' => '123456',
	'dbname' => 'laya',
	'charset' => 'utf8'
];
$db = MysqlDb::link($config);
