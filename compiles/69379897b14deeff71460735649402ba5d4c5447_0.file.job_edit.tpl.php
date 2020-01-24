<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 15:49:51
  from 'D:\phpstudy_pro\WWW\www.laya.com\views\admin\job_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e29501f419d84_79540417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69379897b14deeff71460735649402ba5d4c5447' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\www.laya.com\\views\\admin\\job_edit.tpl',
      1 => 1579765784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29501f419d84_79540417 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo STA;?>
css/bootstrap-fileinput.css">
    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">添加资讯</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">添加文章</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="article_list.html"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">职位名</span>
                                            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['new_edit']->value['job_name'];?>
" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">职业描述</span>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_edit']->value['job_desc'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                 <input type="text" name="desc[]" value=" <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                                                 " class="form-control">
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                           
                                            
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">职业要求</span>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_edit']->value['job_req'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                 <input type="text" name="req[]" value=" <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                                                 " class="form-control">
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                           
                                            
                                        </div>
                                    </div>
                                </div>


                                
                             
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" name="job" value="提交" class="submit btn btn-blue">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- End: Content -->
</div>
<!-- End: Main -->

<link type="text/css" rel="stylesheet" href="umeditor/themes/default/_css/umeditor.css">
<?php echo '<script'; ?>
 src="<?php echo STA;?>
js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo STA;?>
js/bootstrap-fileinput.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="umeditor/umeditor.config.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="umeditor/editor_api.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: false,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
