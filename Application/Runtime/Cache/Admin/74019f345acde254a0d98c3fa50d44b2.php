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
            <li><a href="/write-it-now-win-/Admin/Check/checkList" id="Check_index">审核 &nbsp;<span style="color: #2aabd2"><?php echo (session('checking')); ?></span></a> </li>
            <li><a href="/write-it-now-win-/Admin/User/showAll" id="Member_index">用户管理</a></li>
            <li><a href="/write-it-now-win-/Admin/Story/storyList" id="Story_index">栏目管理</a></li>
            <li><a href="/write-it-now-win-/Admin/Index/alterpwd" id="alter_pwd">修改密码</a></li>
        </ul>
    </div>
    <div id="content">
        <div class="item"><div class="title1" style="color:#09C;font-weight:bold;">栏目管理</div>
<div class="col-sm-5">
    <form method="post" id="form_pwd" action="/write-it-now-win-/Admin/Index/alterPwdOk">
        <div class="form-group">
            <label for="opwd">旧密码</label>
            <input type="password" class="form-control" id="opwd" name="opwd" placeholder="请输入旧密码">
        </div>
        <div class="form-group">
            <label for="pwd">新密码</label>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="请输入新密码">
        </div>
        <div class="form-group">
            <label for="apwd">再次输入密码</label>
            <input type="password" class="form-control" id="apwd" name="apwd" placeholder="请再次输入新密码">
        </div>
        <button type="reset" class="btn btn-default">重置</button>
        <button type="submit"  class="btn btn-primary">提交</button>
    </form>
</div>


<script>
    $("#form_pwd").submit(function(){ //修改密码时表单提交时判断两次输入的面是否一致
        if($("#pwd").val() === ''  ){
            alert('新密码不能为空!');
            return false;
        };
        if($("#pwd").val() !== $("#apwd").val()){
            alert('输入的新密码和确认密码不一致！');
            return false;
        }
    });
</script></div>
    </div>
</div>
<script>
    $("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>


</body>
</html>