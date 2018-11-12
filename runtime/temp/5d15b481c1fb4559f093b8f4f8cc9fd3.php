<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:73:"/Users/Kwok/git/kwok/public/../application/index/view/index/fundgrid.html";i:1540996942;s:62:"/Users/Kwok/git/kwok/application/index/view/public/header.html";i:1540996834;s:67:"/Users/Kwok/git/kwok/application/index/view/public/public-body.html";i:1540996834;s:62:"/Users/Kwok/git/kwok/application/index/view/public/footer.html";i:1540996834;s:65:"/Users/Kwok/git/kwok/application/index/view/public/sidepanel.html";i:1540996834;s:65:"/Users/Kwok/git/kwok/application/index/view/public/public-js.html";i:1540996834;s:69:"/Users/Kwok/git/kwok/application/index/view/public/public-js-add.html";i:1540996834;}*/ ?>
<!DOCTYPE html>
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
    <h1 class="title">基金网格交易系统</h1>
      <ol class="breadcrumb">
        <li><a href="index.html">仪表盘</a></li>
        <li><a href="#">基金</a></li>
        <li class="active">基金网格交易系统</li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index.html" class="btn btn-light">Dashboard</a>
        <a href="#" class="btn btn-light" onclick="location.reload();"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

  <!-- Start Presentation -->
  <div class="row presentation">

    <div class="col-lg-8 col-md-6 titles">
      <span class="icon color10-bg"><i class="fa fa-line-chart"></i></span>
      <h1>基金网格交易系统</h1>
      <h4>记录每一笔基金网格交易记录，自动计算并提醒买入卖出<br>有效的解决基金网格计划中容易混乱和没有及时买入卖出</h4>
    </div>

    <div class="col-lg-4 col-md-6">
      <ul class="list-unstyled list">
        <li><i class="fa fa-check"></i>自动计算<li>
        <li><i class="fa fa-check"></i>及时提醒<li>
        <!-- <li><i class="fa fa-check"></i><a href="<?php echo url('/index/index/fundgrid'); ?>" target="_blank">基金网格交易系统</a><li> -->
        <br>
        <br>
        <li><i class="fa fa-rmb"></i><a href="#" data-toggle="modal" data-target="#fund_grid_buy"">网格买入</a><li>
        <li><i class="fa fa-rmb"></i><a href="#" data-toggle="modal" data-target="#fund_grid_sell">网格卖出</a><li>
        <li><i class="fa fa-rmb"></i><a href="#" data-toggle="modal" data-target="#fund_add">添加自选</a><li>
      </ul>
    </div>

  </div>
  <!-- End Presentation -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-padding">


  <!-- Start Row -->
  <div class="row">

    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          持仓交易中
        </div>
        <div class="panel-body table-responsive">

            <table id="example0" class="table display">
                <thead>
                    <tr>
                        <th>买入ID</th>
                        <th>基金名称</th>
                        <th>成交金额</th>
                        <th>交易数量</th>
                        <th>交易时间</th>
                        <th>成本单价</th>
                        <th>实时现价</th>
                        <th>补仓价格</th>
                        <th>卖出价格</th>
                        <th>网格幅度</th>
                        <th>涨跌幅度</th>
                        <th>盈亏金额</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>买入ID</th>
                        <th>基金名称</th>
                        <th>成交金额</th>
                        <th>交易数量</th>
                        <th>交易时间</th>
                        <th>成本单价</th>
                        <th>实时现价</th>
                        <th>补仓价格</th>
                        <th>卖出价格</th>
                        <th>网格幅度</th>
                        <th>涨跌幅度</th>
                        <th>盈亏金额</th>
                    </tr>
                </tfoot>
             
                <tbody>
                <?php if(is_array($data1) || $data1 instanceof \think\Collection || $data1 instanceof \think\Paginator): $k = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <tr>
                        <td><?php echo $vo['mrid']; ?></td>
                        <td><?php echo $vo['jjmc']; ?></td>
                        <td><?php echo $vo['cjje']; ?>元</td>
                        <td><?php echo $vo['jysl']; ?></td>
                        <td><?php echo $vo['jysj']; ?></td>
                        <td><?php echo $vo['cbdj']; ?>元</td>
                        <td><?php echo $vo['jjxj']; ?>元</td>
                        <td><?php echo $vo['bcdj']; ?>元</td>
                        <td><?php echo $vo['mcdj']; ?>元</td>
                        <td><?php echo $vo['wgfd']; ?>%</td>
                        <td><?php echo $vo['zdfd']; ?>%</td>
                        <td><?php echo $vo['ykje']; ?></td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>


        </div>

      </div>
    </div>
    <!-- End Panel -->
    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          网格已完成
        </div>
        <div class="panel-body table-responsive">

            <table id="example1" class="table display">
                <thead>
                    <tr>
                        <th>卖出ID</th>
                        <th>基金名称</th>
                        <th>成本单价</th>
                        <th>卖出单价</th>
                        <th>成本金额</th>
                        <th>卖出金额</th>
                        <th>完成时间</th>
                        <th>网格幅度</th>
                        <th>盈亏幅度</th>
                        <th>盈亏金额</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>卖出ID</th>
                        <th>基金名称</th>
                        <th>成本单价</th>
                        <th>卖出单价</th>
                        <th>成本金额</th>
                        <th>卖出金额</th>
                        <th>完成时间</th>
                        <th>网格幅度</th>
                        <th>盈亏幅度</th>
                        <th>盈亏金额</th>
                    </tr>
                </tfoot>
             
                <tbody>
                <?php if(is_array($data2) || $data2 instanceof \think\Collection || $data2 instanceof \think\Paginator): $k = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <tr>
                        <td><?php echo $vo['mcid']; ?></td>
                        <td><?php echo $vo['jjmc']; ?></td>
                        <td><?php echo $vo['cbdj']; ?>元</td>
                        <td><?php echo $vo['mcdj']; ?>元</td>
                        <td><?php echo $vo['cbje']; ?>元</td>
                        <td><?php echo $vo['mcje']; ?>元</td>
                        <td><?php echo $vo['wcsh']; ?></td>
                        <td><?php echo $vo['wgfd']; ?>%</td>
                        <td><?php echo $vo['ykfd']; ?>%</td>
                        <td><?php echo $vo['ykje']; ?>元</td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>


        </div>

      </div>
    </div>
    <!-- End Panel -->


