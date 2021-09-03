<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>荷蘭園巡禮</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="/Public/Static/Home/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Public/Static/Home/css/style.css" />
    <link rel="stylesheet" href="/Public/Static/Home/css/headers/header1.css" />
    <link rel="stylesheet" href="/Public/Static/Home/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/Public/Static/Home/css/style_responsive.css" />
    <link rel="shortcut icon" href="https://www.hollandshow.cn/favicon.ico"/>
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/Public/Static/Home/plugins/revolution_slider/css/rs-style.css" media="screen" />
    <link rel="stylesheet" href="/Public/Static/Home/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="/Public/Static/Home/plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="/Public/Static/Home/plugins/flexslider/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/Public/Static/Home/plugins/parallax-slider/css/parallax-slider.css" type="text/css" />
    <link rel="stylesheet" href="/Public/Static/Home/plugins/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.css" />
    <link rel="stylesheet" href="/Public/Static/Home/plugins/portfolioSorting/css/sorting.css" />
    <!-- CSS Theme -->
    <link rel="stylesheet" href="/Public/Static/Home/css/themes/default.css" id="style_color" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <div class="fiexd_code">
        <!-- <img src="/Public/Static/Home/img/code.png"> -->
    </div>
    <!--=== Style Switcher ===-->
    <!-- <i class="style-switcher-btn icon-cogs"></i>
    <div class="style-switcher">
        <div class="theme-close">
            <i class="icon-remove"></i>
        </div>
        <div class="theme-heading">Theme Colors</div>
        <ul class="unstyled">
            <li class="theme-default theme-active" data-style="default" data-header="light"></li>
            <li class="theme-blue" data-style="blue" data-header="light"></li>
            <li class="theme-orange" data-style="orange" data-header="light"></li>
            <li class="theme-red" data-style="red" data-header="light"></li>
            <li class="theme-light" data-style="light" data-header="light"></li>
        </ul>
    </div> -->
    <!--/style-switcher-->
    <!--=== End Style Switcher ===-->

    <!--=== Top ===-->
    <div class="top">
        <!-- <div class="container">
            <ul class="loginbar pull-right">
                <li>
                    <i class="icon-globe"></i>
                    <a>語言
                        <i class="icon-sort-up"></i>
                    </a>
                    <ul class="nav-list">
                        <li class="active">
                            <a href="#">繁體</a>
                            <i class="icon-ok"></i>
                        </li>
                        <li>
                            <a href="#">簡體</a>
                        </li>

                    </ul>
                </li>
                <li class="devider">&nbsp;</li>
                <li>
                    <a href="page_faq.html" class="login-btn">幫助</a>
                </li>
                <li class="devider">&nbsp;</li>
                <li>
                    <a href="page_login.html" class="login-btn">登錄</a>
                </li>
            </ul>
        </div> -->
    </div>
    <!--/top-->
    <!--=== End Top ===-->

    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo U('Index/index');?>">
                    <img id="logo-header" src="/Public/Static/Home/img/logo1-default.png" alt="Logo" />
                </a>
            </div>
            <!-- /logo -->

            <!-- Menu -->
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <!-- /nav-collapse -->
                    <div class="nav-collapse collapse">
                        <ul class="nav top-2">
                            <li <?php if($Method == 'Index'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Index/index');?>" class="dropdown-toggle" data-toggle="">首頁
                                </a>
                            </li>
                            <li <?php if($Method == 'Active'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Active/index');?>" class="dropdown-toggle" data-toggle="">巡禮活動
                                </a>
                                <b class="caret-out"></b>
                            </li>
                            <li <?php if($Method == 'News'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('News/index');?>" class="dropdown-toggle" data-toggle="">新聞資訊
                                </a>

                                <b class="caret-out"></b>
                            </li>
                            <li <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
                                </a>

                                <b class="caret-out"></b>
                            </li>
                            <li <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
                                </a>

                                <b class="caret-out"></b>
                            </li>
                            <li <?php if($Method == 'Shop'): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo U('Shop/index');?>" class="dropdown-toggle" data-toggle="">社區美食
                                </a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'craft'));?>">手工技藝</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'create'));?>">新興文創</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'cate'));?>">特色飲食</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'antique'));?>">古玩收藏</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'dress'));?>">精品服飾</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'other'));?>">其他店鋪</a></li>
                                </ul> -->
                                <!-- <b class="caret-out"></b> -->
                            </li>
                            <li <?php if($Method == 'Media'): ?>class="active"<?php endif; ?>>
                                                            <a href="<?php echo U('Media/index');?>" class="dropdown-toggle" data-toggle="">媒體中心
                                                                                        </a>

                                                                                        <b class="caret-out"></b>
                                                                                    </li>
                            <li><a class="search"><i class="icon-search search-btn"></i></a></li>
                        </ul>
                        <div class="search-open">
                            <div class="input-append">
                                <form action="<?php echo U('Search/index');?>" method="get">

                                <input type="text" name="keyword" class="span3" placeholder="Search" />
                                <button type="submit" class="btn-u">Go</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /nav-collapse -->
                </div>
                <!-- /navbar-inner -->
            </div>
            <!-- /navbar -->
        </div>
        <!-- /container -->
    </div>
    <!--/header -->
