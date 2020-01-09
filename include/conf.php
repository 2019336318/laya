<?php
    include 'function.php';
    define('ROOT','http://'.$_SERVER['HTTP_HOST']);
    define('STA',ROOT.'/static');
    define('IMG',STA.'/images');
    define('TA','laya_');
    $conn  = conn('laya');