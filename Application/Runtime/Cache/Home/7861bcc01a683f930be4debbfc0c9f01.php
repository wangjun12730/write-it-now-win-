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
<style>
    .fans{
        min-width: 1200px;
        margin-bottom: 30px;
    }
    .menu{
        color: #666;
        font-size: 16px;
        padding-bottom: 20px;
    }
    .menu a{
        color: #666;
    }
    .fan-info{
        margin-top: 30px;
    }
    .menu-tab{
        border: 1px solid #e0e0e0;
        height: 40px;
        line-height: 36px;
    }
    .menu-tab a{
        text-align: center;
        display: inline-block;
        height: 100%;
        width: 150px;
        color: #666;
    }
    .menu-tab .menu-tab-fan{
        text-align: center;
        display: inline-block;
        height: 100%;
        width: 150px;
        background: #9B410E;
        color: #fff;
    }
    .menu-tab a:hover{
        text-decoration: none;
        color: #9B410E;
    }
    .fan-info{
        border: 1px solid #e0e0e0;
        padding: 30px 30px;
        margin-top: 0;
    }
    .fan-info p{
        font-size: 12px;
        color: #999;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .fan-info img{
        width: 60px;
        height: 60px;
    }
    .fan-info .name{
        font-size: 16px;
        font-weight: 700;
        white-space: nowrap;
    }
    .fan-info .name a{
        color: #333;

    }
    .fan-info .user-info{
        margin-left: -20px;
    }
    .fan-info .user-info .btn1{
        margin-top: 20px;
        font-size: 12px;
    }
    .showmore{
        text-align: center;
        margin-top: 20px;
    }
    .showmore a{
        color: #999;

    }
    .showmore a:hover{
        text-decoration: none;
    }

</style>

<div class="fans container">
    <div class="menu">
        <span><a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($author_id); ?>">Ta的主页</a> > <span>粉丝</span></span>
    </div>
    <div class="menu-tab">
        <a href="/write-it-now-win-/Home/Index/follow/author/<?php echo ($author_id); ?>" class="menu-tab-follow"><em><b>关注&nbsp; <?php echo ($follow_count); ?></b></em></a>&nbsp;
        <span class="menu-tab-fan"><em><b>粉丝&nbsp; <?php echo ($count); ?></b></em></span>&nbsp;
        <a href="/write-it-now-win-/Home/Index/followStory/author/<?php echo ($author_id); ?>" class="menu-tab-follow-story"><em><b>收藏&nbsp; <?php echo ($collcount); ?></b></em></a>
    </div>
    <?php if($count == 0): ?><h3>作者暂时还没有粉丝</h3>
    <?php else: ?>
        <div class="fan-info">
            <div class="listShow">
                <div class="row">
                    <?php if(is_array($res)): foreach($res as $key=>$v): ?><div class="col-sm-4" style="padding-bottom: 20px">
                            <div class="row">
                                <div class="col-sm-3 user-head">
                                    <a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["fan"]["id"]); ?>"><img src="/write-it-now-win-/Public/<?php echo ($v["fan"]["picture"]); ?>" class="img-circle" /></a>
                                </div>
                                <div class="col-sm-9 user-info" >
                                    <p class="name"><a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["fan"]["id"]); ?>"><?php echo ($v["fan"]["name"]); ?></a></p>
                                    <p><?php echo ($v["fan"]["per_signature"]); ?></p>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                </div>
            </div>
        </div><?php endif; ?>
</div>
</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>