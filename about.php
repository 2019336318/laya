<?php
	include 'header.php';
	$ban = $db->fetchone('ban','*',"WHERE ban_type=3");
	// pre($ban);
	$about = $db->fetchone('about','*');
	// pre($about);
	$job = $db->fetchall('job');
	// pre($job);
	$contact = $db->fetchall('contact');
	// pre($contact);
	$smarty->assign('about',$about);
	$smarty->assign('contact',$contact);
	$smarty->assign('job',$job);
	$smarty->assign('ban',$ban);
	$smarty->display('home/about.tpl');

	include 'footer.php';