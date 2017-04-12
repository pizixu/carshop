<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>车辆展示_这里是您的网站名称</title>
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
          <a href="index.php" title="这里是您的网站名称"><img src="/carshop/Public/pc/images/logo.png" alt="这里是您的网站名称" /></a>
            <div class="head-right">
            <span><font>租车<br />热线 </font><label>+86-0000-96877</label></span>
            <div class="search">
               <form id="search" name="search" method="get" action="/carshop/index.php/Home/Search/">
               
                <input type="text" class="text pngFix" name="kws" id="kws" value="请输入搜索关键词"/>
                <div class="select pngFix">
                 <select id="rid" style="display: none" name="cateid">
                                         <option value="69" selected="selected">新闻资讯</option>
                                         <option value="68" >车辆展示</option>
                                         <option value="70" >主要车型</option>
                                         <option value="80" >资质荣誉</option>
                                     </select>
                </div>
                <input type="submit" title="搜索" style="cursor:pointer;" class="button" value=""/>
            </form>
            <script type=text/javascript>
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
          <li><a title="网站首页" href="/carshop/index.php" class="">网站首页</a></li>
          <?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a title="<?php echo ($vo["name"]); ?>" href="/carshop/index.php/Home/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Ry<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>" class=""><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    
</div>
<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.zoombut').lightBox();
    });
</script>
<div class="fy" style=" background:url(/carshop/Public/pc/images/20150804113438-369103644.jpg) center top no-repeat;">
    	<div class="fra">
 <div class="fyLeft">
        
                <div class="l_pro">
      <div class="l_pro_t"><?php echo ($topname); ?></div>
        <ul class="l_procon">       
          <?php foreach($son2 as $k=>$v): $cateid=$v['id']; if($contro){ $url="/carshop/index.php/Home/carlist/index/cateid/$cateid"; }else{ $url="/carshop/index.php/Home/Carlist/index/cateid/$cateid"; } ?>

          <li class="proOne"><a title="<?php echo $v['name'];?>" href="<?php echo $url;?>"><?php echo $v['name'];?></a>
            
            <ul>
            <?php if($v['id']==$_GET['cateid'] || $v['id']==$son3pid):?>
              <?php foreach($son3 as $k1=>$v1): ?>
            <li><a style="padding-left:50px;" title="<?php echo $v1['name'];?>" href="/carshop/index.php/Home/Carlist/index/cateid/<?php echo $v1['id'];?>"><?php echo $v1['name'];?></a></li>
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
      			<div class="title"> <span class="fl"> 车辆展示</span> <span class="fr">当前位置：<a href="http://0001543.ks.panguweb.cn/" title="首页">首页</a> > <font>车辆展示</font> </span></div>

    		    <ul class="proul">
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=13" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150810101106-46672245394438504.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150810101106-46672245394438504_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：112.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=10" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150810101634-35172443836927412.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150810101634-35172443836927412_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：2000.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=9" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150810101641-64434476010501384.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150810101641-64434476010501384_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：3000.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=8" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150810101649-98561866441741584.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150810101649-98561866441741584_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：4000.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=7" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142600-629205096.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142600-629205096_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：5000.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=6" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142607-500806644.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142607-500806644_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=5" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142611-1195336428.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142611-1195336428_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=4" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142615-1490638500.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142615-1490638500_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=3" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142619-277151004.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142619-277151004_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=2" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142622-319583316.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142622-319583316_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li>           
          	<li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=1" title="车型：车型展示名称">
                        	<p class="casetitle1" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142626-17959500.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142626-17959500_thumb.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li>           
     
            	
    </ul>    

                 	
  			</div>
    	</div>
</div>
<div class="clear"></div>


    </body>
</html>