<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 20:00:33
  from 'D:\phpstudy_pro\WWW\www.laya.com\views\admin\conf_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3416e1654e21_09076380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3f118903b7b724cff3f0e9eb79bd676c56acc3f' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\www.laya.com\\views\\admin\\conf_edit.tpl',
      1 => 1580472031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3416e1654e21_09076380 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    <a href="friend_list.php"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">版权</span>
                                            <input type="text" name="copy" value="<?php echo $_smarty_tpl->tpl_vars['new_edit']->value['conf_copy'];?>
" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">备案</span>
                                            <input type="text" name="beian" value="<?php echo $_smarty_tpl->tpl_vars['new_edit']->value['conf_savecase'];?>
" class="form-control">
                                        </div>
                                    </div>
                                 
                                </div>


                                
                                <div class="form-group col-md-12">
                                        <div class="h4">图片预览</div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<?php echo $_smarty_tpl->tpl_vars['new_edit']->value['conf_email'];?>
" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">选择文件</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="email" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="h4">qq图片预览</div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<?php echo $_smarty_tpl->tpl_vars['new_edit']->value['conf_qq'];?>
" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">选择文件</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="qq" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="h4">wechat图片预览</div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<?php echo $_smarty_tpl->tpl_vars['new_edit']->value['conf_wechat'];?>
" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">选择文件</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="wechat" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
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
