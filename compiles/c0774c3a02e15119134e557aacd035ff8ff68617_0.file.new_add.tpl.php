<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 14:15:16
  from 'D:\phpstudy_pro\WWW\www.laya.com\views\admin\new_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e23f3f46eefd4_24455523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0774c3a02e15119134e557aacd035ff8ff68617' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\www.laya.com\\views\\admin\\new_add.tpl',
      1 => 1579414515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e23f3f46eefd4_24455523 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <form action="new_add.php" method="post" class="cmxform" enctype="multipart/form-data">
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
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">分类</span>
                                            <select name="type" id="standard-list1" class="form-control">
                                                <!-- <option>请选择</option> -->
                                                <!-- <option>科技</option>
                                                <option>文化</option>
                                                <option>生活</option> -->
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">标题</span>
                                            <input type="text" name="title" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">作者</span>
                                            <input type="text" name="author" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group col-md-12">
                                        <div class="h4">图片预览</div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<?php echo STA;?>
images/noimage.png" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">选择文件</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="pic1" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
                                    </div>

                                <div class="form-group col-md-12">
                                    <?php echo '<script'; ?>
 type="text/plain" id="myEditor" style="width:100%;height:200px;">
					<p></p>

                                    <?php echo '</script'; ?>
>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" value="提交" class="submit btn btn-blue">
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
<link type="text/css" rel="stylesheet" href="<?php echo STA;?>
umeditor/themes/default/_css/umeditor.css">
<?php echo '<script'; ?>
 src="<?php echo STA;?>
js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo STA;?>
js/bootstrap-fileinput.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo STA;?>
umeditor/umeditor.config.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo STA;?>
umeditor/editor_api.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo STA;?>
umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: true,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
