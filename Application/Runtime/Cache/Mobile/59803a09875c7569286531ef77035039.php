<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!-- saved from url=(0061)http://175.19.185.149/x/000240/index.php/Cnm/Index/index.html -->
<html style="font-size: 120px;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta name="Author" content="024">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="telephone=no" name="format-detection" />
<meta name="Author" content="0431" />
<title>这里是您的网站名称1</title>
<meta name="keywords" content="这里是您的网站名称4" />
<meta name="description" content="这里是您的网站名称" />

<link rel="stylesheet" type="text/css" href="/carshop/Public/mobile/style/subpage.css" />
  
<script type="text/javascript" src="/carshop/Public/mobile/style/jquery.js"></script>
  
  


<style>
.head {
  background: #1a2a38;
}
.foot {
  background: #132330;
}
.nav {
  background: #0152b5 !important
}
.nav_color {
  background: #222;
}
</style>

<link rel="stylesheet" type="text/css" href="/carshop/Public/mobile/style/master.css" />
  <link rel="stylesheet" type="text/css" href="/carshop/Public/mobile/style/subpage.css" />
  <link rel="stylesheet" type="text/css" href="/carshop/Public/mobile/style/child_vip.css" />
  
<script type="text/javascript" src="/carshop/Public/mobile/style/jquery.js"></script>
  

<style>
.head {
  background: #1a2a38;
}
.foot {
  background: #132330;
}
.nav {
  background: #0152b5 !important
}
.nav_color {
  background: #222;
}
</style>

<link rel="stylesheet" type="text/css" href="/carshop/Public/mobile/style/swiper.css" />
  
<script type="text/javascript" src="/carshop/Public/mobile/style/nav.js"></script>
  <script type="text/javascript" src="/carshop/Public/mobile/style/cart_icon.js"></script>
  <script type="text/javascript" src="/carshop/Public/mobile/style/swiper.js"></script>
  <script type="text/javascript" src="/carshop/Public/mobile/style/lihe.js"></script>
  

</head>

<body>
<ul class="nav">
  <li><a href="/index.php/Cnm/Index/index.html" title="首页"><span class="iconfont">&#xe607;</span>首页</a></li>
  <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/carshop/index.php/Mobile/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Ry<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>" title="关于我们"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul> 
