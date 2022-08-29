<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>{sort:title}</title>
<meta name="keywords" content="{sort:keywords}">
<meta name="description" content="{sort:description}">
<link href="{pboot:sitedomain}/skin/css/bootstrap.min.css" rel="stylesheet">
<link href="{pboot:sitedomain}/skin/css/swiper-3.3.1.min.css" rel="stylesheet" />
<link href="{pboot:sitedomain}/skin/css/animate.css" rel="stylesheet">
<link href="{pboot:sitedomain}/skin/css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{pboot:sitedomain}/skin/js/html5shiv.min.js"></script>
    <script src="{pboot:sitedomain}/skin/js/respond.min.js"></script>
    <![endif]-->
<script src="{pboot:sitedomain}/skin/js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="{pboot:sitedomain}/skin/js/touchslide.1.1.js"></script>
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
  <div id="myCarousel1" class="carousel slide visible-md visible-lg">
    <div class="carousel-inner">
      {pboot:sort scode={sort:tcode}}<div class="item active"> <a><img src="[sort:pic]" width="100%"><em></em></a> </div>{/pboot:sort}
    </div>
  </div>
  <!-- 手机banner -->
  <div id="molbanner" class="visible-xs visible-sm">
    <div class="swiper-container swiper-banner">
      <ul class="swiper-wrapper banner-img">
        {pboot:sort scode={sort:tcode}}<li class="swiper-slide"><a class="pic"><img src="[sort:pic]"/></a></li>{/pboot:sort}
      </ul>
    </div>
  </div>
  <div class="inner_main">
    <div class="ny_cont">
      <div class="nyttweizhi">
        <div class="nytitle agdollar wow fadeInLeft">
          <h2>{sort:topname}</h2>
        </div>
        <div class="weizhi visible-md visible-lg">{pboot:position}  </div>
        <a href="javascript:;" class="classfiy visible-sm visible-xs">分类 +</a> </div>
      <div class="navs">
        <ul class="mtree transit">
          {pboot:nav parent={sort:tcode}}
          <li><a href="[nav:link]" {pboot:if('[nav:scode]'=='{sort:scode}')}class="thisclass"{/pboot:if}>[nav:name]<em></em></a></li>
          {/pboot:nav}
        </ul>
      </div>
      <div class="wrap_page aboutbgpage">
        <div class="page_content">
          <div class="nynav visible-md visible-lg">
            <ul class="clearfix">
              {pboot:nav parent={sort:tcode}}
              <li {pboot:if('[nav:scode]'=='{sort:scode}')}class="current"{/pboot:if}><a href="[nav:link]">[nav:name]</a></li>
              {/pboot:nav}
            </ul>
          </div>
          <div class="ny_content">
            <ul class="news1page clearfix">
              {pboot:list num=8 order=sorting}
              <li> <a href="[list:link]" class="clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12 div_img"> <i><img src="[list:ico]"></i>
                  <div class="newsmark visible-lg visible-md">
                    <div class="newswrap_mark">
                      <div class="newswrap_mark1">
                        <h2>立即预定</h2>
                        <img src="{pboot:sitedomain}/skin/picture/nmore.png"></div>
                    </div>
                  </div>
                </div>
                <div class="info col-md-6 col-sm-6 col-xs-12">
                  <p class="tt3">[list:title]</p>
                  <p class="tt4">线路编号：[list:ext_xlbh]<br>
                    特色亮点：[list:ext_xlld]<br>
                    行程：[list:ext_xc]<br>
                    出团日期：[list:ext_ctrq]</p>
                  <p class="tt5"><em>原价：[list:ext_yj]</em> <span><i>[list:ext_xj]</i>元起/人</span></p>
                </div>
                </a> </li>
              {/pboot:list}
            </ul>
          </div>
          <div class="pagebar">{page:bar}</div>
        </div>
      </div>
    </div>
  </div>
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