<!-- 买入卖出弹窗 -->
    <!-- 网格买入 -->
    <!-- Modal -->
    <div class="modal fade" id="fund_grid_buy" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">网格计划-买入</h4>
          </div>
          <div class="modal-body">
                <div class="panel-body">
                  <form class="fieldset-form">
                    <fieldset>
                    <div class="form-group">
                      <label class="col-sm-4 control-label form-label">选择基金</label>
                      <div class="col-sm-8">
                        <select class="selectpicker" name="fund_id">
                        <?php if(is_array($fund_info) || $fund_info instanceof \think\Collection || $fund_info instanceof \think\Paginator): $i = 0; $__LIST__ = $fund_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value = "<?php echo $key; ?>"><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>                  
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="example10" class="form-label">成本单价</label>
                        <input type="text" class="form-control" name="fund_buy_dj">
                      </div>
                      <div class="form-group">
                        <label for="example11" class="form-label">交易数量</label>
                        <input type="text" class="form-control" name="fund_buy_sl">
                      </div><!-- 
                      <div class="form-group">
                        <label for="example12" class="form-label">成本金额</label>
                        <input type="text" class="form-control" name="fund_buy_je">
                      </div> -->
                      <div class="form-group">
                        <label for="example13" class="form-label">交易时间</label>
                       <div class="input-prepend input-group">
                         <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input type="text" id="date-picker" name="fund_buy_time" class="form-control" value="<?php echo date("m/d/Y"); ?>"/> 
                       </div>
                      </div>
                      <div class="form-group">
                        <label for="example14" class="form-label">网格幅度</label>
                        <input type="text" class="form-control" name="fund_buy_fd" value="3">
                      </div>
                      <div class="form-group">
                        <label for="example15" class="form-label">手续费</label>
                        <input type="text" class="form-control" name="fund_buy_sxf">
                      </div>
                        <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="fund.buy();">提交</button>
                    </fieldset>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Moda Code -->

    <!-- 网格卖出 -->
    <!-- Modal -->
    <div class="modal fade" id="fund_grid_sell" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">网格计划-卖出</h4>
          </div>
          <div class="modal-body">
                <div class="panel-body">
                  <form class="fieldset-form">
                    <fieldset>
                    <div class="form-group">
                      <label class="col-sm-4 control-label form-label">选择买入时交易</label>
                      <div class="col-sm-8">
                        <select class="selectpicker" name="buy_id">
                        <?php if(is_array($fund_info_sell) || $fund_info_sell instanceof \think\Collection || $fund_info_sell instanceof \think\Paginator): $i = 0; $__LIST__ = $fund_info_sell;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $key; ?>"><?php echo $key; ?>：<?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>                  
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="example10" class="form-label">卖出单价</label>
                        <input type="text" class="form-control" name="fund_sell_dj">
                      </div>
                      <div class="form-group">
                        <label for="example11" class="form-label">卖出数量</label>
                        <input type="text" class="form-control" name="fund_sell_sl">
                      </div><!-- 
                      <div class="form-group">
                        <label for="example12" class="form-label">卖出金额</label>
                        <input type="text" class="form-control" name="fund_sell_je">
                      </div> -->
                      <div class="form-group">
                        <label for="example13" class="form-label">卖出时间</label>
                       <div class="input-prepend input-group">
                         <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input type="text" id="date-picker" name="fund_sell_time" class="form-control" value="<?php echo date("m/d/Y"); ?>"/> 
                       </div>
                      </div><!-- 
                      <div class="form-group">
                        <label for="example14" class="form-label">盈亏幅度</label>
                        <input type="text" class="form-control" name="fund_sell_fd">
                      </div> -->
                      <div class="form-group">
                        <label for="example15" class="form-label">手续费</label>
                        <input type="text" class="form-control" name="fund_sell_sxf">
                      </div>
                        <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="fund.sell();">提交</button>
                    </fieldset>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Moda Code -->

    <!-- 添加自选基金 -->
    <!-- Modal -->
    <div class="modal fade" id="fund_add" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">添加自选基金</h4>
          </div>
          <div class="modal-body">
                <div class="panel-body">
                  <form class="fieldset-form">
                    <fieldset>
                      <div class="form-group">
                        <label for="example10" class="form-label">基金代码</label>
                        <input type="text" class="form-control" name="fund_add_code">
                      </div>
                      <div class="form-group">
                        <label for="example11" class="form-label">基金名称</label>
                        <input type="text" class="form-control" name="fund_add_name">
                      </div>
                      <div class="form-group">
                        <label for="example12" class="form-label">股市地区</label>
                        <input type="text" class="form-control" name="fund_add_gsdq"  placeholder="上海sh/深圳sz，留空默认sh">
                      </div>
                      <div class="form-group">
                        <label for="example13" class="form-label">查询API</label>
                        <input type="text" class="form-control" name="fund_add_api" value="xlcj">
                      </div>
                      <button type="button" class="btn btn-default" onclick="fund.add();" data-dismiss="modal">提交</button>
                    </fieldset>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Moda Code -->

  </div>
  <!-- End Row -->






