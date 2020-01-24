<?php
      include '../config.ini.php';
      $new_type = $db->fetchall('new_type');
      $get = $_GET;
      $smarty->assign('cururl',$cururl);
      $smarty->assign('get',$get);
      $smarty->assign('new_type',$new_type);
      $smarty->display('admin/header.tpl');