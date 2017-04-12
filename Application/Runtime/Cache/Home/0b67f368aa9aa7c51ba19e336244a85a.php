<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻资讯_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<script type="text/javascript" src="/carshop/Public/pc/style/urlredirect.js"></script>
<LINK href="/carshop/Public/pc/style/style.css" rel=stylesheet>
<LINK href="/carshop/Public/pc/style/jbox.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/functions.js"></script>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/validForm/FormValid.js"></script>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/jbox/jquery.jBox-2.3.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/search.js"></script>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/menu.js"></script>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/jQselect.js"></script>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/slides.min.jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/carshop/Public/pc/style/jquery.touchSlider.js"></script>
<script type="text/javascript"><!--ibanner-->

$(document).ready(function () {
	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
		},function(){
		$("#btn_prev,#btn_next").fadeOut()
		})
	$dragBln = false;
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e) {
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	})
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	})
	$(".main_image a").click(function() {
		if($dragBln) {
			return false;
		}
	})
	timer = setInterval(function() { $("#btn_next").click();}, 5000);
	$(".main_visual").hover(function() {
		clearInterval(timer);
	}, function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
	$(".main_image").bind("touchstart", function() {
		clearInterval(timer);
	}).bind("touchend", function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
});
</script>
<script><!--pro-->
		$(function(){
			// Set starting slide to 1
			var startSlide = 1;
			// Get slide number if it exists
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}
			// Initialize Slides
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				generatePagination: true,
				play: 0,
				pause: 2500,
				hoverPause: true,
				// Get the starting slide
				start: startSlide,
				animationComplete: function(current){
					// Set the slide number as a hash
					//window.location.hash = '#' + current;
				}
			});
		});
</script>
<!--[if IE 6]><script type="text/javascript" src="js/DD_belatedPNG.js"></script><![endif]-->
</head>
<body>
<div class="fixed"> <a href="book.php" title="留言" class="barbook"></a> <a href="javascript:;" title="二维码" class="codepic"></a> <a href="javascript:;" title="返回顶部" class="backup"></a>
  <div> <img src="http://0001543.ks.panguweb.cn/upfile/qr/qrcode.png" alt="这里是您的网站名称" class="code" /> </div>
</div>
<div class="head">
  <div class="headtop">
      <div class="fra1">
          <a href="index.php" title="这里是您的网站名称"><img src="/carshop/Public/pc/images/logo.png" alt="这里是您的网站名称"></a>
            <div class="head-right">
            <span><font>租车<br>热线 </font><label>+86-0000-96877</label></span>
            <div class="search">
               <form id="search" name="search" method="get" action="http://0001543.ks.panguweb.cn/search.php">
               
                <input class="text pngFix" name="kws" id="kws" value="请输入搜索关键词" type="text">
                <div class="select pngFix">
                 <input id="rid_input" class="selectbox" autocomplete="off" readonly="readonly" type="text"><div id="rid_container" class="selectbox-wrapper" style="display: none;"><ul><li id="rid_input_1" class="selected">新闻资讯</li><li id="rid_input_2">车辆展示</li><li id="rid_input_4">主要车型</li><li id="rid_input_8">资质荣誉</li></ul></div><select id="rid" style="display: none" name="rid">
                                         <option value="1" selected="selected">新闻资讯</option>
                                         <option value="2">车辆展示</option>
                                         <option value="4">主要车型</option>
                                         <option value="8">资质荣誉</option>
                                     </select>
                </div>
                <input title="搜索" class="button" value="" type="submit">
            </form>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery("#rid").selectbox();
                });
            </script> 
            </div>
            </div>
        </div>
    </div>
  <div class="nav">
      <ul>
          <li><a href="index.php" title="网站首页">网站首页</a></li>
                         <li><a href="http://0001543.ks.panguweb.cn/about.php" title="关于我们" class="">关于我们</a></li>
                        <li><a href="http://0001543.ks.panguweb.cn/product.php" title="车辆展示" class="">车辆展示</a></li>
                        <li><a href="http://0001543.ks.panguweb.cn/news.php" title="新闻资讯" class="">新闻资讯</a></li>
                        <li><a href="http://0001543.ks.panguweb.cn/case.php" title="主要车型" class="">主要车型</a></li>
                        <li><a href="http://0001543.ks.panguweb.cn/honor.php" title="资质荣誉" class="">资质荣誉</a></li>
                        <li><a href="http://0001543.ks.panguweb.cn/notice.php" title="租车须知">租车须知</a></li>
                        <li><a href="http://0001543.ks.panguweb.cn/hr.php" title="人才招聘">人才招聘</a></li>
                        <li><a href="http://0001543.ks.panguweb.cn/book.php" title="在线留言">在线留言</a></li>
                        <li><a href="http://0001543.ks.panguweb.cn/contact.php" title="联系我们">联系我们</a></li>
                    </ul>
    </div>
    
