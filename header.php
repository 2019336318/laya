<?php
	include 'config.ini.php';
    $nav_info = $db->fetchall('nav');
    $smarty->assign('nav_info',$nav_info);
	$smarty->display('home/header.tpl');