<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>{pboot:sitetitle}</title>
<meta name="keywords" content="{pboot:sitekeywords}">
<meta name="description" content="{pboot:sitedescription}">
<meta name="author" content="www.91084.com PB216"/>
<link href="{pboot:sitedomain}/skin/css/bootstrap.min.css" rel="stylesheet">
<link href="{pboot:sitedomain}/skin/css/swiper-3.3.1.min.css" rel="stylesheet" />
<link href="{pboot:sitedomain}/skin/css/animate.css" rel="stylesheet">
<link href="{pboot:sitedomain}/skin/css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{pboot:sitedomain}/skin/js/html5shiv.min.js"></script>
    <script src="{pboot:sitedomain}/skin/js/respond.min.js"></script>
    <![endif]-->
<script src="{pboot:sitedomain}/skin/js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="{pboot:sitedomain}/skin/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
<script src="{pboot:sitedomain}/skin/js/swiper-3.3.1.jquery.min.js" type="text/javascript"></script>
<script src="{pboot:sitedomain}/skin/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{pboot:sitedomain}/skin/js/wow.min.js" type="text/javascript"></script>
<script src="{pboot:sitedomain}/skin/js/funtion.js" type="text/javascript"></script>
</head>
<body data-spy="scroll">
<div id="wrap_index"> <!-- 侧边导航 --> 
  <div class="class page-prev visible-xs visible-sm">
  <div class="close"></div>
  <div class="class-top">
    <form  name="formsearch" action="{pboot:scaction}"  method="get">
      <input type="text" class="txt1" name="keyword" value="请输入关键字">
      <input type="submit" class="btn1" value="">
    </form>
  </div>
  <div class="class-m">
    <ul class="nnav">
      <li><a href="{pboot:sitedomain}/" class="ce">网站首页</a></li>
      {pboot:nav}
      <li class="menu_head"> <a href="[nav:link]" class="ce">[nav:name]</a>
        <ul class="menu_body">
          {pboot:2nav parent=[nav:scode]}
          <li><a href="[2nav:link]" class="er">[2nav:name]</a></li>
          {/pboot:2nav}
        </ul>
      </li>
      {/pboot:nav}
    </ul>
  </div>
</div>
<div class="opacity2"></div>
<div id="header" class="head visible-lg visible-md">
  <div class="container-fluid">
    <div class="logo wow fadeInLeft col-md-3"><a href="{pboot:sitedomain}/"><img src="{pboot:sitelogo}"></a></div>
    <div class="col-md-9" style="height: 56px;">
      <div class="search col-md-3 wow fadeInRight" style="float: right;">
        <form  name="formsearch" action="{pboot:scaction}"  method="get">
          <input class="txt1" type="text" name="keyword" placeholder="请输入关键字">
          <input class="btn1" type="submit" value="" />
        </form>
      </div>
      <div class="col-md-9 nav wow fadeInDown navbar-nav nav_box" style="float: right; text-align: right;">
        <div class="yiji {pboot:if(0=='{sort:scode}')}current{/pboot:if}"><a href="{pboot:sitedomain}/">首页</a></div>
        {pboot:nav}
        <div class="yiji {pboot:if('[nav:scode]'=='{sort:tcode}')}current{/pboot:if}"><a href="[nav:link]"><em>[nav:name]</em></a>
         {pboot:if([nav:soncount]>0)}<div class="libox" style="display: none;">
          {pboot:2nav parent=[nav:scode]}
          <a href="[2nav:link]"><em>[2nav:name]</em></a> 
          {/pboot:2nav}
         </div>{/pboot:if}
        </div>
        {/pboot:nav}
        </div>
    </div>
  </div>
</div>
<div id="molheader" class="visible-sm visible-xs">
  <div class="logomol"><a href="{pboot:sitedomain}/"><img src="{pboot:sitelogo}"></a></div>
  <div class="mol_navbutton"><img src="{pboot:sitedomain}/skin/picture/menu.png"></div>
