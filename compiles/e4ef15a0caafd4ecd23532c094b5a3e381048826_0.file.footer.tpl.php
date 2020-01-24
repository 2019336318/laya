<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-20 14:30:53
  from 'D:\phpstudy_pro\WWW\www.laya.com\views\home\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e25491d707f43_45441877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4ef15a0caafd4ecd23532c094b5a3e381048826' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\www.laya.com\\views\\home\\footer.tpl',
      1 => 1579501851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e25491d707f43_45441877 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
    <div class="container" style="overflow: visible">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="contact">
                    <ul>
                        <li><a href="about.php#about">公司简介</a></li>
                        <li><a href="about.php#contact">联系方式</a></li>
                        <li><a href="about.php#zhaopin">人才招聘</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <!-- <p>All Copyright Reserved by Layabox Inc. 京ICP备15008163号-1
                        <a href="http://www.51.la/?17805416" target="_blank" title="51.La 网站流量统计系统">网站统计</a>
                    </p> -->
                    <p><?php echo $_smarty_tpl->tpl_vars['conf']->value['conf_copy'];?>
 <?php echo $_smarty_tpl->tpl_vars['conf']->value['conf_savecase'];?>

                            <a href="http://www.51.la/?17805416" target="_blank" title="51.La 网站流量统计系统">网站统计</a>
                        </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footerWrap">
                    <div class="footerWrap1">
                        <a href="javascript:void(0);" class="yinqing" target="_top"></a>
                        <div class="email-01"> <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value['conf_email'];?>
" alt="" height="150" width="142"> </div>
                        <a href="javascript:void(0);" class="weixin"></a>
                        <div class="wxpop"> <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value['conf_qq'];?>
" alt="" height="150" width="142"> </div>
                        <a href="javascript:void(0);" class="qq"></a>
                        <div class="qqpop"> <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value['conf_wechat'];?>
" alt="" height="150" width="142"> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- jQuery -->
<?php echo '<script'; ?>
 src="./static/home/js/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="./static/home/js/bootstrap.js"><?php echo '</script'; ?>
>

<!-- Script to Activate the Carousel -->
<?php echo '<script'; ?>
>
    // 导航选中高亮
    var urlstr = location.href;
    var urlstatus = false;
    $("#bs-example-navbar-collapse-1 a").each(function() {
        if (urlstr.indexOf($(this).attr('href')) > -1 && $(this).attr('href') != '') {
            $(this).parent().addClass('active');
            urlstatus = true;
        } else {
            $(this).parent().removeClass('active');
        }
    });
    if (!urlstatus) {
        $("#bs-example-navbar-collapse-1 a").eq(0).parent().addClass('active');
    }
    //banner轮换
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    //弹出层
    function popCeil() {
        $(".yinqing").mouseover(function() {
            $(".email-01").show();
        });
        $(".yinqing").mouseout(function() {
            $(".email-01").hide();
        });
        $(".weixin").mouseover(function() {
            $(".wxpop").show();
        });
        $(".weixin").mouseout(function() {
            $(".wxpop").hide();
        });
        $(".qq").mouseover(function() {
            $(".qqpop").show();
        });
        $(".qq").mouseout(function() {
            $(".qqpop").hide();
        });
        $(".top2").mouseover(function() {
            $(".returnsl").show();
        });
        $(".top2").mouseout(function() {
            $(".returnsl").hide();
        });
    }
    $(document).ready(function() {
        popCeil();
    });
    //    //
    //    var screenHeight;
    //    screenHeight = $(window).height();
    //    $(document).ready(function(){
    //        if(screenHeight > 1300){
    //            $("footer").css("position","absolute");
    //        }
    //    });

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="./static/home/js/video.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    //			var laya_yf;
    //			laya_zh = document.getElementById("laya_zh");
    //			laya_yf = document.getElementById("laya_yf");
    //
    //			function splay(objId) {
    //				if (objId == "laya_zh") {
    //					laya_zh.play();
    //				} else {
    //					laya_yf.play();
    //				}
    //			}
    //
    var videoDom = document.getElementById("laya_yf_html5_api");

    function stopVideo() {
        videoDom.currentTime = 0;
        videoDom.pause();
    }

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
        $(function() {
            //从左侧显示遮罩效果 开始
            $(".game-item-img").hover(function() {
                    $(this).find(".txt-four").stop().animate({
                        "left": 0
                    });
                }, function() {
                    var itemWidth = $(this).width();
                    $(this).find(".txt-four").stop().animate({
                        "left": - +itemWidth
                    });
                })
                //从左侧显示遮罩效果 结束
        });
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
