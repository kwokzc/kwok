<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"/Users/Kwok/git/kwok/public/../application/index/view/index/index.html";i:1540996834;s:62:"/Users/Kwok/git/kwok/application/index/view/public/header.html";i:1540996834;s:67:"/Users/Kwok/git/kwok/application/index/view/public/public-body.html";i:1540996834;s:65:"/Users/Kwok/git/kwok/application/index/view/public/public-js.html";i:1540996834;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh-CN">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo config('website_config.description'); ?>">
  <meta name="keywords" content="<?php echo config('website_config.keywords'); ?>" />
  <title><?php echo config('website_config.title'); ?></title>

  <!-- ========== Css Files ========== -->
  <link href="/../static/index/css/root.css" rel="stylesheet">
  
  </head>
  <body>

  <!-- Start Page Loading -->
  <div class="loading"><img src="/../static/index/img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

  <!-- START TOP -->
  <div id="top" class="clearfix">

  	<!-- Start App Logo -->
  	<div class="applogo">
  		<a href="<?php echo url('index/index/index'); ?>" class="logo">Kwok信息管理</a>
  	</div>
  	<!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="搜索">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <!-- Start Top Menu -->
    <ul class="topmenu">
      <li><a href="#">文件</a></li>
      <li><a href="#">作者</a></li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">我的文件<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">视频</a></li>
          <li><a href="#">图片</a></li>
          <li><a href="#">博客文章</a></li>
        </ul>
      </li>
    </ul>
    <!-- End Top Menu -->

    <!-- Start Sidepanel Show-Hide Button -->
    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
    <!-- End Sidepanel Show-Hide Button -->

    <!-- Start Top Right -->
    <ul class="top-right">

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle hdbutton">创建新的<span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list">
          <li><a href="#"><i class="fa falist fa-paper-plane-o"></i>产品或物品</a></li>
          <li><a href="#"><i class="fa falist fa-font"></i>博客文章</a></li>
          <li><a href="#"><i class="fa falist fa-file-image-o"></i>图库</a></li>
          <li><a href="#"><i class="fa falist fa-file-video-o"></i>视频库</a></li>
        </ul>
    </li>

    <li class="link">
      <a href="#" class="notifications">6</a>
    </li>

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="/../static/index/img/profileimg.png" alt="img"><b>Administrator</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li role="presentation" class="dropdown-header">个人</li>
          <li><a href="#"><i class="fa falist fa-inbox"></i>收件箱<span class="badge label-danger">4</span></a></li>
          <li><a href="#"><i class="fa falist fa-file-o"></i>文件</a></li>
          <li><a href="#"><i class="fa falist fa-wrench"></i>设置</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="fa falist fa-lock"></i> 锁屏</a></li>
          <li><a href="#"><i class="fa falist fa-power-off"></i> 注销</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">主菜单</li>
  <li><a href="index.html"><span class="icon color5"><i class="fa fa-home"></i></span>仪表盘<span class="label label-default">2</span></a></li>
  <li><a href="fundgrid.html"><span class="icon color6"><i class="fa fa-line-chart"></i></span>基金网格系统<span class="label label-default">1</span></a></li>
  <li><a href="mailbox.html"><span class="icon color6"><i class="fa fa-envelope-o"></i></span>邮箱<span class="label label-default">19</span></a></li>
  <li><a href="#"><span class="icon color7"><i class="fa fa-flask"></i></span>UI元素<span class="caret"></span></a>
    <ul>
      <li><a href="icons.html">图标</a></li>
      <li><a href="tabs.html">标签</a></li>
      <li><a href="buttons.html">按钮</a></li>
      <li><a href="panels.html">面板</a></li>
      <li><a href="notifications.html">通知</a></li>
      <li><a href="modal_boxes.html">Modal Boxes</a></li>
      <li><a href="progress_bars.html">进度条</a></li>
      <li><a href="others.html">其他<span class="label label-danger">新</span></a></li>
    </ul>
  </li>
  <li><a href="charts.html"><span class="icon color8"><i class="fa fa-bar-chart"></i></span>图表</a></li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>表<span class="caret"></span></a>
    <ul>
      <li><a href="basic_table.html">基本表格</a></li>
      <li><a href="data_table.html">数据表</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>表单<span class="caret"></span></a>
    <ul>
      <li><a href="form_elements.html">表单元素</a></li>
      <li><a href="layouts.html">表单布局</a></li>
      <li><a href="text_editors.html">文字编辑</a></li>
    </ul>
  </li>
  <li><a href="widgets.html"><span class="icon color11"><i class="fa fa-diamond"></i></span>小工具</a></li>
  <li><a href="calendar.html"><span class="icon color8"><i class="fa fa-calendar-o"></i></span>日历<span class="label label-danger">NEW</span></a></li>
  <li><a href="typography.html"><span class="icon color12"><i class="fa fa-font"></i></span>活版印刷</a></li>
  <li><a href="#"><span class="icon color14"><i class="fa fa-paper-plane-o"></i></span>额外页面<span class="caret"></span></a>
    <ul>
      <li><a href="social_profile.html">社交档案</a></li>
      <li><a href="invoice.html">发票<span class="label label-danger">新</span></a></li>
      <li><a href="login.html">登录页面</a></li>
      <li><a href="register.html">注册</a></li>
      <li><a href="forgot_password.html">忘记密码</a></li>
      <li><a href="lockscreen.html">锁屏</a></li>
      <li><a href="blank.html">空白页</a></li>
      <li><a href="contact.html">联系</a></li>
      <li><a href="404.html">404页面</a></li>
      <li><a href="500.html">500页面</a></li>
    </ul>
  </li>
