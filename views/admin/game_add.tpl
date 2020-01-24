<link rel="stylesheet" href="<{STA}>css/bootstrap-fileinput.css">
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
                    <form action="" method="post" class="cmxform" enctype="multipart/form-data">
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
                                        <div class="input-group"><span class="input-group-addon">游戏名字</span>
                                            <input type="text" name="name" value="" class="form-control">
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="h4">logo预览</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 80px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<{STA}>images/noimage.png" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">选择文件</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="logo" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="h4">封面预览</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<{STA}>images/noimage.png" alt="" />
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
                                <div class="form-group col-md-6">
                                    <div class="h4">人物预览</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<{STA}>images/noimage.png" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">选择文件</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="ren" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix" ></div>

                                    <div class="form-group col-md-3">
                                        <div class="h4">封面预览</div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<{STA}>images/noimage.png" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">选择文件</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="img1" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <div class="h4">封面预览</div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<{STA}>images/noimage.png" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">选择文件</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="img2" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <div class="h4">封面预览</div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<{STA}>images/noimage.png" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">选择文件</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="img3" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <div class="h4">封面预览</div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<{STA}>images/noimage.png" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">选择文件</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="img4" id="picID" accept="image/gif,image/jpeg,image/x-png" />
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
					<p></p>

                                    </script>
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
<link type="text/css" rel="stylesheet" href="<{STA}>umeditor/themes/default/_css/umeditor.css">
<script src="<{STA}>js/jquery.min.js" type="text/javascript"></script>
<script src="<{STA}>js/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="<{STA}>umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="<{STA}>umeditor/editor_api.js" type="text/javascript"></script>
<script src="<{STA}>umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
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