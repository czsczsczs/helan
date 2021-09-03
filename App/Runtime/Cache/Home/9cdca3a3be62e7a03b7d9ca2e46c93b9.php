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

<style type="text/css">

</style>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <!-- <h1 class="color-green pull-left">Portfolio</h1> -->
        <ul class="pull-right breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首頁</a> <span class="divider">/</span></li>
            <li class="active">社區美食</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->
<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid">
        <div id="w">
            <div class="sort">
                <ul class="unstyled inline">
                    <li><a href="<?php echo U('Shop/index');?>" <?php if($street_id == ''): ?>class="selected"<?php endif; ?>>全部</a></li>
                    <?php if(is_array($street)): $i = 0; $__LIST__ = $street;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$street_row): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Shop/index',array('street_id'=>$street_row['id']));?>" <?php if($street_id == $street_row['id']): ?>class="selected"<?php endif; ?>><?php echo ($street_row['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

            <ul class="portfolio recent-work clearfix">
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('Shop/detail',array('id'=>$row['id']));?>">
                        <em class="overflow-hidden imgsize"><img src="<?php echo ($row['cover_width_300']); ?>" alt="" /></em>
                        <span>
                            <strong><?php echo ($row['title']); ?></strong>
                        </span>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="pagination pagination-large pagination-centered">
                <ul><?php echo ($page); ?></ul>
            </div>

        </div>
    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->


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