</ul>

<ul class="sidebar-panel nav">
  <li class="sidetitle">MORE</li>
  <li><a href="grid.html"><span class="icon color15"><i class="fa fa-columns"></i></span>网格系统</a></li>
  <li><a href="maps.html"><span class="icon color7"><i class="fa fa-map-marker"></i></span>地图</a></li>
  <li><a href="customizable.html"><span class="icon color10"><i class="fa fa-lightbulb-o"></i></span>定制</a></li>
  <li><a href="helper-classes.html"><span class="icon color8"><i class="fa fa-code"></i></span>助手课程</a></li>
  <li><a href="changelogs.html"><span class="icon color12"><i class="fa fa-file-text-o"></i></span>更新日志</a></li>
</ul>

<div class="sidebar-plan">
  专业计划<a href="#" class="link">升级</a>
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
  </div>
</div>
<span class="space">42 GB / 100 GB</span>
</div>

</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="active">This is a quick overview of some features</li>
    </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index.html" class="btn btn-light">Dashboard</a>
        <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-widget">

  <!-- Start Top Stats -->
  <div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-dot-circle-o"></i> Today Profit</span>
      <h3>$36.45</h3>
      <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-calendar-o"></i> This Week</span>
      <h3>$96.25</h3>
      <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-shopping-cart"></i> Total Sales</span>
      <h3 class="color-up">696</h3>
      <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last month</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-users"></i> Visitors</span>
      <h3>960</h3>
      <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-eye"></i> Page View</span>
      <h3 class="color-up">46.230</h3>
      <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-clock-o"></i> Avarage Time</span>
      <h3 class="color-down">2:10<small>min</small></h3>
      <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span>
    </li>
  </ul>
  </div>
  <!-- End Top Stats -->


  <!-- Start First Row -->
  <div class="row">

    <!-- Start Chart Daily -->
    <div class="col-md-12 col-lg-7">
      <div class=" panel-widget widget chart-with-stats clearfix" style="height:450px;">

        <div class="col-sm-12" style="height:450px;">
          <h4 class="title">TODAY SALES<small>Last update: 1 Hours ago</small></h4>
          <div class="top-label"><h2>11.291</h2><h4>Today Total</h4></div>
          <div class="bigchart" id="todaysales"></div>
        </div>
        <div class="right" style="height:450px;">
          <h4 class="title">PAGE VIEW</h4>
          <!-- start stats -->
          <ul class="widget-inline-list clearfix">
            <li class="col-12"><span>962</span>Themeforest<i class="chart sparkline-green"></i></li>
            <li class="col-12"><span>367</span>Codecanyon<i class="chart sparkline-blue"></i></li>
            <li class="col-12"><span>92</span>Photodune<i class="chart sparkline-red"></i></li>
          </ul>
          <!-- end stats -->
        </div>


      </div>
    </div>
    <!-- End Chart Daily -->


    <!-- Start Files -->
    <div class="col-md-12 col-lg-5">
      <div class="panel panel-widget" style="height:450px;">
        <div class="panel-title">
          My Files <span class="label label-danger">29</span>
          <ul class="panel-tools">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body table-responsive">

          <table class="table table-dic table-hover ">
            <tbody>
              <tr>
                <td><i class="fa fa-folder-o"></i>Projects</td>
                <td>Folder</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-file-archive-o"></i>Backup</td>
                <td>Zip</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-file-code-o"></i>Kode Theme</td>
                <td>Html</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-file-pdf-o"></i>Documents</td>
                <td>Pdf</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-folder-o"></i>Themes</td>
                <td>Folder</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-folder-o"></i>Uploaded Files</td>
                <td>Folder</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-folder-o"></i>Personal Files</td>
                <td>Folder</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
            </tbody>
          </table>          

        </div>
      </div>
    </div>
    <!-- End Files -->

  </div>  
  <!-- End First Row -->


  <!-- Start Second Row -->
  <div class="row">



    <!-- Start Today Activity -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget" style="height:380px;">
        <div class="panel-title">
          TODAY ACTIVITY <span class="label label-success">9</span>
          <ul class="panel-tools panel-tools-hover">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

          <ul class="widget-inline-list clearfix">
            <li class="col-4"><span>1:52:22</span>Active Time</li>
            <li class="col-4"><span>60%</span>Completed</li>
            <li class="col-4"><span>0:11:46</span>Break Time</li>
          </ul>

          <div id="todayactivity" class="chart-on-bottom"></div>

        </div>
      </div>
    </div>
    <!-- End Today Activity -->

    <!-- Start Server Status -->
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-widget" style="height:380px;">
        <div class="panel-title">
          SERVER STATUS <span class="label label-default">196</span>
          <ul class="panel-tools panel-tools-hover">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

          <ul class="widget-inline-list clearfix">
            <li class="col-3 color10"><span>28.9GB</span>Total Usage</li>
            <li class="col-3"><span>92%</span>Space Left</li>
            <li class="col-3 color7"><span>22%</span>CPU</li>
            <li class="col-3"><span>512MB</span>Total RAM</li>
          </ul>

          <div id="realtime" class="flotchart-placeholder" style="height:190px;"></div>

        </div>
      </div>
    </div>
    <!-- End Server Status -->

    <!-- Start Profile Widget -->
    <div class="col-md-12 col-lg-3">
      <div class="widget profile-widget" style="height:380px;">
        <img src="/../static/index/img/profileimg.png" class="profile-image" alt="img">
        <h1>Jonathan Doe</h1>
        <p><i class="fa fa-map-marker"></i> London</p>
        <a href="#" class="btn btn-sm">Follow</a>
        <ul class="stats widget-inline-list clearfix">
          <li class="col-4"><span>2.109</span>Followers</li>
          <li class="col-4"><span>596</span>Photos</li>
          <li class="col-4"><span>902</span>Like</li>
        </ul>
      </div>
    </div>
    <!-- End Profile Widget -->


  </div>
  <!-- End Second Row -->


  <!-- Start Third Row -->
  <div class="row">


    <!-- Start General Stats -->
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-widget" style="height:205px;">
        <div class="panel-title">
          General Stats
        </div>
        <div class="panel-body">

          <div class="easypie margin-b-50" data-percent="82"><span>82%</span>New Visit</div>
          <div class="easypie margin-b-50" data-percent="30"><span>30%</span>Order</div>
          <div class="easypie margin-b-50 margin-b-40" data-percent="62"><span>62%</span>Page View</div>
          <div class="easypie margin-b-50" data-percent="15"><span>15%</span>Client</div>
          <div class="easypie margin-b-50" data-percent="45"><span>45%</span>Storage</div>
          <div class="easypie margin-b-50" data-percent="75"><span>76%</span>Comments</div>

        </div>
      </div>
    </div>
    <!-- End General Stats -->

    <!-- Start TwitterBox -->
    <div class="col-md-6 col-lg-3">
      <div class="widget socialbox" style="background:#02A8F3; height:205px;">

        <p class="text">
          Never in all their history have men been able truly...
        </p>
        <p class="text-info">22 May, 2015 via mobile</p>

        <div class="logo"><i class="fa fa-twitter"></i></div>

        <ul class="info">
          <li><i class="fa fa-retweet"></i>694</li>
          <li><i class="fa fa-star-o"></i>2.192</li>
        </ul>

      </div>
    </div>
    <!-- End TwitterBox -->

    <!-- Start FacebookBox -->
    <div class="col-md-6 col-lg-3">
      <div class="widget socialbox" style="background:#47639E; height:205px;">

        <p class="text">
          Science has not yet mastered prophecy.
        </p>
        <p class="text-info">22 May, 2015 via mobile</p>

        <div class="logo"><i class="fa fa-facebook"></i></div>

        <ul class="info">
          <li><i class="fa fa-thumbs-up"></i>694</li>
          <li><i class="fa fa-comment"></i>2.192</li>
        </ul>

      </div>
    </div>
    <!-- End FacebookBox -->

  </div>
  <!-- End Third Row -->


  <!-- Start Fourth Row -->
  <div class="row">

    <!-- Start Browser Stats -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget">
        <div class="panel-title">
          Browser Stats
          <ul class="panel-tools panel-tools-hover">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

          <ul class="basic-list">
            <li>Google Chrome <span class="right label label-default">42.8%</span></li>
            <li>Firefox <span class="right label label-danger">16.9%</span></li>
            <li>Safari <span class="right label label-success">15.5%</span></li>
            <li>Opera <span class="right label label-primary">11.8%</span></li>
            <li>Internet Explorer <span class="right label label-danger">3.2%</span></li>
            <li>Mobile <span class="right label label-warning">3%</span></li>
            <li>Others <span class="right label label-warning">0%</span></li>
          </ul>

        </div>
      </div>
    </div>
    <!-- End Browser Stats -->

    <!-- Start Orders -->
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-widget">
        <div class="panel-title">
          LAST ORDERS <span class="label label-warning">196</span>
          <ul class="panel-tools">
            <li><a class="icon search-tool"><i class="fa fa-search"></i></a></li>
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <td class="text-center"><i class="fa fa-trash"></i></td>
                <td>Order ID</td>
                <td>Product</td>
                <td>Buyer</td>
                <td>Date</td>
                <td>Payment</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox1" type="checkbox"><label for="checkbox1"></label></div></td>
                <td># <b>9652</b></td>
                <td>Kode Gaming Laptop</td>
                <td>John Doe</td>
                <td>12/10/2015</td>
                <td>Credit Card</td>
              </tr>
              <tr>
                <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox2" type="checkbox"><label for="checkbox2"></label></div></td>
                <td># <b>1963</b></td>
                <td>New Season Jacket</td>
                <td>Jane Doe</td>
                <td>12/10/2015</td>
                <td>Paypal</td>
              </tr>
              <tr>
                <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox3" type="checkbox"><label for="checkbox3"></label></div></td>
                <td># <b>9652</b></td>
                <td>IO Mouse</td>
                <td>Jonathan Doe</td>
                <td>12/10/2015</td>
                <td>Credit Card</td>
              </tr>
              <tr>
                <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox4" type="checkbox"><label for="checkbox4"></label></div></td>
                <td># <b>9651</b></td>
                <td>Doe Bike</td>
                <td>Jonathan Doe</td>
                <td>12/10/2015</td>
                <td>Credit Card</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- End Orders -->


    <!-- Start Inbox -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget">
        <div class="panel-title">
          Inbox <span class="label label-danger">9</span>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

        <ul class="mailbox-inbox">

            <li>
              <a href="#" class="item clearfix">
                <img src="/../static/index/img/profileimg.png" alt="img" class="img">
                <span class="from">Jonathan Doe</span>
                Hello, m8 how is goin ?
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="/../static/index/img/profileimg2.png" alt="img" class="img">
                <span class="from">Egemem Ka</span>
                Problems look mighty small...
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="/../static/index/img/profileimg3.png" alt="img" class="img">
                <span class="from">James Throwing</span>
                New job offer ?
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="/../static/index/img/profileimg4.png" alt="img" class="img">
                <span class="from">Timmy Jefsin</span>
                Tonight Party
                <span class="date">22 May</span>
              </a>
            </li>


        </ul>

        </div>
      </div>
    </div>
    <!-- End Inbox -->

  </div>
  <!-- End Fourth Row -->


  <!-- Start Fifth Row -->
  <div class="row">


    <!-- Start Project Stats -->
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-widget">
        <div class="panel-title">
          Projects Stats <span class="label label-info">62</span>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="table table-hover">
            <thead>
              <tr>
                <td>ID</td>
                <td>Project</td>
                <td>Status</td>
                <td class="text-right">Progress</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>965</td>
                <td>Kode Dashboard Template</td>
                <td><span class="label label-default">Developing</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
              <tr>
                <td>620</td>
                <td>EBI iOS Application</td>
                <td><span class="label label-warning">Design</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
              <tr>
                <td>621</td>
                <td>Kode Landing Page</td>
                <td><span class="label label-info">Testing</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
              <tr>
                <td>621</td>
                <td>John Coffe Shop Logo</td>
                <td><span class="label label-danger">Canceled</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
              <tr>
                <td>621</td>
                <td>BKM Website Design</td>
                <td><span class="label label-primary">Reply waiting</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- Start Project Stats -->


    <!-- Start BlogPost -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget blog-post">
        <div class="panel-body">

          <div class="image-div color10-bg">
            <img src="/../static/index/img/example1.jpg" class="image" alt="img">
            <h1 class="title"><a href="#">Across the sea of space, the stars are other suns.</a></h1>
          </div>
          <p class="text">There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally...</p>
          <a href="#">Read More</a>
          <p class="author">
            <img src="/../static/index/img/profileimg.png" alt="img">
            <span>Jonathan Doe</span>
            Designer
          </p>


        </div>
      </div>
    </div>
    <!-- End BlogPost -->


    <!-- Start Teammates -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-info panel-widget">
        <div class="panel-title">
          Teammates
        </div>
        <div class="panel-body">
          <ul class="basic-list image-list">
            <li><img src="/../static/index/img/profileimg.png" alt="img" class="img"><b>Jonathan Doe</b><span class="desc">Designer</span></li>
            <li><img src="/../static/index/img/profileimg2.png" alt="img" class="img"><b>Egemem Ka</b><span class="desc">Front-End Developer</span></li>
            <li><img src="/../static/index/img/profileimg3.png" alt="img" class="img"><b>Timmy Jefsin</b><span class="desc">Back-End Developer</span></li>
            <li><img src="/../static/index/img/profileimg4.png" alt="img" class="img"><b>James K. Throwing</b><span class="desc">Marketing</span></li>
            <li><img src="/../static/index/img/profileimg5.png" alt="img" class="img"><b>John Doe</b><span class="desc">iOS Developer</span></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Teammates -->


  </div>
  <!-- End Fifth Row -->




