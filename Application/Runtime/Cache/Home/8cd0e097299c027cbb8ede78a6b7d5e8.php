<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>write it now!</title>
    <link href="/win/write-it-now-win-/Public/css/layout.css" rel="stylesheet" />
    <link rel="stylesheet" href="/win/write-it-now-win-/Public/css/font-awesome.min.css">
    <link href="/win/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/win/write-it-now-win-/Public/js/jquery-3.4.1.min.js"></script>
    <script src="/win/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

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
            <a class="navbar-brand" href="#" style="display: inline-block;margin-top: -15px"><img src="/win/write-it-now-win-/Public/image/background/logo1.png" style="height: 50px;width: 100px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/win/write-it-now-win-/Home/Index/index">首页</a></li>
                <li><a href="#">讨论区</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if($_SESSION['user_name']== null): ?><li><a href="/win/write-it-now-win-/Home/User/login" target="_blank">登录</a></li>
                    <li><a href="/win/write-it-now-win-/Home/User/register" style="margin-right: 50px">注册</a></li>
                 <?php else: ?>
                    <li><button type="button" class="btn btn-default navbar-btn" onclick="window.open('/win/write-it-now-win-/Home/User/Index');"><span class="glyphicon glyphicon-edit" style="color: #ebccd1;"></span>&nbsp;&nbsp;创作中心</button></li>
                    <li><a href="/win/write-it-now-win-/Home/User/collection" target="_blank"><span title="收藏" class="glyphicon glyphicon-star" style="color: #ebccd1;font-size: 18px;margin-right: -10px"></span></a></li>
                    <li><a href="/win/write-it-now-win-/Home/Message/messageList" target="_blank"><span title="消息 <?php echo (session('messages')); ?>" class="glyphicon glyphicon-bell" style="color: #ebccd1;font-size: 18px;margin-right: 10px"></span></a></li>
                    <li class="dropdown" style="margin-right: 50px">
                        <a href="#" class="dropdown-toggle" target="_blank" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: inline-block;padding: 0;margin-top: 5px"><img src="/win/write-it-now-win-/Public/<?php echo (session('user_picture')); ?>" class="img-circle" style="height: 40px;width: 40px" /></a>
                        <ul class="dropdown-menu" style="color: #333">
                            <li><a href="/win/write-it-now-win-/Home/User/follow"><span class="glyphicon glyphicon-heart" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的关注</a></li>
                            <li><a href="/win/write-it-now-win-/Home/User/collection"><span class="glyphicon glyphicon-star" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的收藏</a></li>
                            <li><a href="/win/write-it-now-win-/Home/User/index"><span class="glyphicon glyphicon-user" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 个人中心</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/win/write-it-now-win-/Home/User/index"><span class="glyphicon glyphicon-book" style="color: #ebccd1"></span>&nbsp; &nbsp;&nbsp;我的小说</a></li>
                            <li><a href="/win/write-it-now-win-/Home/User/moment"><span class="glyphicon glyphicon-pencil" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的说说</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-question-sign" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 帮助</a></li>
                            <li><a href="/win/write-it-now-win-/Home/User/logout"><span class="glyphicon glyphicon-log-out" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 退出</a></li>
                        </ul>
                    </li><?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="layout-content" style="min-height: 500px">
<style>
    .reader_crumb{
        margin-top: 30px;
        color: #666;
    }
    .reader_crumb a{
        color: #666;
    }
    .reader_crumb a:hover{
        color: #2aabd2;
    }
    .book-info{
        text-align: center;
    }
    .book-info p{
        color: #999;
        font-size: 12px;

    }
    .book-info a:hover{
        text-decoration: none;
    }
    .section-con{
        margin-top: 30px;
        background: #f5f5f5;
        border-radius: 2px;
        margin-bottom: 25px;
        height: 40px;
        font-size: 12px;
        padding-top: 12px;
    }
    .con1{
        float: right;
        margin-right: 30px;
    }
    .section-con a{
        color: black;
    }
    .section-con a:hover{
        text-decoration: none;
        color: #9B410E;
    }
    .v-line{
        border-left: 4px solid #fc7403;
    }
    .section-content .section a{
        display: inline-block;
        width: 100%;
        height: 40px;
        font-size: 14px;
        text-align: center;
        border-radius: 2px;
        letter-spacing: 1px;
        color: #333;
        padding-top: 10px;
    }
    .section-content .section a:hover{
        text-decoration: none;
        color: red;
        background-color: #c8e5bc;
    }
</style>
<div class="sectionList container">
    <div class="reader_crumb">
        <a href="/win/write-it-now-win-/Home/Index/index">首页</a>
        &nbsp;>&nbsp;
        <a><?php echo ($story["tag"]); ?>频道</a>
        &nbsp;>&nbsp;
        <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($story["id"]); ?>"><?php echo ($story["name"]); ?></a>
        &nbsp;>&nbsp;
        <span>目录</span>
    </div>
    <div class="book-info">
        <h3><?php echo ($story["name"]); ?></h3>
        <p>
            <span>作者： <a><?php echo ($story["user_name"]); ?></a></span>&nbsp;&nbsp;
            <span>最新章节：<a href="/win/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($story["id"]); ?>/section/<?php echo ($new["id"]); ?>"><?php echo ($new["section"]); ?> &nbsp;<?php echo ($new["title"]); ?></a></span>
            &nbsp;&nbsp;<span>更新时间：<?php echo ($new["create_time"]); ?></span>
        </p>

    </div>
    <div class="section-con">
        <span class="con1"><a href="/win/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($story["id"]); ?>">[全文阅读]</a></span>
    </div>

    <div class="section-content">
        <h4><span class="v-line"></span> &nbsp;共<?php echo ($count); ?>章 · <?php echo ($story["font_count"]); ?>字</h4>
        <div class="section" >
            <?php if(is_array($section)): foreach($section as $key=>$v): ?><div class="col-sm-4 col-xs-6 text-center " >
                    <a href="/win/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($story["id"]); ?>/section/<?php echo ($v["id"]); ?>"><?php echo ($v["section"]); ?> <?php echo ($v["title"]); ?></a>
                </div><?php endforeach; endif; ?>
        </div>
    </div>
</div>
</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>