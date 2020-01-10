<?php
include 'function.php';
define('ROOT', 'http://' . $_SERVER['HTTP_HOST']);
define('STA', ROOT . '/static');
define('IMG', STA . '/images');
define('TA', 'laya_');
// $conn  = conn('laya');
$host = 'localhost';
$user = 'root';
$pwd = '123456';
$dbname = 'laya';
$conn = new Db($host, $user, $pwd, $dbname);
// pre($conn);
// $conn = $db->conn;

// 连接数据库