</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-12 text-left">
  Copyright &copy; 2016.Company name All rights reserved.
  </div>
</div>
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEPANEL -->
<div role="tabpanel" class="sidepanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">TODAY</a></li>
    <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">TASKS</a></li>
    <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">CHAT</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <!-- Start Today -->
    <div role="tabpanel" class="tab-pane active" id="today">

      <div class="sidepanel-m-title">
        Today
        <span class="left-icon"><a href="#"><i class="fa fa-refresh"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-file-o"></i></a></span>
      </div>

      <div class="gn-title">NEW</div>

      <ul class="list-w-title">
        <li>
          <a href="#">
            <span class="label label-danger">ORDER</span>
            <span class="date">9 hours ago</span>
            <h4>New Jacket 2.0</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-success">COMMENT</span>
            <span class="date">14 hours ago</span>
            <h4>Bill Jackson</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-info">MEETING</span>
            <span class="date">at 2:30 PM</span>
            <h4>Developer Team</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-warning">EVENT</span>
            <span class="date">3 days left</span>
            <h4>Birthday Party</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
      </ul>

    </div>
    <!-- End Today -->

    <!-- Start Tasks -->
    <div role="tabpanel" class="tab-pane" id="tasks">

      <div class="sidepanel-m-title">
        To-do List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">TODAY</div>

      <ul class="todo-list">
        <li class="checkbox checkbox-primary">
          <input id="checkboxside1" type="checkbox"><label for="checkboxside1">Add new products</label>
        </li>
        
        <li class="checkbox checkbox-primary">
          <input id="checkboxside2" type="checkbox"><label for="checkboxside2"><b>May 12, 6:30 pm</b> Meeting with Team</label>
        </li>
        
        <li class="checkbox checkbox-warning">
          <input id="checkboxside3" type="checkbox"><label for="checkboxside3">Design Facebook page</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside4" type="checkbox"><label for="checkboxside4">Send Invoice to customers</label>
        </li>
        
        <li class="checkbox checkbox-danger">
          <input id="checkboxside5" type="checkbox"><label for="checkboxside5">Meeting with developer team</label>
        </li>
      </ul>

      <div class="gn-title">TOMORROW</div>
      <ul class="todo-list">
        <li class="checkbox checkbox-warning">
          <input id="checkboxside6" type="checkbox"><label for="checkboxside6">Redesign our company blog</label>
        </li>
        
        <li class="checkbox checkbox-success">
          <input id="checkboxside7" type="checkbox"><label for="checkboxside7">Finish client work</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside8" type="checkbox"><label for="checkboxside8">Call Johnny from Developer Team</label>
        </li>

      </ul>
    </div>    
    <!-- End Tasks -->

    <!-- Start Chat -->
    <div role="tabpanel" class="tab-pane" id="chat">

      <div class="sidepanel-m-title">
        Friend List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">ONLINE MEMBERS (3)</div>
      <ul class="group">
        <li class="member"><a href="#"><img src="/../static/index/img/profileimg.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status online"></span></li>
        <li class="member"><a href="#"><img src="/../static/index/img/profileimg2.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status busy"></span></li>
        <li class="member"><a href="#"><img src="/../static/index/img/profileimg3.png" alt="img"><b>Fred Stonefield</b>New York</a><span class="status away"></span></li>
        <li class="member"><a href="#"><img src="/../static/index/img/profileimg4.png" alt="img"><b>Chris M. Johnson</b>California</a><span class="status online"></span></li>
      </ul>

      <div class="gn-title">OFFLINE MEMBERS (8)</div>
     <ul class="group">
        <li class="member"><a href="#"><img src="/../static/index/img/profileimg5.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status offline"></span></li>
        <li class="member"><a href="#"><img src="/../static/index/img/profileimg6.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status offline"></span></li>
      </ul>

      <form class="search">
        <input type="text" class="form-control" placeholder="Search a Friend...">
      </form>
    </div>
    <!-- End Chat -->

  </div>