</div>
<div class="fy" style=" background:url(/carshop/Public/pc/images/20150804113438-369103644.jpg) center top no-repeat;">
    	<div class="fra">
<div class="fyLeft">
        
                <div class="l_pro">
      <div class="l_pro_t"><?php echo ($topname); ?></div>
        <ul class="l_procon">       
          <?php foreach($son2 as $k=>$v): $cateid=$v['id']; if($contro){ $url="/carshop/index.php/Home/carlist/index/cateid/$cateid"; }else{ $url="/carshop/index.php/Home/Arlist/index/cateid/$cateid"; } ?>

          <li class="proOne"><a title="<?php echo $v['name'];?>" href="<?php echo $url;?>"><?php echo $v['name'];?></a>
            
            <ul>
            <?php if($v['id']==$_GET['cateid'] || $v['id']==$son3pid):?>
              <?php foreach($son3 as $k1=>$v1): ?>
            <li><a style="padding-left:50px;" title="<?php echo $v1['name'];?>" href="/carshop/index.php/Home/Arlist/index/cateid/<?php echo $v1['id'];?>"><?php echo $v1['name'];?></a></li>
              <?php endforeach;?>
          <?php endif;?>
            </ul>

          </li>
        <?php endforeach;?>
        </ul>
                </div>
               <div class="fl-contact">
                  <div class="l_pro_t1">联系我们</div>
                    <p><img width="200" height="98" alt="联系我们" src="http://0001543.ks.panguweb.cn/images/temp/cont.jpg"></p>
                    <div class="fl-con">电话：<?php echo (C("PHONE")); ?> <br>
传真：<?php echo (C("FAX")); ?> <br>
地址：<?php echo (C("ADDRESS")); ?> <br>
邮箱：<?php echo (C("EMAIL")); ?> </div>
               </div> 

      </div>
        <div class="fyRight">
      			<div class="title"> <span class="fl"> 新闻资讯</span> <span class="fr">当前位置：<a href="http://0001543.ks.panguweb.cn/" title="首页">首页</a> > <font>新闻资讯</font> </span></div>
				    <ul class="news_list">
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=65" title="2013年沈阳盘古妇女节活动报道"><span class="fl">2013年沈阳盘古妇女节活动报道</span><span class="fr">2015/08/04</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=29" title="盘古首张增值税发票"><span class="fl">盘古首张增值税发票</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=28" title="2013年沈阳盘古妇女节活动报道"><span class="fl">2013年沈阳盘古妇女节活动报道</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=27" title="强效出击，直达受众——2013网盟推广客户会"><span class="fl">强效出击，直达受众——2013网盟推广客户会</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=26" title="致力于在互联网时代帮助中国企业进行营销方式的革命"><span class="fl">致力于在互联网时代帮助中国企业进行营销方式的革命</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=25" title="【西中踏浪 盘古远航】——2012辽宁盘古年度旅游活动报道"><span class="fl">【西中踏浪 盘古远航】——2012辽宁盘古年度旅游活动报道</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=24" title="“月盈中秋 缘聚百度”--2012百度推广中秋答谢会-沈阳站VIP专场"><span class="fl">“月盈中秋 缘聚百度”--2012百度推广中秋答谢会-沈阳站VIP专场</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=23" title="强效出击，直达受众——2013网盟推广客户会"><span class="fl">强效出击，直达受众——2013网盟推广客户会</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=22" title="智营销新成长——百度推广企业英才计划交流会"><span class="fl">智营销新成长——百度推广企业英才计划交流会</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=21" title="2013年沈阳盘古妇女节活动报道"><span class="fl">2013年沈阳盘古妇女节活动报道</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=20" title="“月盈中秋 缘聚百度”--2012百度推广中秋答谢会-沈阳站VIP专场"><span class="fl">“月盈中秋 缘聚百度”--2012百度推广中秋答谢会-沈阳站VIP专场</span><span class="fr">2015/05/22</span></a></li>
           <li><a href="http://0001543.ks.panguweb.cn/news_view.php?id=19" title="智营销新成长——百度推广企业英才计划交流会"><span class="fl">智营销新成长——百度推广企业英才计划交流会</span><span class="fr">2015/05/22</span></a></li>
      
    </ul>    

                 <div class="page"><form action="news.php?&" name="subpage" method="get">
