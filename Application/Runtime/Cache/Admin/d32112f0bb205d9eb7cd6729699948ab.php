<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WIN后台</title>
    <link href="/write-it-now-win-/Public/css/admin.css" rel="stylesheet" />
    <script src="/write-it-now-win-/Public/js/jquery.min.js"></script>
    <link href="/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/write-it-now-win-/Public/js/jquery-3.4.1.min.js"></script>
    <script src="/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div id="top">
    <h1 class="left">WIN 后台管理系统</h1>
    <ul class="right">
        <li>欢迎您：<?php echo (session('admin_name')); ?></li>
        <li>|</li><li><a href="/write-it-now-win-/" target="_blank">前台首页</a></li>
        <li>|</li><li><a href="/write-it-now-win-/Admin/Login/logout">退出登录</a></li>
    </ul>
</div>
<div id="main">
    <div id="menu" class="left">
        <ul><li><a href="/write-it-now-win-/Admin/Index/index" id="Index_index">后台首页</a></li>
            <li><a href="/write-it-now-win-/Admin/Check/checkList" id="Check_index">审核</a> </li>
            <li><a href="/write-it-now-win-/Admin/Member/index" id="Member_index">用户管理</a></li>
            <li><a href="/write-it-now-win-/Admin/Story/storylist" id="Story_index">栏目管理</a></li>
        </ul>
    </div>
    <div id="content">
        <div class="item"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>审核用户上传内容</title>
</head>
<body>

</body>
</html></div>
    </div>
</div>
<script>
    $("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>