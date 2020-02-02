<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 16:49:22
  from 'D:\phpstudy_pro\WWW\www.laya.com\views\admin\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33ea12c6b296_68086363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd61849b6d5e07017d74bb2482cca9e260557eb' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\www.laya.com\\views\\admin\\header.tpl',
      1 => 1580460559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e33ea12c6b296_68086363 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/pages.css">
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/plugins.css">
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/responsive.css">

  <!-- Boxed-Layout CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/boxed.css">

  <!-- Demonstration CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/demo.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo STA;?>
css/custom.css">

  <!-- Core Javascript - via CDN -->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo STA;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo STA;?>
js/jquery-ui.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo STA;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo STA;?>
js/uniform.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo STA;?>
js/main.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo STA;?>
js/custom.js"><?php echo '</script'; ?>
>
</head>

<body>
  <!-- Start: Header -->
  <header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
    <div class="pull-left"> <a class="navbar-brand" href="#">
        <div class="navbar-logo"><img src="<?php echo STA;?>
images/logo.png" alt="logo"></div>
      </a> </div>
    <div class="pull-right header-btns">
      <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
      <a href="login.html" class="btn btn-default btn-gradient" type="button"><span
          class="glyphicons glyphicon-log-out"></span> 退出</a>
    </div>
  </header>
  <!-- End: Header -->

  <!-- Start: Main -->
  <div id="main">
    <!-- Start: Sidebar -->
    <aside id="sidebar" class="affix">
      <div id="sidebar-search">
        <div class="sidebar-toggle"><span class="glyphicon glyphicon-resize-horizontal"></span></div>
      </div>
      <div id="sidebar-menu">
        <ul class="nav sidebar-nav">
          <li>
            <a href="index.php"><span class="glyphicons glyphicon-home"></span><span
                class="sidebar-title">后台首页</span></a>
          </li>

          <li class="<?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'new_list.php') {?>
           active
            <?php }?>"> <a href="#sideEight" class="accordion-toggle 
          <?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'new_list.php') {?>
          menu-open
          <?php }?>

          "><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">资讯管理</span><span
                class="caret"></span></a>
            <ul class="nav sub-nav" id="sideEight" style="">
           
              <li class="
            <?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'new_list.php' && $_smarty_tpl->tpl_vars['get']->value['type'] == '') {?>
            active 
            <?php }?>
            "><a href="new_list.php"><span class="glyphicons glyphicon-record"></span> 全部资讯</a></li>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_type']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li class="
                <?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'new_list.php' && $_smarty_tpl->tpl_vars['get']->value['type'] == $_smarty_tpl->tpl_vars['v']->value['type_id']) {?>
            active
            <?php }?>
                "><a href="new_list.php?type=<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"><span class="glyphicons glyphicon-record"></span>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>

                  </a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        </li>

        <li class="<?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'game_list.php') {?>
            active
             <?php }?>"> <a href="#sideEight" class="accordion-toggle 
           <?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'game_list.php') {?>
           menu-open
           <?php }?>
 
           "><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">游戏管理</span><span
                 class="caret"></span></a>
             <ul class="nav sub-nav" id="sideEight" style="">
            
                <li class="
                <?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'game_list.php') {?>
                active
                 <?php }?>
                " ><a href="game_list.php?game=1"><span class="glyphicons glyphicon-record"></span> 游戏</a></li>
                <li><a href="game_list.php?game=2"><span class="glyphicons glyphicon-record"></span> 精品游戏</a></li>
         </ul>
         </li>

         <li class="
         <?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'job_list.php') {?>
         active 
         <?php }?>
         ">
          <a href="job_list.php"><span class="glyphicons glyphicon-list"></span><span
              class="sidebar-title">职位管理</span></a>
        </li>

        <li class="
        <?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'friend_list.php') {?>
        active 
        <?php }?>
        ">
         <a href="friend_list.php"><span class="glyphicons glyphicon-list"></span><span
             class="sidebar-title">合作伙伴管理</span></a>
       </li>

       <li class="
       <?php if ($_smarty_tpl->tpl_vars['cururl']->value == 'conf_list.php') {?>
       active 
       <?php }?>
       ">
        <a href="conf_list.php"><span class="glyphicons glyphicon-list"></span><span
            class="sidebar-title">网址配置管理</span></a>
      </li>

        <li>
          <a href="cate_list.html"><span class="glyphicons glyphicon-list"></span><span
              class="sidebar-title">文章分类管理</span></a>
        </li>
        <li>
          <a href="user_list.html"><span class="glyphicons glyphicon-list"></span><span
              class="sidebar-title">系统管理员</span></a>
        </li>
        </ul>
      </div>
    </aside>
    <!-- End: Sidebar --><?php }
}