</div>
 
  <!-- pcbanner -->
  <div id="myCarousel" class="carousel slide visible-md visible-lg"> 
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <a class="carousel-control left" href="#myCarousel"  data-slide="prev"> </a> <a class="carousel-control right" href="#myCarousel" data-slide="next"> </a>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
      {pboot:slide gid=1 num=10}
      <div class='item'> <a><img src="[slide:src]" width="100%"><em></em></a> </div>
      {/pboot:slide} </div>
    <script>
 	$(function(){
		$('.carousel-inner div').first().addClass('active')
	})
 </script> 
  </div>
  <!-- 手机banner -->
  <div id="molbanner" class="visible-xs visible-sm">
    <div class="swiper-container swiper-banner">
      <ul class="swiper-wrapper banner-img">
        {pboot:slide gid=1 num=10}
        <li class="swiper-slide"><a class="pic"><img src="[slide:src]" width="100%"/></a></li>
        {/pboot:slide}
      </ul>
      <div class="pagination"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
      <div class="swiper-button-next swiper-button-white"></div>
    </div>
  </div>
  {pboot:sort scode=5}
  <div class="section1">
    <ul class="clearfix">
      <li class="li0 col-md-3 col-xs-6 block" data-move-x="-50px" style="opacity: 0; transform: translateX(-50px);"> [sort:name]<br>
        <em><strong></strong> [sort:subname]</em> </li>
      {pboot:list scode=5 num=6 order=sorting}
      <li class="li1 col-md-3 col-xs-6 block" data-rotate-y="180deg" data-move-z="-200px" data-move-x="-300px" style="opacity: 0; transform: translateX(-300px) translateZ(-200px) rotateY(180deg);"> <a href="[list:link]"><img src="[list:ico]">
        <div class="mark">
          <div class="wrap_mark">
            <div class="wrap_mark1">
              <h2><i>[list:title]</i> <em>[list:subtitle]</em></h2>
              <p class="visible-lg visible-md"></p>
            </div>
          </div>
        </div>
        </a> </li>
      {/pboot:list}
      <li class="li2 col-md-3 col-xs-6 block" data-rotate-y="180deg" data-move-z="-200px" data-move-x="300px" style="opacity: 0; transform: translateX(300px) translateZ(-200px) rotateY(180deg);"><a href="[sort:link]">
        <div class="more">
          <h2>View more</h2>
          <em></em></div>
        </a></li>
    </ul>
  </div>
  {/pboot:sort}
  {pboot:sort scode=1}
  <div class="section2">
    <div class="wrap_section2">
      <h2 class="tt1 block" data-move-y="-50px" style="opacity: 0; transform: translateY(-100px);">[sort:name]</h2>
      <p class="tt2 block" data-move-y="-50px" style="opacity: 0; transform: translateY(-50px);">[sort:subname]<em></em></p>
      <p class="info block" data-move-x="-50px" style="opacity: 0; transform: translateX(-50px);">{pboot:content id=19}[content:content drophtml=1 len=180]{/pboot:content}</p>
      <a href="[sort:link]" class="more"></a>
      <div class="div_img"><img class="img" src="{pboot:sitedomain}/skin/picture/about.jpg" /><em></em></div>
    </div>
  </div>
  {/pboot:sort}
  {pboot:sort scode=2}
  <div class="section3">
    <div class="wrap_section3">
      <h2 class="tt1 textaligntt1 block" data-move-y="-100px" style="opacity: 0; transform: translateY(-100px);">[sort:name]</h2>
      <p class="tt2 textaligntt2 block" data-move-y="-50px" style="opacity: 0; transform: translateY(-50px);">[sort:subname]<em></em></p>
    </div>
    <ul>
      {pboot:list scode=2 num=4 order=sorting}
      <li> <a href="[list:link]"> <img class="img1 visible-lg visible-md" src="[list:ico]"> <img class="img1 visible-xs visible-sm" src="[list:ico]">
        <div class="mark">
          <div class="wrap_mark">
            <div class="wrap_mark1"> <img src="{pboot:sitedomain}/skin/picture/ic1.png">
              <p>[list:subtitle]</p>
              <em>[list:title]</em> </div>
          </div>
        </div>
        <div class="mark1">
          <div class="wrap_mark">
            <div class="wrap_mark1"> <em>[list:title]</em>
              <p>[list:subtitle]</p>
              <span class="more">查看更多</span> </div>
          </div>
        </div>
        </a> </li>
      {/pboot:list}
    </ul>
  </div>
  {/pboot:sort}
  {pboot:sort scode=9}
  <div class="section4">
    <div class="wrap_section4">
      <h2 class="tt1 textaligntt1 block" data-move-y="-100px" style="opacity: 0; transform: translateY(-100px);">[sort:name]</h2>
      <p class="tt2 textaligntt2 block" data-move-y="-50px" style="opacity: 0; transform: translateY(-50px);">[sort:subname]<em></em></p>
      <div class="swiper-container news_swiper">
        <div class="swiper-wrapper"> {pboot:list scode=9 num=6 isico=1 order=sorting}
          <div class="swiper-slide"><a href="[list:link]"><i><img style="width: 100%;" src="[list:ico]"></i>
            <div class="info">
              <h2>[list:title]</h2>
              <p>[list:description]...</p>
              <span>[list:date style=Y-m-d]</span></div>
            </a></div>
          {/pboot:list} </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
  {/pboot:sort}
  <div class="footbg clearfix">
  <div class="footwrap col-md-11">
    <div class="logofriendly clearfix">
      <div class="footlogo col-sm-12 col-xs-12 col-md-2 block" data-move-x="-100px" style="opacity: 0; transform: translateX(-100px);"><img src="{pboot:sitelogo}"></div>
      <div class="footnav col-sm-12 col-xs-12 col-md-8 block" data-move-x="-100px" style="opacity: 0; transform: translateX(-100px);">友情链接：
	  {pboot:link gid=1 num=100}<a href="[link:link]" title="[link:name]" target="_blank">[link:name]</a>{/pboot:link}
	  </div>
    </div>
    <div class="copyright clearfix">
      <p class="p1">{pboot:sitecopyright} <a href="http://beian.miit.gov.cn" target="_blank" rel="nofollow">{pboot:siteicp}</a> <a href="{pboot:sitedomain}/sitemap.xml" target="_blank">XML地图</a> <a href="https://www.91084.com/" target="_blank">网站模板</a> {pboot:sitestatistical}</p>
    </div>
  </div>
  <div class="winxin col-md-1 visible-lg visible-md"> <i><img src="{pboot:companyweixin}"></i>
    <h2></h2>
  </div>
</div> </div>
</body>
</html><?php return array (
  0 => 'E:/hz/template/default/head.html',
  1 => 'E:/hz/template/default/footer.html',
); ?>