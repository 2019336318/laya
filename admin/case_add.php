<?php
include 'header.php';
if (isset($_POST['add']) && $_FILES['logo']['error'] == 0 && $_FILES['cover']['error'] == 0) {
    // pre($_POST);
    // pre($_FILES);
    $logo=upload('logo','uploads/case/logo');
    $logo = $logo['path'];
    $cover=upload('cover','uploads/case/cover');
    $cover = $cover['path'];

    $add_arr = array(
        'case_name' => $_POST['name'],
        'case_desc' => $_POST['editorValue'],
        'case_url' =>$_POST['url'],
        'case_logo' =>$logo,
        'case_img'=>$cover
    );
    pre($add_arr);
    $res = $conn->insert('case',$add_arr);
    if($res['code']==1){
        echo "<script>alert('添加成功');location.href='case_list.php';</script>";
    }else{
        echo "<script>alert('添加失败');history.go(-1);</script>";

    }
}
?>

<link href="css/bootstrap-fileinput.css" rel="stylesheet">

<!-- End: Sidebar -->
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">添加游戏案例</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加游戏案例</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="case_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">

                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">游戏名</span>
                                        <input type="text" name="name" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">游戏连接</span>
                                        <input type="text" name="url" value="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="h4">游戏LOGO图标</div>
                                <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                    <div class="fileinput-new thumbnail" style="width: 120px;height: auto;max-height:150px;">
                                        <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="images/noimage.png" alt="" />
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-primary btn-file">
                                            <span class="fileinput-new">选择文件</span>
                                            <span class="fileinput-exists">换一张</span>
                                            <input type="file" name="logo" id="picID" accept="image/gif,image/jpeg,image/x-png" required />
                                        </span>
                                        <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="h4">游戏封面</div>
                                <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                    <div class="fileinput-new thumbnail" style="width: 300px;height: auto;max-height:150px;">
                                        <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="images/noimage.png" alt="" />
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-primary btn-file">
                                            <span class="fileinput-new">选择文件</span>
                                            <span class="fileinput-exists">换一张</span>
                                            <input type="file" name="cover" id="picID" accept="image/gif,image/jpeg,image/x-png" required />
                                        </span>
                                        <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="h4">案例描述</div>
                                <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
                                    <p></p>
                                    </script>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input name="add" type="submit" value="提交" class="submit btn btn-blue">
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-fileinput.js"></script>
<link type="text/css" rel="stylesheet" href="umeditor/themes/default/_css/umeditor.css">
<script src="umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="umeditor/editor_api.js" type="text/javascript"></script>
<script src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: true,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>

</html>