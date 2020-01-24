<?php
include 'header.php';

$top_new = $db->fetchall('new', '*', 'ORDER BY new_id DESC LIMIT 3');
// pre($top_new);
$current = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 9;
$offset = (($current - 1) * $limit) + 3;
$count = $db->fetchone('new', 'COUNT(*)')[0];
// pre($count);
$list_new = $db->fetchall('new', '*', "ORDER BY new_id DESC LIMIT $offset ,$limit");
// pre($list_new);
$config = [
	'current' => $current,
	'count' => $count,
	'limit' => $limit,
	'size' => 4,
	'class' => 'pagination'
];
$page = Page::getInstance($config);
$pages = $page->showPage();
$smarty->assign('list_new',$list_new);
$smarty->assign('pages',$pages);
// pre($pages);

$smarty->assign('top_new', $top_new);

$smarty->display('home/news.tpl');
include 'footer.php';