</div>
<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="/../static/index/js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="/../static/index/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="/../static/index/js/plugins.js"></script>


<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="/../static/index/js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="/../static/index/js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/../static/index/js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script type="text/javascript" src="/../static/index/js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script type="text/javascript" src="/../static/index/js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script type="text/javascript" src="/../static/index/js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/../static/index/js/flot-chart/flot-chart-plugin.js"></script>


<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/../static/index/js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/../static/index/js/easypiechart/easypiechart-plugin.js"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/../static/index/js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/../static/index/js/sparkline/sparkline-plugin.js"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="/../static/index/js/rickshaw/d3.v3.js"></script>
<!-- main file -->
<script src="/../static/index/js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<script src="/../static/index/js/rickshaw/rickshaw-plugin.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="/../static/index/js/moment/moment.min.js"></script>


<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->
<script>

// set up our data series with 50 random data points

var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(20);

for (var i = 0; i < 110; i++) {
  random.addData(seriesData);
}

// instantiate our graph!

var graph = new Rickshaw.Graph( {
  element: document.getElementById("todaysales"),
  renderer: 'bar',
  series: [
    {
      color: "#33577B",
      data: seriesData[0],
      name: 'Photodune'
    }, {
      color: "#77BBFF",
      data: seriesData[1],
      name: 'Themeforest'
    }, {
      color: "#C1E0FF",
      data: seriesData[2],
      name: 'Codecanyon'
    }
  ]
} );

graph.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
  formatter: function(series, x, y) {
    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
    return content;
  }
} );

</script>

<!-- Today Activity -->
<script>
// set up our data series with 50 random data points

var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(20);

for (var i = 0; i < 50; i++) {
  random.addData(seriesData);
}

// instantiate our graph!

var graph = new Rickshaw.Graph( {
  element: document.getElementById("todayactivity"),
  renderer: 'area',
  series: [
    {
      color: "#9A80B9",
      data: seriesData[0],
      name: 'London'
    }, {
      color: "#CDC0DC",
      data: seriesData[1],
      name: 'Tokyo'
    }
  ]
} );

graph.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
  formatter: function(series, x, y) {
    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
    return content;
  }
} );
</script>



</body>
</html>