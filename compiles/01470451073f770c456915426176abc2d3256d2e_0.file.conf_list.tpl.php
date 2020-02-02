<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 20:19:18
  from 'D:\phpstudy_pro\WWW\www.laya.com\views\admin\conf_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e341b468b3bd7_90351555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01470451073f770c456915426176abc2d3256d2e' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\www.laya.com\\views\\admin\\conf_list.tpl',
      1 => 1580473155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e341b468b3bd7_90351555 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- End: Sidebar -->

<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">资讯管理</li>
      </ol>
    </div>
    <div class="container">
  
  
  
  
  
  
  
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel-title">资讯列表</div>
            </div>
            <form action="" method="post">
              <div class="panel-body">
                <h2 class="panel-body-title">互联网</h2>
                <table class="table table-striped table-bordered table-hover dataTable">
                  <tr class="active">
                   
                    <th>ID</th>
                    <th>名字</th>
                    <th>图片</th>
                    <th>图片</th>
                    <th>图片</th>
                    <th width="200">操作</th>
                  </tr>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_new']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <tr class="success">
                    
  
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['conf_copy'];?>

                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['conf_savecase'];?>

                      </td>
                     
                      <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['conf_email'];?>
" alt="" width="180px"></td>
                      <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['conf_qq'];?>
" alt="" width="180px"></td>
                      <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['conf_wechat'];?>
" alt="" width="180px"></td>
                      <td>
                        <div class="btn-group">
                          <a href="conf_edit.php" class="btn btn-default btn-gradient"><span
                              class="glyphicons glyphicon-pencil"></span></a>
                        
                        </div>
  
                      </td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <!-- <tr class="success">
                      <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                      <td>再谈互联网给传统金融带来的颠覆</td>
                      <td>2015-01-10</td>
                      <td>
                        <div class="btn-group">
                          <a href="new_edit.html" class="btn btn-default btn-gradient"><span
                              class="glyphicons glyphicon-pencil"></span></a>
                          <a onclick="return confirm('确定要删除吗？');" href="#"
                            class="btn btn-default btn-gradient dropdown-toggle"><span
                              class="glyphicons glyphicon-trash"></span></a>
                        </div>
  
                      </td>
                      </tr>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>再谈互联网给传统金融带来的颠覆</td>
                        <td>2015-01-10</td>
                        <td>
                          <div class="btn-group">
                            <a href="new_edit.html" class="btn btn-default btn-gradient"><span
                                class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="#"
                              class="btn btn-default btn-gradient dropdown-toggle"><span
                                class="glyphicons glyphicon-trash"></span></a>
                          </div>
  
                        </td>
                      </tr> -->
                </table>
  
                <div class="pull-left">
                  <button type="submit" class="btn btn-default btn-gradient pull-right delall"><span
                      class="glyphicons glyphicon-trash"></span></button>
                </div>
  
                <div class="pull-right">
                  <!-- <ul class="pagination" id="paginator-example">
                            <li><a href="#">&lt;</a></li>
                            <li><a href="#">&lt;&lt;</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&gt;</a></li>
                            <li><a href="#">&gt;&gt;</a></li>
                          </ul> -->
       
                </div>
  
              </div>
            </form>
          </div>
        </div>
      </div>
  
  
  
  
  
    </div>
  </section>
  <!-- End: Content -->
  </div>
  <!-- End: Main -->
  </body>
  
  </html><?php }
}
