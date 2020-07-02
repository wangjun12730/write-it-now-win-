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

<div class="story">
    <div  style="margin-bottom: 30px;margin-top: 20px" >
        <a class="btn btn-primary" href="/write-it-now-win-/Admin/Story/storyList">栏目列表</a>
        <a class="btn btn-primary" href="/write-it-now-win-/Admin/Story/searchStory">搜索栏目</a>
    </div>

    <div >
        <a class="btn btn-warning">栏目信息</a>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-sm-2 col-xs-12" style="margin-left: -20px;">
                    <img src="/write-it-now-win-/Public/<?php echo ($story["picture"]); ?>" style="width: 200px;height: 200px"/>
                </div>
                <div class="col-sm-8 col-xs-12" style="margin-left: 20px">
                    <h4 style="display: inline"><?php echo ($story["name"]); ?></h4><span style="border: 1px solid red;margin-left: 5px;color: #8B6914"><?php echo ($story["tag"]); ?></span>
                    <span style="border: 1px solid red;margin-left: 5px;color: #8B6914">
                        <?php if($story["is_doing"] == 0): ?>连载中
                            <?php else: ?>
                                已完结<?php endif; ?>
                    </span>
                    <br />
                    <span style="color:#858585;">作者：<?php echo ($story["user_name"]); ?></span>
                    <p  style="color:#858585;">简介：<?php echo ($story["info"]); ?></p>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div style="margin-top: 20px">
        <button class="btn btn-danger" ><?php echo ($result["section"]); ?>  <?php echo ($result["title"]); ?></button>
    </div>
    <div class="container">
        <div class="content col-sm-12" style="margin-top: 30px">
            <p>
                <?php echo ($result["content"]); ?>
            </p>
            <div class="text-center" style="margin-top: 50px;margin-bottom: 50px">
                <button class="btn btn-danger" style="margin-right: 30px" onclick="location='/write-it-now-win-/Admin/Story/storySectionDetail/section_id/<?php echo ($pre); ?>'"><?php echo ($pre_section); ?></button>
                <button class="btn btn-danger" style="margin-right: 30px" onclick="location='/write-it-now-win-/Admin/Story/storyDetail/s_id/<?php echo ($story["id"]); ?>'">目录</button>
                <button class="btn btn-danger" style="margin-right: 30px" onclick="location='/write-it-now-win-/Admin/Story/storySectionDetail/section_id/<?php echo ($next); ?>'"><?php echo ($next_section); ?></button>
            </div>
        </div>
    </div>
</div></div>
    </div>
</div>
<script>
    $("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>


</body>
</html>