<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>这里是您的网站名称_这里是您的网站名称</title>
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
<div class="clear"></div>
<div class="banner">
  <div class="main_visual">
    

    <div class="main_image">
    
      <ul>
                        <li><span class="img_3" style="background:url(/carshop/Public/pc/images/20150804112848-251193540.jpg) no-repeat top;"></span></li>
                
                          <li><span class="img_3" style="background:url(/carshop/Public/pc/images/20150804112945-946058568.jpg) no-repeat top;"></span></li>
                
                          <li><span class="img_3" style="background:url(/carshop/Public/pc/images/20150804112838-1533884976.jpg) no-repeat top;"></span></li>
                
              </ul>
      <a href="javascript:;" id="btn_prev"></a> <a href="javascript:;" id="btn_next"></a> </div>
  </div>
</div>
<div class="clear"></div>

<div class="case">
  <div class="fra1">
      <div class="caseleft">
        <p class="name"><b>主要车型</b><span>main models</span></p>
            <div class="casel-in">
              大众宝来、马自达、华晨宝马、奥迪Q7、奥迪Q5、速腾迈腾、别克商务、吉利汽车、奔驰、凯迪拉克          </div>
          <a class="case-more" title="查看更多" href="case.php">查看更多</a>
      </div>
      <div class="caseright">
          <div class="noticecon"><b>最新公告：</b>
              <marquee scrollamount="2" scrolldelay="5" onMouseOut="this.start()" onMouseOver="this.stop()">
              诚信为本：市场在变，诚信永远不变...              </marquee>
            </div>
                        <ul class="caseul">
                          <li>
                  <a href="http://0001543.ks.panguweb.cn/case_view.php?id=49" title="车型：车型展示名称">
                  <img src="/carshop/Public/pc/images/20150810100856-61052986513823272.jpg" alt="车型：车型展示名称" width="215" height="161" />
                    <span>车型：车型展示名称</span>
                    <p>日租：123.00元/天</p>
                  </a>
                </li>
                              <li>
                  <a href="http://0001543.ks.panguweb.cn/case_view.php?id=48" title="车型：车型展示名称">
                  <img src="/carshop/Public/pc/images/20150810100905-58394173160195352.jpg" alt="车型：车型展示名称" width="215" height="161" />
                    <span>车型：车型展示名称</span>
                    <p>日租：1500.00元/天</p>
                  </a>
                </li>
                              <li>
                  <a href="http://0001543.ks.panguweb.cn/case_view.php?id=47" title="车型：车型展示名称">
                  <img src="/carshop/Public/pc/images/20150810100919-38210531882941720.jpg" alt="车型：车型展示名称" width="215" height="161" />
                    <span>车型：车型展示名称</span>
                    <p>日租：1600.00元/天</p>
                  </a>
                </li>
                            </ul>
                  </div>
    </div>
</div>
<div class="clear"></div>
<div class="product">
  <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.zoombut').lightBox();
    });
</script>
  <div class="fra1">
      <p class="pro-name"><b>车辆展示</b><span>Vehicles Show</span></p>
        <div id="container">
      <div id="example">
        <div id="slides">
          <div class="slides_container" >
                                 <div class="slide">            
                <ul class="product-ul">
                                   <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=13" title="车型：车型展示名称">
                          <p class="casetitle" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150810101106-46672245394438504.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150810101106-46672245394438504.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：112.00元/天</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=10" title="车型：车型展示名称">
                          <p class="casetitle" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150810101634-35172443836927412.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150810101634-35172443836927412.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：2000.00元/天</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=9" title="车型：车型展示名称">
                          <p class="casetitle" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150810101641-64434476010501384.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150810101641-64434476010501384.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：3000.00元/天</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=8" title="车型：车型展示名称">
                          <p class="casetitle" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150810101649-98561866441741584.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150810101649-98561866441741584.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：4000.00元/天</label></p>
                        </a>
                     </li> 
                               
              </ul>
              
            </div>
                        <div class="slide">            
                <ul class="product-ul">
                                   <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=7" title="车型：车型展示名称">
                          <p class="casetitle" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142600-629205096.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142600-629205096.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：5000.00元/天</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=6" title="车型：车型展示名称">
                          <p class="casetitle" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142607-500806644.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142607-500806644.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=5" title="车型：车型展示名称">
                          <p class="casetitle" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142611-1195336428.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142611-1195336428.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=4" title="车型：车型展示名称">
                          <p class="casetitle" ><span title="车型：车型展示名称" href="/carshop/Public/pc/images/20150804142615-1490638500.jpg" class="zoombut"></span><span class="jianjie">车型：车型展示名称</span> </p> 
                            <img src="/carshop/Public/pc/images/20150804142615-1490638500.jpg" width="245" height="184" alt="车型：车型展示名称" />
                            <p class="wor"><span>车型：车型展示名称</span><label>日租：0.00元/天</label></p>
                        </a>
                     </li> 
                               
              </ul>
              
            </div>
                                    </div>
          <a href="#" class="prev" title="prev">&nbsp;&nbsp;</a><a href="" class="next" title="next">&nbsp;</a> </div>
      </div>
    </div>
    <div class="clear"></div>
    <a class="pro-more" href="product.php" title="查看更多">查看更多</a>
    </div>
</div>
<div class="clear"></div>
<div class="news">
  <div class="fra">
      <div class="about-left">
          <p class="ab-name"><span>a b o u t&nbsp;&nbsp; u s</span><b>关于我们</b></p> 
            <p class="ab-con">　　租车盘古网络，一流的百度产品推广服务运营商，致力于在互联网时代帮助中国企业进行营销方式的革命，并使他们在这场营销变革中抢占先机。　<br />
　　盘古网络成立于2003年，现有员工2000多人，下设20多家子公司，业务覆盖河北、辽宁、吉林三省，提供域名注册、虚拟主机、企业邮局、网站建设 ...</p>
      <a class="ab-more" href="about.php" title="查看更多">查看更多</a>
        </div>
        <div class="news-right">
          <p class="news-name"><span>n e w s</span><b>新闻资讯</b></p> 
                         <ul class="news-ul">
                          <li>
                  <span class="num">01</span>
                    <a href="http://0001543.ks.panguweb.cn/news_view.php?id=65" title="2013年沈阳盘古妇女节活动报道">
                      <p>2013年沈阳盘古妇女节活动报道</p>
                        <span>2015/08/04</span>
                    </a>
                </li>
                              <li>
                  <span class="num">02</span>
                    <a href="http://0001543.ks.panguweb.cn/news_view.php?id=29" title="盘古首张增值税发票">
                      <p>盘古首张增值税发票</p>
                        <span>2015/05/22</span>
                    </a>
                </li>
                              <li>
                  <span class="num">03</span>
                    <a href="http://0001543.ks.panguweb.cn/news_view.php?id=28" title="2013年沈阳盘古妇女节活动报道">
                      <p>2013年沈阳盘古妇女节活动报道</p>
                        <span>2015/05/22</span>
                    </a>
                </li>
                            </ul>
                         <a class="news-more" href="news.php" title="查看更多">查看更多</a>
        </div>
    </div>
</div>
<div class="z-notice">
  <a href="notice.php" title="租车须知">租车须知</a>
  <img src="/carshop/Public/pc/images/20150804152838-947160084.jpg" alt="租车" width="1000" height="250" />
</div>
<div class="clear"></div>
 

    </body>
</html>