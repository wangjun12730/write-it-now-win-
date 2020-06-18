<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WIN后台</title>
    <link href="/win/write-it-now-win-/Public/css/admin.css" rel="stylesheet" />
    <script src="/win/write-it-now-win-/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="top">
    <h1 class="left">WIN 后台管理系统</h1>
    <ul class="right">
        <li>欢迎您：<?php echo (session('admin_name')); ?></li>
        <li>|</li><li><a href="/win/write-it-now-win-/" target="_blank">前台首页</a></li>
        <li>|</li><li><a href="/win/write-it-now-win-/Admin/Login/logout">退出登录</a></li>
    </ul>
</div>
<div id="main">
    <div id="menu" class="left">
        <ul><li><a href="/win/write-it-now-win-/Admin/Index/index" id="Index_index">后台首页</a></li>
            <li><a href="/win/write-it-now-win-/Admin/Check/index" id="Check_index">审核</a> </li>
            <li><a href="/win/write-it-now-win-/Admin/Member/index" id="Member_index">会员管理</a></li>
        </ul>
    </div>
    <div id="content">
        <div class="item"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>
</head>
<body>
<div class="title">后台首页</div>
<div class="data-list clear">欢迎进入WIN后台！请从左侧选择一个操作。</div>
</body>
</html></div>
    </div>
</div>
<script>
    $("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>