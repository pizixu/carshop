<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关于我们_这里是您的网站名称</title>
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
<div class="fy" style=" background:url(/carshop/Public/pc/images/20150804113438-369103644.jpg) center top no-repeat;">
      <div class="fra">
<div class="fyLeft">
        
                <div class="l_pro">
      <div class="l_pro_t"><?php echo ($topname); ?></div>
        <ul class="l_procon">       
          <?php foreach($son2 as $k=>$v): $cateid=$v['id']; if($contro){ $url="/carshop/index.php/Home/carlist/index/cateid/$cateid"; }else{ $url="/carshop/index.php/Home/Page/index/cateid/$cateid"; } ?>

          <li class="proOne"><a title="<?php echo $v['name'];?>" href="<?php echo $url;?>"><?php echo $v['name'];?></a>
            
            <ul>
            <?php if($v['id']==$_GET['cateid'] || $v['id']==$son3pid):?>
              <?php foreach($son3 as $k1=>$v1): ?>
            <li><a style="padding-left:50px;" title="<?php echo $v1['name'];?>" href="/carshop/index.php/Home/Page/index/cateid/<?php echo $v1['id'];?>"><?php echo $v1['name'];?></a></li>
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
      <div class="title"> <span class="fl">
        关于我们        </span> <span class="fr">当前位置：<a href="http://0001543.ks.panguweb.cn/" title="首页">首页</a> > <font>关于我们</font>        </span></div>
      <div class="padding25">
        <div class='pb'><div class='pagebox'><span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络，一流的百度产品推广服务运营商，致力于在互联网时代帮助中国企业进行营销方式的革命，并使他们在这场营销变革中抢占先机。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络成立于2003年，现有员工2000多人，下设20多家子公司，业务覆盖河北、辽宁、吉林三省，提供域名注册、虚拟主机、企业邮局、网站建设、网络推广、呼叫中心、电子支付等全套网络营销解决方案。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络从创立至今已经为数万家企业提供了专业的网络营销产品，并通过专业的网络营销服务使这些企业获得了良好的营销效果。1</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　 　</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络聚集IT界的精英，由资深的网站设计师、软件开发工程师、营销顾问专家及专业客服实施顾问团队、技术服务团队等组成。几年来，盘古人本着"自强 不 息、厚德载物"的企业精神，坚持"诚信为本"的经营理念，以"追求客户的感动"为目标来指导市场动作行为，并逐步推出高质量的网络增值服务，为众多企业实 现网络营销梦想做出积极的努力。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　今日盘古，如朝阳初升。在中国国际实力日益壮大，经济全球化日益凸显的时代背景下，盘古也将扮演着更为重要的角色，承载着中国更多企业的商业梦想，背负着中国信息产业国际化的历史重任。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络，百度最大的代理商；</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络，百度首家跨省经营的代理商；</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络，百度唯一一家拥有省级代理资质的代理商。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　精诚合作，共赴成功！</span><div align='center'></div></div></div>      </div>
    </div>
  </div>
</div>
<div class="clear"></div>


    </body>
</html>