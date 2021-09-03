<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($title); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->

<link rel="stylesheet" type="text/css" href="/Public/Static/Admin/css/dropzone.min.css"/>
<link href="/Public/Static/Admin/css/app.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="/Public/Static/Admin/css/imageHotAreaStyle.css">
<!-- Custom CSS -->
<link href="/Public/Static/Admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/Public/Static/Admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/Public/Static/Admin/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="/Public/Static/Admin/js/jquery.min.js"></script>

<script src="/Public/Static/Admin/js/app.min.js"></script>
<!-- Nav CSS -->
<link href="/Public/Static/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/Public/Static/Admin/js/metisMenu.min.js"></script>
<script src="/Public/Static/Admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/Public/Static/Admin/js/d3.v3.js"></script>
<script src="/Public/Static/Admin/js/rickshaw.js"></script>
<script type="text/javascript" language="javascript" src="/Public/Static/Admin/js/jquery.image-maps5.0.js"></script>
<!-- <script src="/Public/Static/Admin/js/bootstrap.min.js"></script> -->
</head>
<script type="text/javascript">
    $(document).ready(function(e) {
        var title = $('.navbar-brand').html();

        var title_ = $('title').html();
        if(title_ == ''){
            $('title').html(title);
        }
    });
</script>
<style>
    .pager span {
        background: #00c0ef;
        color: #fff;
        border: 1px solid #00c0ef;
        margin-left: 8px;
        display: inline-block;
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .pager a {
        border: 1px solid #666666;
        padding: 6px 12px;
        margin-left: 8px;
        text-decoration: none;
        color: #333;
        outline: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
    }
</style>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <a class="navbar-brand" href="<?php echo U('Index/index',array('token'=>$token));?>">後台管理系統</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" aria-expanded="false"><button class="btn btn-info"><?php echo ($community_user['username']); ?></button></a>
                    <ul class="dropdown-menu">
                        <li class="m_2"><a href="<?php echo U('Login/edit');?>"><i class="fa fa-wrench"></i> 修改信息</a></li>
                        <li class="m_2"><a href="<?php echo U('Login/reset_password');?>"><i class="fa fa-user"></i> 修改密碼</a></li>
                        <li class="m_2"><a href="<?php echo U('Login/loginOut');?>"><i class="fa fa-lock"></i> 退出登錄</a></li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="<?php echo U('Active/index');?>"></i>活動管理<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="#"></i>街道管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Street/index');?>">街道列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('StreetHistory/index');?>">街道故事</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo U('News/index');?>"></i>資訊管理<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="<?php echo U('Slide/index');?>"></i>圖片管理<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="<?php echo U('Shop/index',array('type'=>'cate'));?>"></i>店鋪管理<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="<?php echo U('Posts/index');?>"></i>景點管理<span class="fa arrow"></span></a>

                        </li>
                        <li>
                                                                             <a href="#"></i>媒體管理<span class="fa arrow"></span></a>
                                                                             <ul class="nav nav-second-level">
                                                                                 <li>
                                                                                     <a href="<?php echo U('Media/index');?>">圖片管理</a>
                                                                                 </li>
                                                                                 <li>
                                                                                     <a href="<?php echo U('Media2/index');?>">視頻管理</a>
                                                                                 </li>
                                                                             </ul>
                                                                        </li>
                        <li>
                            <a href="<?php echo U('Category/index');?>"></i>系統管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/index');?>">管理员管理</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>



                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<script src="/Public/Static/Admin/ueditor/ueditor.config.js"></script>
<script src="/Public/Static/Admin/ueditor/ueditor.all.js"></script>
<style>
  #start_tip{
    display: none;
  }
  #end_tip{
    display: none;
  }
  </style>
            <div id="page-wrapper">
                <div class="graphs">
                    <div class="xs">
                        <h3>
                            編輯街道
                        </h3>
                        <div class="tab-content">
                            <div class="tab-pane active" id="horizontal-form">
                                <form class="form-horizontal" action="<?php echo U('Street/update');?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo ($street['id']); ?>">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">名稱*</label>
                                        <div class="col-sm-4">
                                            <input class="form-control1" id="name" name="name" type="text" value="<?php echo ($street['name']); ?>">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <button class="btn btn-info">
                                                  提交
                                              </button>
                                              <button type="button" class="btn btn-warning warning_22" onclick="javascript:history.back(-1);">返回列表</button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="copy_layout">
<p>
    Copyright © 2018 All rights reserved
    <a href="//www.macautech.net" target="_blank" title="普及科技">
        普及科技
    </a>

</p>
</div>
<script type="text/javascript">
	if($('.select2').length > 0) {
        $('.select2').select2();
    }
</script>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="/Public/Static/Admin/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Public/Static/Admin/js/metisMenu.min.js">
    </script>
    <script src="/Public/Static/Admin/js/custom.js">
    </script>
</link>
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>

        <!-- /#wrapper -->
        <!-- Nav CSS -->
        <link href="/Public/Static/Admin/css/custom.css" rel="stylesheet">
            <!-- Metis Menu Plugin JavaScript -->
            <script src="/Public/Static/Admin/js/metisMenu.min.js">
            </script>
            <script src="/Public/Static/Admin/js/custom.js">
            </script>
        </link>
    </body>
</html>