</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2018 <a href="http://blog.ikwok.cn/" target="_blank">Kwok</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Design and Developed by <a href="http://blog.ikwok.cn/" target="_blank">Kwok</a>
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
    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">今天</a></li>
    <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">任务</a></li>
    <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">聊天</a></li>
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
            <span class="label label-danger">订购</span>
            <span class="date">9小时前</span>
            <h4>新夹克2.0</h4>
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
dialog js
================================================ -->
<script type="text/javascript" src="/../static/js/dialog.js"></script>

<!-- ================================================
layer js
================================================ -->
<script type="text/javascript" src="/../static/js/layer/layer.js"></script>

<script>
</script>

<!-- 基金页面所需JS -->
<script src="/../static/js/fund.js"></script>


<!-- bootstrap select 选择框 -->
<script type="text/javascript" src="/../static/index/js/bootstrap-select/bootstrap-select.js"></script>


<!-- ================================================
Data Tables 页面主JS
================================================ -->
<script src="/../static/index/js/datatables/datatables.min.js"></script>


<!-- 时间选择框所需 -->
<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="/../static/index/js/moment/moment.min.js"></script>
<!-- 时间选择框所需 -->
<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="/../static/index/js/date-range-picker/daterangepicker.js"></script>



<!-- 表格搜索以及其他功能 -->
<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
$(document).ready(function() {
    $('#example1').DataTable();
} );
</script>

<!-- Basic Date Range Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-range-picker').daterangepicker(null, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<!-- Basic Single Date Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-picker').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<!-- Date Range and Time Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-range-and-time-picker').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    format: 'MM/DD/YYYY h:mm A'
  }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>
<!-- 买入卖出表格排序JS -->
<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
} );
dialog.
</script>


</body>
</html>