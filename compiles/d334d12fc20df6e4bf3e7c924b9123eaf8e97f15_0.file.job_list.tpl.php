<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-24 10:24:27
  from 'D:\phpstudy_pro\WWW\www.laya.com\views\admin\job_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e2a555bb5daa1_48804732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd334d12fc20df6e4bf3e7c924b9123eaf8e97f15' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\www.laya.com\\views\\admin\\job_list.tpl',
      1 => 1579832664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2a555bb5daa1_48804732 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <!-- End: Sidebar -->   

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
                  <a href="job_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加文章</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">互联网</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>ID</th>
                        <th>职位名</th>
                        
                        <th width="200">操作</th>
                      </tr>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_new']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                      <tr class="success">
                          <td class="text-center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['job_id'];?>
" name="idarr[]" class="cbox"></td>
                          
                          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['job_id'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>
</td>
                          
                          <td>
                            <div class="btn-group">
                              <a href="job_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['job_id'];?>
" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                              <a onclick="return confirm('确定要删除吗？');" href="job_list.php?del=<?php echo $_smarty_tpl->tpl_vars['v']->value['job_id'];?>
" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                            </div>
                          
                          </td>
                        </tr>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   


                      <!-- <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>再谈互联网给传统金融带来的颠覆</td>
                        <td>2015-01-10</td>
                        <td>
                          <div class="btn-group">
                            <a href="new_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        
                        </td>
                      </tr>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>再谈互联网给传统金融带来的颠覆</td>
                        <td>2015-01-10</td>
                        <td>
                          <div class="btn-group">
                            <a href="new_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        
                        </td>
                      </tr> -->
                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
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