<!--=== End Header ===-->

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-20">
    <div class="container">
        <h1 class="color-green pull-left"></h1>
        <ul class="pull-right breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首頁</a> <span class="divider">/</span></li>
            <li><a href="<?php echo U('Shop/index');?>">社區美食</a> <span class="divider">/</span></li>
            <li class="active"><?php echo ($shop['title']); ?></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid blog-page portflio_details">
        <!-- Left Sidebar -->
        <!-- <div class="span9"> -->
            <!-- <div class="blog margin-bottom-30"> -->
                <!-- <h3 class="text-center"><?php echo ($shop['title']); ?></h3> -->
                <!-- <div class="text-center">作者：</div> -->
                <!-- <div class="blog-img" style="font-size: 20px;"></div> -->
                    <!-- <p><?php echo (htmlspecialchars_decode($shop['content'])); ?></p> -->
                    <!-- <?php if($shop['business_hours']): ?><p style="color: rgb(51, 51, 51);">開店時間 : <?php echo ($shop['business_hours']); ?></p><?php endif; ?>
                    <?php if($shop['address']): ?><p style="color: rgb(51, 51, 51);">地址 : <?php echo ($shop['address']); ?></p><?php endif; ?> -->
            <!-- </div> --><!--/blog-->
            <!-- <ul class="unstyled" style="font-size: 16px">
                <li><i class="icon-time color-green"></i> 開放時間:<?php echo ($post['business_hours']); ?></li>
                <li><i class="icon-calendar color-green"></i> 地點:<?php echo ($post['address']); ?></li>
            </ul> -->



        <!-- </div> --><!--/span9-->

        <div style="display: block;float: left;width: 74.3%">
            <div style="font-size: 18px">
                <span style="width: 100%;display: inline-block;">上一篇：
                    <?php if($before['title'] != NULL): ?><a href="<?php echo U(Shop/detail,array('id'=>$before['id']));?>" class="handover"><?php echo ($before['title']); ?></a>
                    <?php else: ?>
                        <a class="no">無</a><?php endif; ?>
                </span>
                <span>下一篇：
                    <?php if($later['title'] != NULL): ?><a href="<?php echo U(Shop/detail,array('id'=>$later['id']));?>" class="handover"><?php echo ($later['title']); ?></a>
                    <?php else: ?>
                        <a class="no">無</a><?php endif; ?>
                </span>
            </div>
            <div class="span7" style="clear: right;">
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <?php if($images): if(is_array($images)): $key = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($key % 2 );++$key;?><div class="item <?php if($key == 1): ?>active<?php endif; ?>">
                                <img src="<?php echo ($row['savepath']); ?>" alt="" />
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php else: ?>
                        <div class="item active">
                            <img src="<?php echo ($shop['cover']); ?>" alt="" />
                        </div><?php endif; ?>
                    </div>
                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel" class="left carousel-control"><i class="icon-angle-left"></i></a>
                        <a data-slide="next" href="#myCarousel" class="right carousel-control"><i class="icon-angle-right"></i></a>
                    </div>
                </div>
            </div><!--/span7-->
            <!-- //End Tabs and Carousel -->

            <div class="span5" style="width: 37.5%;margin-top: 50px;">
                <h3><?php echo ($shop['title']); ?></h3>
                <p><?php echo (htmlspecialchars_decode($shop['content'])); ?></p>

                <ul class="unstyled" style="font-size: 16px">
                    <li>
                        <span style="width:80px;display: inline-block;vertical-align: top;"><i class="icon-phone color-green"></i> 電話：</span>
                        <span style="width:210px;display: inline-block;vertical-align: top;"><?php echo ($shop['phone']); ?></span>
                    </li>
                    <li>
                        <span style="width:80px;display: inline-block;vertical-align: top;"><i class="icon-map-marker color-green"></i> 地點：</span>
                        <span style="width:210px;display: inline-block;vertical-align: top;"><?php echo ($shop['address']); ?></span>
                    </li>
                </ul>
            </div>
            <div class="headline" style="display:block;margin:0px 0 25px 0;border-bottom:1px dotted #e4e9f0;clear: left;">
                <h3>猜你喜歡</h3>
                <div class="recent-work-btn">
                    <div class="swiper-button-prev recent-work-prev"></div>
                    <div class="swiper-button-next recent-work-next"></div>
                </div>
            </div>
            <div class="swiper-container swiper-con-shop">
                <ul class="thumbnails swiper-wrapper ulc">
                    <?php if(is_array($re_shop)): $i = 0; $__LIST__ = $re_shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop_re): $mod = ($i % 2 );++$i;?><li class="swiper-slide" style="height: 250px; width: 285px; margin-right: 10px;">
                        <a class="shop_a" href="<?php echo U(Shop/detail,array('id'=>$shop_re['id']));?>" style="text-align:center;background:#fcfcfc;display:inline-block;">
                            <em class="overflow-hidden"><img style="width:265px;height:180px;" src="<?php echo ($shop_re['cover_width_300']); ?>" alt="" /></em>
                            <span style="display: block;padding: 10px;border-bottom: solid 2px #eee;">
                                <strong><?php echo ($shop_re['title']); ?></strong>
                                <i></i>
                            </span>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="span3">
            <!-- Search Bar -->
            <div class="headline"><h3>搜索內容</h3></div>
            <div class="input-append  margin-bottom-20">
                <form action="<?php echo U('Search/index');?>" method="get">
                    <input type="text" name="keyword" class="span9" />
                    <button type="submit" class="btn-u">搜索</button>
                </form>

            </div>

            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <div class="headline"><h3>最新活動</h3></div>
                <?php if(is_array($new_active)): $i = 0; $__LIST__ = $new_active;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active): $mod = ($i % 2 );++$i;?><dl class="dl-horizontal">
                    <dt><a href="<?php echo U('Active/detail',array('id'=>$active['id']));?>"><img src="<?php echo ($active['cover']); ?>" alt="" /></a></dt>
                    <dd>
                        <p><a href="<?php echo U('Active/detail',array('id'=>$active['id']));?>"><?php echo ($active['title']); ?></a></p>
                    </dd>
                </dl><?php endforeach; endif; else: echo "" ;endif; ?>
            </div><!--/posts-->

            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <div class="headline"><h3>最新資訊</h3></div>
                <?php if(is_array($right_data)): $i = 0; $__LIST__ = $right_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$right_data_row): $mod = ($i % 2 );++$i;?><dl class="dl-horizontal">
                    <dt>
                        <?php if($right_data_row['type'] == 'shop'): ?><a href="<?php echo U('Shop/detail',array('id'=>$right_data_row['id']));?>">
                        <?php elseif($right_data_row['type'] == 'posts'): ?>
                        <a href="<?php echo U('Posts/detail',array('id'=>$right_data_row['id']));?>">
                        <?php else: ?>
                        <a href="<?php echo U('StreetHistory/detail',array('id'=>$right_data_row['id']));?>"><?php endif; ?>
                        <img src="<?php echo ($right_data_row['cover_width_300']); ?>" alt="" />
                        </a>
                    </dt>
                    <dd>
                        <p>
                        <?php if($right_data_row['type'] == 'shop'): ?><a href="<?php echo U('Shop/detail',array('id'=>$right_data_row['id']));?>">
                        <?php elseif($right_data_row['type'] == 'posts'): ?>
                        <a href="<?php echo U('Posts/detail',array('id'=>$right_data_row['id']));?>">
                        <?php else: ?>
                        <a href="<?php echo U('StreetHistory/detail',array('id'=>$right_data_row['id']));?>"><?php endif; echo ($right_data_row['title']); ?></a>
                        </p>
                    </dd>
                </dl><?php endforeach; endif; else: echo "" ;endif; ?>

            </div><!--/posts-->
            <!-- Photo Stream -->
            <!-- <div class="headline"><h3>社區美圖</h3></div>
            <ul class="unstyled blog-ads">
                <li><a href="photo_details.html"><img src="/Public/Static/Home/img/sliders/elastislide/5.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/Public/Static/Home/img/sliders/elastislide/6.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/Public/Static/Home/img/sliders/elastislide/8.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/Public/Static/Home/img/sliders/elastislide/10.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/Public/Static/Home/img/sliders/elastislide/11.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/Public/Static/Home/img/sliders/elastislide/1.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/Public/Static/Home/img/sliders/elastislide/2.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/Public/Static/Home/img/sliders/elastislide/7.jpg" alt="" class="hover-effect" /></a></li>
            </ul> -->

            <!-- Blog Tags -->

        </div>
        <!--/span3-->

        <!-- Recent Works -->
        <!-- <div class="headline1">
            <h3>其他店鋪</h3>
            <div class="recent-work-btn">
                <div class="swiper-button-prev recent-work-prev"></div>
                <div class="swiper-button-next recent-work-next"></div>
            </div>
        </div>
        <div class="swiper-container swiper-con-activity">
            <ul class="thumbnails swiper-wrapper ulc">
                <?php if(is_array($re_shop)): $i = 0; $__LIST__ = $re_shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop_re): $mod = ($i % 2 );++$i;?><li class="swiper-slide" style="height:250px;">
                    <a href="<?php echo U(Shop/detail,array('id'=>$shop_re['id']));?>">
                        <em class="overflow-hidden"><img style="height:180px;" src="<?php echo ($shop_re['cover']); ?>" alt="" /></em>
                        <span>
                            <strong><?php echo ($shop_re['title']); ?></strong>
                            <i></i>
                        </span>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div> -->
    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->
