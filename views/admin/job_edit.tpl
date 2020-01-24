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
                                            <input type="text" name="name" value="<{$new_edit['job_name']}>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">职业描述</span>

                                            <{foreach  $new_edit['job_desc'] as $v}>
                                                 <input type="text" name="desc[]" value=" <{$v}>
                                                 " class="form-control">
                                            <{/foreach}>
                                           
                                            
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">职业要求</span>

                                            <{foreach  $new_edit['job_req'] as $v}>
                                                 <input type="text" name="req[]" value=" <{$v}>
                                                 " class="form-control">
                                            <{/foreach}>
                                           
                                            
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
<script src="<{STA}>js/jquery.min.js" type="text/javascript"></script>
<script src="<{STA}>js/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="umeditor/editor_api.js" type="text/javascript"></script>
<script src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: false,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>

</html>