<div class="allpage">
  <div class="black-fixed iconfont">&#xe60f;</div>
  <!--header-->
  <div class="header">
    <div class="head"> <a href="/index.php/Cnm/Index/index.html" title="盘古网络" class="logo"> <img src="http://900523.ks.panguweb.cn/App/Cnm/Public/images/logo_03.png" alt="盘古网络"/> </a>
      <div class="nav-btn iconfont">&#xe605;</div>
      <!--搜索-->
      <div class="search_hl iconfont">&#xe600;</div>
      <div class="search" style="display: block;">
        <form action="/carshop/index.php/Mobile/Search/index/" method="get">
          <a class="xbtn iconfont" href="javascript:;">&#xe60f;</a>
          <input type="text" name="kws" class="search-lh-input" placeholder="请输入搜索关键词">
          <input type="submit" class="search-lh-btn iconfont" value="&#xe600;">
        </form>
      </div>
      <!--搜索--> 
    </div>
  </div>
  <!--header end-->
  
  <div class="content content_new">
    <div class="lines">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="lines lines01">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="lines01"></div>
    <div class="banner">
      <div class="swiper-container">
        <div class="swiper-wrapper">
           <div class="swiper-slide">
                                        <img src="/carshop/Public/mobile/images/E9B74D0114665E84D9580C171F6B7A83.jpg" />                    </div><div class="swiper-slide">
                                        <img src="/carshop/Public/mobile/images/BAAE4C726F3E1A3E34ED76AC4AC4A8E9.jpg" />                    </div> 
        
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
    
    
    
    <!---->
    <div class="tubiao_i">
      <ul>
        <li> <a href="/carshop/index.php/Mobile/page/index/cateid/88"><span class="iconfont02">&#xe614;</span><strong>关于我们</strong></a> </li><li> <a href="/carshop/index.php/Mobile/page/index/cateid/89"><span class="iconfont02">&#xe7c7;</span><strong>如何租车</strong></a> </li><li> <a href="/carshop/index.php/Mobile/page/index/cateid/90"><span class="iconfont02">&#xe628;</span><strong>如何还车</strong></a> </li><li> <a href="/carshop/index.php/Mobile/arlist/index/cateid/91"><span class="iconfont02">&#xe61b;</span><strong>费用说明</strong></a> </li><li> <a href="/carshop/index.php/Mobile/carlist/index/cateid/92"><span class="iconfont02">&#xe64b;</span><strong>优惠活动</strong></a> </li><li> <a href="/carshop/index.php/Mobile/carlist/index/cateid/93"><span class="iconfont02">&#xe656;</span><strong>车辆展示</strong></a> </li><li> <a href="/carshop/index.php/Mobile/arlist/index/cateid/94"><span class="iconfont02">&#xf00bc;</span><strong>车辆保养</strong></a> </li><li> <a href="/carshop/index.php/Mobile/page/index/cateid/95"><span class="iconfont02">&#xe66f;</span><strong>联系我们</strong></a> </li>      

        <div class="clear"></div>
        </ul>
    </div>
    <!---->
    <!---->
    <div class="ling_i">
     <a href=""><img src="/carshop/Public/mobile/images/8A6B1622242744F4619AB05364247FE6.gif" alt=""></a> 
      
    </div>
    <!---->
     
      <!--车辆展示-->
    <div class="lines">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="lines lines01">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="more_i"><span>车辆展示</span><a href="/carshop/index.php/Mobile/carlist/index/cateid/93" title="更多">更多</a> </div>
    <div class="display_i">
      <div class="display_i01"> 
      
        <div class="clear"></div>
      </div>
      <div class="display_i02">
        <?php if(is_array($cares)): $i = 0; $__LIST__ = $cares;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
          <a href="/carshop/index.php/Mobile/Article/index/arid/<?php echo ($vo["id"]); ?>">
          <dt><img src="/carshop/<?php echo ($vo["pic"]); ?>" width="270" height="203"></dt>
          <dd>
            <h2><?php echo ($vo["title"]); ?></h2>
            <span>日租：<?php echo ($vo["rizu"]); ?>天</span></dd>
          </a>
        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
      </div>
    </div>
    <!--经典案例 end--><!--车辆展示-->
    <div class="lines">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="lines lines01">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="more_i"><span>客户评价</span><a href="/carshop/index.php/Mobile/message/index/cateid/97" title="更多">更多</a></div>
    <div class="pingj_i">
    <?php if(is_array($msgres)): $i = 0; $__LIST__ = $msgres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
        <a href="/carshop/index.php/Mobile/Message/index/cateid/97">
        <dt><?php echo ($vo["nickname"]); ?></dt>
        <dd><?php echo (date("Y-m-d",$vo["time"])); ?></dd>
        <div class="clear"></div>
        </a>
      </dl><?php endforeach; endif; else: echo "" ;endif; ?>
    
    </div>
    <!--经典案例 end--><!--优惠活动-->
    <div class="lines">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="lines lines01">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="more_i"><span>优惠活动</span><a href="/carshop/index.php/Mobile/carlist/index/cateid/92" title="更多">更多</a></div>
    <div class="case_c">
      <ul>
      <?php if(is_array($yhres)): $i = 0; $__LIST__ = $yhres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/carshop/index.php/Mobile/carlist/index/arid/<?php echo ($vo["id"]); ?>">
          <div class="case_c_pic"><img src="/carshop/<?php echo ($vo["pic"]); ?>"></div>
          <div class="case_c_content">
            <h2><?php echo ($vo["title"]); ?></h2>
            <strong>日期：<?php echo (date("Y-m-d",$vo["time"])); ?><br>特价：<?php echo ($vo["rizu"]); ?></strong>
            <span><?php echo ($vo["des"]); ?></span> </div><div class="clear"></div></a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>  
      </ul>
    </div>
    <!--优惠活动 end--><!--关于我们--> 
    <div class="lines">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="lines lines01">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="more_i"><span>关于我们</span><a href="/carshop/index.php/Mobile/page/index/cateid/88" title="更多">更多</a></div>
    <div class="about_i">今日盘古，如朝阳初升。在中国国际实力日益壮大，经济全球化日益凸显的时代背景下，盘古也将扮演着更为重要的角色，承载着中国更多企业的商业梦想，背负着中国信息产业国际化的历史重任。 盘古网络，百度最大的代理商； 盘古网络，百度首家跨省经营的代理商； 盘古网络，百度唯一一家拥有省级代理资质的代理商。 精诚合作，共赴成功！</div>
    
    <!--关于我们 end--><!--车辆保养-->
    <div class="lines">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="lines lines01">■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■</div>
    <div class="more_i"><span>车辆保养</span><a href="/carshop/index.php/Mobile/arlist/index/cateid/94" title="更多">更多</a></div>
    <div class="pingj_i about_i01">
      <?php if(is_array($byres)): $i = 0; $__LIST__ = $byres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
        <a href="/carshop/index.php/Mobile/Article/index/arid/<?php echo ($vo["id"]); ?>">
        <dt><?php echo ($vo["title"]); ?></dt>
        <dd><?php echo (date("Y/m/d",$vo["time"])); ?></dd>
        <div class="clear"></div>
        </a>
      </dl><?php endforeach; endif; else: echo "" ;endif; ?>    
    </div>
    <!--车辆保养 end-->        
    
    
    
    
    <!--技术支持-->
    <div class="beian"> 技术支持：<a title="盘古网络－提供基于互联网的全套解决方案" target="_blank" href="http://www.panguweb.cn">盘古网络</a><a title="盘古建站－快速开展网络营销的利器" target="_blank" href="http://ks.panguweb.cn">【盘古建站】</a>　 </div>
    <!--技术支持 end--> 
  </div>
   
   <div class="footer">
    <div class="foot foot-relative" id="foot">
        <div class="foot-relative">
        <a href="/index.php/Cnm/Base/map.html" title="地图">
                        <span class="commonfont">&#xe605;</span>
                        <h3>地图</h3>
                    </a><a href="tel:+86-0000-96877" title="电话">
                        <span class="commonfont">&#xe604;</span>
                        <h3>电话</h3>
                    </a><a href="sms:+86-0000-96877" title="短信">
                        <span class="commonfont">&#xe601;</span>
                        <h3>短信</h3>
                    </a><a href="/index.php/Cnm/Base/share.html" title="分享">
                        <span class="commonfont">&#xe600;</span>
                        <h3>分享</h3>
                    </a>            
            
        </div>
    </div>
</div>  
    
  
</div>
</body>
</html>