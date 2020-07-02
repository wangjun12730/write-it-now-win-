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
    .box-info{
        margin-top: -20px;
        width: 100%;
        height: 100%;
        min-width: 1200px;
        background-color: #FDE6E0;
    }
    .story-info-show{
        min-width: 1200px;
    }
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
    .book-index{
        margin-top: 10px;
        margin-right: -30px;
        margin-left: 31px;
        top: 70px;
        left: 40px;
        right: -30px;
        position: sticky;
    }
    .book-index a{
        text-align: center;
        background-color: #ebccd1;
        font-size: 20px;
        width: 60px;
        height: 60px;
        display: block;
        margin-bottom: 2px;
        padding-top: 12px;
    }
    .book-index a:hover{
        text-decoration: none;
    }

    .book-index a span{
        display: block;
    }
    .book-index-name{
        margin-top: 5px;
        font-size: 14px;
    }
    .marker span{
        font-size: 25px;
        margin-right: 20px;
        display: inline-block;
        float: right;
        color: #8c8c8c;
    }
    .read_box{
        margin-top: 10px;
        width: 100%;
        background-color: #FFF2E2;
        margin-bottom: 50px;
    }
    .title{
        margin-top: 50px;
        width: 100%;
        line-height: 40px;
        font-size: 28px;
        color: #333;
        letter-spacing: 1.08px;
        display: inline-block;
        font-weight: 700;
        text-align: center;
    }
    .book-info{

        color: #999;
    }
    .book-info p{
        margin-top: 20px;
        font-size: 12px;
        text-align: center;
        width: 100%;
    }
    .book-info p a{
        color: #2a2a2a;
    }
    .book-info p a:hover{
        text-decoration: none;
        color: red;
    }
    .reader_line{
        margin-top: 20px;
        margin-bottom: 40px;
        width: 100%;
        border-bottom: 1px solid #ccc;
    }
    .content{
        font-family: 宋体;
        -webkit-user-select:none;
        -moz-user-select:none;
        -o-user-select:none;
        user-select:none;
    }
    .content p{
        font-size: 14px;
        letter-spacing: 1px;
        line-height: 2em;
        text-indent: 2em;
    }
    .section-buttons{
        margin-top: 50px;
        display: table;
        height: 50px;

    }
    .section-buttons a{
        background-color: rgba(0,0,0,.03);
        border-radius: 2px;
        height: 50px;
        display: table-cell;
        border-collapse: separate;
        line-height: 50px;
        font-size: 14px;
        color: #333;
        letter-spacing: 1px;
        width: 260px;
        text-align: center;
    }
    .section-buttons a:hover{
        text-decoration: none;
        color: red;
        background-color: #c8e5bc;
    }
    .comments{
        margin-top: 70px;
        padding-bottom: 30px;
    }
    .comments h4{
        display: inline-block;
    }
    .comments ul{
        list-style: none;
    }
    .comments ul li{
        margin-top: 10px;
    }
    .comments img{
        width: 50px;
        height: 41.2px;
    }
    .reader-name{
        color: #999;
    }
    .reader-comment{
        margin-top: 20px;
        font-size: 14px;
    }
    .origin{
        background-color: #f7f8fa;
        color: #999;
        height: 50px;
        padding-top: 15px;
    }
    .other{
        color: #999;
        font-size: 15px;
        margin-top: 20px;
    }
    .time{
        float: left;
    }
    .fr{
        float: right;
    }
    .fr .zan{
        margin-right: 15px;
    }

</style>
<div class="box-info">
    <div class="story-info-show container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="reader_crumb">
            <a href="/win/write-it-now-win-/Home/Index/index">首页</a>
             &nbsp;>&nbsp;
            <a><?php echo ($story["tag"]); ?>频道</a>
            &nbsp;>&nbsp;
            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($story["id"]); ?>"><?php echo ($story["name"]); ?></a>
            <span> &nbsp;>&nbsp; <?php echo ($res["section"]); ?>&nbsp; <?php echo ($res["title"]); ?></span>
        </div>
            </div>
        </div>
        <div class="read_content">
            <div class="row">
                <div class="col-sm-1 book-index">
                    <a href="/win/write-it-now-win-/Home/StoryShow/sectionList/s_id/<?php echo ($story["id"]); ?>"><span class="glyphicon glyphicon-list" ></span><span class="book-index-name">目录</span></a>
                    <a href="/win/write-it-now-win-/Home/User/collection" target="_blank"><span class="glyphicon glyphicon-book"></span><sapn class="book-index-name">书架</sapn></a>
                    <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($story["id"]); ?>"><span class="glyphicon glyphicon-tags"></span><span class="book-index-name">书页</span></a>
                    <a><span class="glyphicon glyphicon-cog"></span><sapn class="book-index-name">设置</sapn></a>
                </div>
                <div class="col-sm-10">
                    <div class="read_box">
                        <div class="marker">
                            <span class="glyphicon glyphicon-bookmark"></span>
                        </div>
                        <div class="title">
                            <?php echo ($res["section"]); ?> &nbsp;<?php echo ($res["title"]); ?>
                        </div>
                        <div class="book-info">
                            <p>作者：<a><?php echo ($res["user_name"]); ?></a> &nbsp;|&nbsp; 字数：<?php echo ($res["font_count"]); ?> &nbsp;|&nbsp; 更新时间：<?php echo ($res["update_time"]); ?></p>
                        </div>
                        <div class="content-info">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="reader_line">
                                    </div>
                                    <div class="content">
                                        <?php echo ($res["content"]); ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="section-buttons">
                                <a href="/win/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($story["id"]); ?>/section/<?php echo ($pre); ?>"><?php echo ($pre_section); ?></a>&nbsp;&nbsp;
                                <a href="/win/write-it-now-win-/Home/StoryShow/sectionList/s_id/<?php echo ($story["id"]); ?>">目录</a>&nbsp;&nbsp;
                                <a href="/win/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($story["id"]); ?>/section/<?php echo ($next); ?>"><?php echo ($next_section); ?></a>&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>

                      <br />
                        <br />
                        <br />
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>