<a class="bg le">上一页</a><span class="current">1</span><a href='news.php?&pageno=2' title='跳转到第2页' >2</a> <a href='news.php?&pageno=2' title='跳转到第2页'  class="bg ri" >下一页</a> <span class="total">共2页</span><span class="reach">到第</span><span><input id="gotopages" name="pageno" class="input_page" value="" /></span><span class="reach">页</span><span class="btn"><a href="javascript:void(0);" title="确定" onclick="var pnum=document.getElementById('gotopages').value;if(pnum!=''){window.location.href='news.php?&pageno='+pnum;}else{alert('请输入要跳转的页数');}">确定</a></span></form></div>    			
  				</div>
    	</div>
</div>
<div class="clear"></div>
 <div class="foot">
  <div class="foot-map">
      <div class="foot-mleft">
          <div class="site">网站地图（<a href="sitemap.xml" target="_blank">xml</a> / <a href="sitemap.html" target="_blank">html</a>）</div>        
            <ul> 
            <li>  
            <a href="index.php" title="网站首页">网站首页</a> 
                                                 
             <a href="http://0001543.ks.panguweb.cn/about.php" title="关于我们">关于我们</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/product.php" title="车辆展示">车辆展示</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/news.php" title="新闻资讯">新闻资讯</a> 
                                                                                                                                                                                                  </li>
             <li>             
                                                                                                                               
             <a href="http://0001543.ks.panguweb.cn/case.php" title="主要车型">主要车型</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/honor.php" title="资质荣誉">资质荣誉</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/notice.php" title="租车须知">租车须知</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/hr.php" title="人才招聘">人才招聘</a> 
                                                                                          </li>
            
             <li>  
                                                                                                                                                                                                                                       
             <a href="http://0001543.ks.panguweb.cn/book.php" title="在线留言">在线留言</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/contact.php" title="联系我们">联系我们</a> 
                                      </li>
      
            </ul>
        </div>
        <div class="foot-tel"><p>热线电话<br><label>+86-0000-96877</label></p><span>7x24小时全国客服热线，全年无休</span></div>
        <p class="foot-er"><img src="images/er.gif" alt="" height="121" width="123"><br>扫一扫关注我们</p>
  </div>
  <div class="clear"></div>
  <div class="footlink">
    <b class="name">友情链接： </b>
    <div class="linka"> 
              <a href="http://www.baidu.com" target="_blank">百度</a>
         
    </div>
  </div>
    <div class="foot-con">
        <div class="foot-left">电话：+86-0000-96877     传真：+86-0000-96877     地址：     版权所有：这里是您的网站名称<br>
    技术支持：<a href="http://www.pangu.us" target="_blank" title="盘古网络－提供基于互联网的全套解决方案">盘古网络</a><a href="http://ks.pangu.us" target="_blank" title="盘古建站－快速开展网络营销的利器">【盘古建站】</a>ICP备案编号：<a href="http://www.miitbeian.gov.cn/" title="备********号" target="_blank">备********号</a></div>
    <div class="newsshare"><div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1491958026617"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页" href="#"></a></div>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
</div>
</div>

    </body>
</html>