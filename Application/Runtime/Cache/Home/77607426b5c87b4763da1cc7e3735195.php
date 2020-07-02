<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>write it now!</title>
    <link href="/write-it-now-win-/Public/css/layout.css" rel="stylesheet" />
    <link rel="stylesheet" href="/write-it-now-win-/Public/css/font-awesome.min.css">
    <link href="/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/write-it-now-win-/Public/js/jquery-3.4.1.min.js"></script>
    <script src="/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</head>
<body style="padding-top: 70px">
<nav class="navbar navbar-default navbar-fixed-top" style="min-width: 1200px;font-size: 16px">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="display: inline-block;margin-top: -15px"><img src="/write-it-now-win-/Public/image/background/logo1.png" style="height: 50px;width: 100px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/write-it-now-win-/Home/Index/index">首页</a></li>
                <li><a href="/write-it-now-win-/Home/Discuss/showAll">讨论区</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if($_SESSION['user_name']== null): ?><li><a href="/write-it-now-win-/Home/User/login" target="_blank">登录</a></li>
                    <li><a href="/write-it-now-win-/Home/User/register" style="margin-right: 50px">注册</a></li>
                 <?php else: ?>
                    <li><button type="button" class="btn btn-default navbar-btn" onclick="window.open('/write-it-now-win-/Home/User/Index');"><span class="glyphicon glyphicon-edit" style="color: #ebccd1;"></span>&nbsp;&nbsp;创作中心</button></li>
                    <li><a href="/write-it-now-win-/Home/User/collection" target="_blank"><span title="收藏" class="glyphicon glyphicon-star" style="color: #ebccd1;font-size: 18px;margin-right: -10px"></span></a></li>
                    <li><a href="/write-it-now-win-/Home/Message/messageList" target="_blank"><span title="消息 <?php echo (session('messages')); ?>" class="glyphicon glyphicon-bell" style="color: #ebccd1;font-size: 18px;margin-right: 10px"></span></a></li>
                    <li class="dropdown" style="margin-right: 50px">
                        <a href="#" class="dropdown-toggle" target="_blank" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: inline-block;padding: 0;margin-top: 5px"><img src="/write-it-now-win-/Public/<?php echo (session('user_picture')); ?>" class="img-circle" style="height: 40px;width: 40px" /></a>
                        <ul class="dropdown-menu" style="color: #333">
                            <li><a href="/write-it-now-win-/Home/User/follow"><span class="glyphicon glyphicon-heart" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的关注</a></li>
                            <li><a href="/write-it-now-win-/Home/User/collection"><span class="glyphicon glyphicon-star" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的收藏</a></li>
                            <li><a href="/write-it-now-win-/Home/User/index"><span class="glyphicon glyphicon-user" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 个人中心</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/write-it-now-win-/Home/User/index"><span class="glyphicon glyphicon-book" style="color: #ebccd1"></span>&nbsp; &nbsp;&nbsp;我的小说</a></li>
                            <li><a href="/write-it-now-win-/Home/User/moment"><span class="glyphicon glyphicon-pencil" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的说说</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-question-sign" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 帮助</a></li>
                            <li><a href="/write-it-now-win-/Home/User/logout"><span class="glyphicon glyphicon-log-out" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 退出</a></li>
                        </ul>
                    </li><?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="layout-content" style="min-height: 500px">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Simpla Admin </title>
	<!--                       CSS                       -->
	<!-- Reset Stylesheet -->
	<link rel="stylesheet" href="/write-it-now-win-/Public/css/reset.css" type="text/css" media="screen" />
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="/write-it-now-win-/Public/css/style.css" type="text/css" media="screen" />
	<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
	<link rel="stylesheet" href="/write-it-now-win-/Public/css/invalid.css" type="text/css" media="screen" />
	<!--                       Javascripts                       -->
	<!-- jQuery -->
	<script type="text/javascript" src="/write-it-now-win-/Public/scripts/jquery-1.3.2.min.js"></script>
	<!-- jQuery Configuration -->
	<script type="text/javascript" src="/write-it-now-win-/Public/scripts/simpla.jquery.configuration.js"></script>
	<!-- Facebox jQuery Plugin -->
	<script type="text/javascript" src="/write-it-now-win-/Public/scripts/facebox.js"></script>
	<!-- jQuery WYSIWYG Plugin -->
	<script type="text/javascript" src="/write-it-now-win-/Public/scripts/jquery.wysiwyg.js"></script>
	<!-- jQuery Datepicker Plugin -->
	<script type="text/javascript" src="/write-it-now-win-/Public/scripts/jquery.datePicker.js"></script>
	<script type="text/javascript" src="/write-it-now-win-/Public/scripts/jquery.date.js"></script>
</head>
<body>
<div id="body-wrapper">
	<!-- Wrapper for the radial gradient background -->

	<div id="main-content">

		<!-- Page Head -->
		<h2>Welcome 来到讨论区</h2>


		<div class="content-box">

			<form action="<?php echo U('Home/Discuss/add');?>" method="post">
				<table>
					<tr><td>名称</td><td><input type="text" name="poster"/></td></tr>
					<tr><td>邮箱</td><td><input type="text" name="mail"/></td></tr>
					<tr><td>内容</td><td><input type="text" name="comment"/></td></tr>
					<tr><td cols="5"></td><td><input type="submit" name="add" value="发表"/></td></tr>
				</table>
			</form>
		</div>



		<div class="clear"></div>
		<!-- End .clear -->
		<div class="content-box">
			<!-- Start Content Box -->
			<div class="content-box-header">
				<h3>已发表留言</h3>
				<ul class="content-box-tabs">
					<li><a href="#tab1" class="default-tab">Table</a></li>
					<!-- href must be unique and match the id of target div -->

				</ul>
				<div class="clear"></div>
			</div>
			<!-- End .content-box-header -->
			<div class="content-box-content">
				<div class="tab-content default-tab" id="tab1">
					<table>
						<thead>
						<tr>

							<th>名称</th>
							<th>邮箱</th>
							<th>内容</th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<td colspan="6">
								<div class="pagination"><?php echo ($pageControl); ?></div>
								<!--<div class="pagination"> <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a> <a href="#" class="number" title="1">1</a> <a href="#" class="number" title="2">2</a> <a href="#" class="number current" title="3">3</a> <a href="#" class="number" title="4">4</a> <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a> </div>-->
								<!--&lt;!&ndash; End .pagination &ndash;&gt;-->
								<div class="clear"></div>
							</td>
						</tr>
						</tfoot>
						<tbody>
						<?php if(is_array($stus)): $i = 0; $__LIST__ = $stus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$stu): $mod = ($i % 2 );++$i;?><tr>

								<td><?php echo ($stu['poster']); ?></td>
								<td><a href="#" title="title"><?php echo ($stu['mail']); ?></a></td>
								<td><?php echo ($stu['comment']); ?></td>


							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>



				</div>
				<!-- End #tab1 -->

			</div>
			<!-- End .content-box-content -->
		</div>

		<div class="clear"></div>


		<!-- End #main-content -->
	</div>
</body>
<!-- Download From www.exet.tk-->
</html>


</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>