<style type="text/css">
    .headline{
        margin: 0px;
    }
    .handover{
        padding: 3px;
        color: #cc9966;
        font-size: 18px;
    }
    .handover:hover{
        color:#fcd600;
        text-decoration: none;
    }
    .no{
        pointer-events:none;
        color:#ddd;
        font-size: 18px;
    }

    @media (max-width: 768px){
        .span5{
            width:374px;
            margin: 0px;
        }
    }
    @media (max-width: 425px){
        .span5{
            width:335;
            margin: 0px;
        }
    }
    @media (max-width: 320px){
        .span5{
            width:280px;
            margin: 0px;
        }
    }

</style>

<!--=== Footer ===-->
    <!--=== Footer ===-->
    <div class="footer">
        <img src="/Public/Static/Home/img/footer/footer.jpg" class="footer-img footer-img-pc" alt="" />
        <img src="/Public/Static/Home/img/footer/footer-mod.jpg" class="footer-img footer-img-mod" alt="" />
        <a style="color: #696969;text-decoration:underline;position: relative;top:-20px;" href="http://www.macautech.net/">普及科技（澳門）有限公司</a><span style="color: #696969;position: relative;top:-20px;">提供技術支持</span>
    </div><!--/footer-->
    <!--=== End Footer ===-->

    <!--=== Copyright ===-->
    <!-- <div class="copyright">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">

                </div>
                <div class="span4">
                    <a href="<?php echo U('Index/index');?>">
                        <img id="logo-footer" src="/Public/Static/Home/img/logo2-default.png" class="pull-right" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!--/copyright-->
    <!--=== End Copyright ===-->

    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="/Public/Static/Home/js/jquery-1.8.2.min.js"></script>
    <!-- <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=PSGDO96ZzxBUijinzhN6PajEn75enP1c" /> -->
    <script type="text/javascript" src="/Public/Static/Home/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/bxslider/jquery.bxslider.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/parallax-slider/js/modernizr.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/parallax-slider/js/jquery.cslider.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/portfolioSorting/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/portfolioSorting/js/sorting.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/plugins/back-to-top.js"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="/Public/Static/Home/js/app.js"></script>
    <script type="text/javascript" src="/Public/Static/Home/js/pages/index.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $(".ulc").on("click" , "li" , function(){
                  var link = $(this).attr("link");
                  window.parent.location.href=link;
            })

            var winWidth=$("html").width();
            if(winWidth>767){
                $(".footer-img-pc").show();
                $(".footer-img-mod").hide();
            }else{
                $(".footer-img-mod").show();
                $(".footer-img-pc").hide();
            }

            var mySwiper = new Swiper ('.swiper-con-activity', {
                //loop: true,
                slidesPerView :4,
                slidesPerGroup :4,
                spaceBetween : 10,
                breakpoints: {
                    1200: {
                        slidesPerView: 4,
                        slidesPerGroup : 4,
                    },
                    979: {
                    slidesPerView: 3,
                    slidesPerGroup : 3,
                    },
                    767: {
                    slidesPerView: 2,
                    slidesPerGroup : 2,
                    },
                    460: {
                    slidesPerView: 1,
                    slidesPerGroup : 1,
                    }
                },
                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            });

            var mySwiper = new Swiper ('.swiper-con-scenic', {
                loop: true,
                slidesPerView: 4,
                slidesPerGroup : 4,
                spaceBetween : 10,
                breakpoints: {
                    1200: {
                        slidesPerView: 4,
                        slidesPerGroup : 4,
                    },
                    979: {
                    slidesPerView: 3,
                    slidesPerGroup : 3,
                    },
                    767: {
                    slidesPerView: 2,
                    slidesPerGroup : 2,
                    },
                    460: {
                    slidesPerView: 1,
                    slidesPerGroup : 1,
                    }
                },
                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            });

            var mySwiper = new Swiper ('.swiper-con-shop', {
                slidesPerView: 3,
                slidesPerGroup : 4,
                spaceBetween : 5,
                breakpoints: {
                    1200: {
                        slidesPerView: 3,
                        slidesPerGroup : 3,
                    },
                    979: {
                    slidesPerView: 3,
                    slidesPerGroup : 3,
                    },
                    767: {
                    slidesPerView: 2,
                    slidesPerGroup : 2,
                    },
                    460: {
                    slidesPerView: 1,
                    slidesPerGroup : 1,
                    }
                },
                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            });

            App.init();
            App.initBxSlider1();
            App.initSliders();
            // Index.initParallaxSlider();
            Index.initRevolutionSlider();
        });

        // var map = new BMap.Map("map");
        // var point = new BMap.Point(116.404, 39.915);
        // map.centerAndZoom(point, 15);
        // var marker = new BMap.Marker(point); // 创建标注
        // map.addOverlay(marker); // 将标注添加到地图中
        // marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
        jQuery(document).ready(function() {
            App.init();
        });
        jQuery(document).ready(function () {
            App.init();
            App.initBxSlider1();
            App.initSliders();
            Index.initParallaxSlider();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="/Public/Static/Home/js/respond.js"></script>
<![endif]-->

</body>

</html>
