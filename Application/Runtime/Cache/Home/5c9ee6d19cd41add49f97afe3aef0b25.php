<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WIN网站——登录</title>
    <link href="/win/write-it-now-win-/Public/css/member.css" rel="stylesheet" />
    <script src="/win/write-it-now-win-/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="box">
    <h1>WIN网站——欢迎登录</h1>
    <div id="main">
        <div class="login-ad left">广告位</div>
        <form method="post">
            <table class="login right">
                <tr><th>用户名：</th><td><input type="text" name="user" /></td></tr>
                <tr><th>密码：</th><td><input type="password" name="pwd" /></td></tr>
                <tr><th>验证码：</th><td><input type="text" name="captcha" /></td></tr>
                <tr><td>&nbsp;</td><td><img src="/win/write-it-now-win-/Home/User/captcha" onclick="this.src='/win/write-it-now-win-/Home/User/captcha/'
                                +Math.random()" /></td></tr>
                <tr><td>&nbsp;</td><td><input class="button" type="submit" value="登录" /></td></tr>
                <tr><td colspan="2" class="center"><a href="/win/write-it-now-win-/Home/User/register">立即注册</a>
                    <a href="/win/write-it-now-win-/">返回首页</a> </td></tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>