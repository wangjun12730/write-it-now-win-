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
    .showAuthor{
        min-width: 1200px;
        margin-bottom: 50px;
        margin-top: -20px;
        background: url("/write-it-now-win-/Public/image/background/1.jpg") no-repeat;
        background-size: 100% 100%;
    }
    .user-msg{
        height: 300px;
        color: #fff;
    }
    .user-msg img{
        width: 100px;
        height: 100px;
        margin-top: 50px;
        margin-left: 40px;
    }
    .user-info{
        margin-left: -20px;
        margin-top: 50px;
    }
    .user-info .name{
        line-height: 40px;
        font-size: 24px;
    }
    .intro{
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .count{
        font-size: 20px;
    }
    .count span{
        margin-right: 30px;
    }
    .count span i{
        font-size: 12px;
    }
    .count span a{
        color: #fff;
    }
    .rights{
        padding-top: 116px;
    }
    .rights button{
        width: 126px;
        height: 40px;
        padding-top: 3px;
    }
    .rights button i{
        font-size: 24px;
    }
    .book-count{
        margin-top: 50px;
    }
    .book-count i{
        color: #2b669a;
    }
    .author-books{
        margin-top: 30px;
    }
    .author-books .title{
        font-size: 20px;
        color: #333;
        letter-spacing: 1px;
        font-weight: 700;
        padding-bottom: 10px;
    }
    .book-list{
        background: #f7f7f7;
        padding-top: 10px;
        padding-bottom: 15px;
        padding-left: 20px;
    }
    .book-list img{
        width: 112px;
        height: 146px;
    }
    .book-list .book-name{
        font-size: 20px;
        letter-spacing: 1.2px;
    }
    .book-list .book-name a{
        color: #333;
    }
    .book-list .book-name a:hover{
        text-decoration: none;
        color: #9B410E;
    }
    .book-list .list-msg{
        margin-left: -50px;
    }
    .book-list .list-msg .tag{
        font-size: 12px;
        color: #999;
    }
    .book-list .list-msg .tag a{
        color: #999;
    }
    .book-list .list-msg .tag a:hover{
        color: #9B410E;
        text-decoration: none;
    }
    .book-sig{
        margin-top: 20px;
        height: 40px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .new-section{
        margin-top: 20px;
        font-size: 12px;
    }
    .new-section a{
        color: #999;
    }
    .new-section a:hover{
        color: #9B410E;
        text-decoration: none;
    }

    .right-btn{
        margin-top: 30px;
        margin-left: 30px;
    }
    .right-btn a{
         width: 100px;
         margin-top: 20px;
         display: block;
     }
    .right-btn button{
        width: 100px;
        margin-top: 20px;
        display: block;
    }
    .showAuthor-books{
        margin-bottom: 30px;
    }
</style>
<div class="showAuthor container-fluid">
    <div class="container">
        <div class="user-msg row user-head">
            <div class="col-sm-2">
                <img src="/write-it-now-win-/Public/<?php echo ($author_info["picture"]); ?>" class="img-circle">
            </div>
            <div class="col-sm-8 user-info">
                <p class="name">
                    <?php echo ($author_info["name"]); ?>
                </p>
                <p class="intro">
                    <i> 个性签名 &nbsp;<em>| </em></i> &nbsp;<span><?php echo ($author_info["per_signature"]); ?></span>
                </p>
                <p class="count">
                    <span><i>关注&nbsp;&nbsp;<em> | </em>&nbsp;</i> <a href="/write-it-now-win-/Home/Index/follow/author/<?php echo ($author_info["id"]); ?>"><?php echo ($followcount); ?></a></span>
                    <span><i>收藏&nbsp;&nbsp;<em> | </em>&nbsp;</i> <a href="/write-it-now-win-/Home/Index/followStory/author/<?php echo ($author_info["id"]); ?>"><?php echo ($collcount); ?></a></span>
                    <span><i>粉丝&nbsp;&nbsp;<em> | </em>&nbsp;</i> <a href="/write-it-now-win-/Home/Index/fans/author/<?php echo ($author_info["id"]); ?>"><?php echo ($fancount); ?></a></span>
                </p>
                <p class="book-count">
                    <span><i>本站作品数 </i> &nbsp;&nbsp;<?php echo ($story_count); ?></span>
                    &nbsp;&nbsp;&nbsp;<em> | </em>&nbsp;&nbsp;&nbsp;
                    <span><i>累计字数</i>&nbsp;&nbsp;<?php echo ($font_count); ?> </span>
                </p>
            </div>
            <div class="col-sm-2 rights">
                <?php if($is_follow == 0): ?><button class="btn btn-danger btn-lg" form="follow"><i>+</i> &nbsp;&nbsp;关注</button>
                    <form action="/write-it-now-win-/Home/Follow/follow" method="post" id="follow">
                        <input type="hidden" name="author_id" value="<?php echo ($author_info["id"]); ?>"/>
                        <input type="hidden" name="author_name" value="<?php echo ($author_info["name"]); ?>"/>
                        <input type="hidden" name="fan_id" value="<?php echo (session('user_id')); ?>"/>
                        <input type="hidden" name="fan_name" value="<?php echo (session('user_name')); ?>"/>
                    </form>
                 <?php else: ?>
                    <button class="btn btn-danger btn-lg" form="unfollow" style="padding-top: 9px">取消关注</button>
                    <form action="/write-it-now-win-/Home/Follow/unfollow" method="post" id="unfollow">
                        <input type="hidden" name="author_id" value="<?php echo ($author_info["id"]); ?>"/>
                        <input type="hidden" name="fan_id" value="<?php echo (session('user_id')); ?>"/>
                    </form><?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="container showAuthor-books">
    <div class="row author-books">
        <div class="title">
            Ta的作品
        </div>
        <div class="book-list">
            <ul>
                <?php if(is_array($story_info)): foreach($story_info as $key=>$v): ?><li>
                        <div class="row">
                            <div class="col-sm-2">
                                <a><img src="/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>"></a>
                            </div>
                            <div class="col-sm-8 list-msg">
                                <p class="book-name">
                                    <a><?php echo ($v["name"]); ?></a>
                                </p>
                                <p class="tag">
                                    <a><?php echo ($v["tag"]); ?></a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <?php if($v["is_doing"] == 0): ?><span>连载中</span>
                                    <?php else: ?>
                                        <span>完结</span><?php endif; ?>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><?php echo ($v["font_count"]); ?></span>
                                </p>
                                <p class="book-sig">
                                    <?php echo ($v["info"]); ?>
                                </p>
                                <p class="new-section">
                                    <a href="/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($v["id"]); ?>/section/<?php echo ($v["newsection"]["id"]); ?>">最新章节： <?php echo ($v["newsection"]["section"]); ?> &nbsp;<?php echo ($v["newsection"]["title"]); ?></a>
                                </p>
                            </div>
                            <div class="col-sm-2 right-btn">
                                <a href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" class="btn btn-danger">立即阅读</a>
                                <?php if($v["is_collection"] == 0): ?><form action="/write-it-now-win-/Home/Collection/collection" method="post" target="_blank">
                                        <input type="hidden" value="<?php echo ($v["user_id"]); ?>" name="author_id"/>
                                        <input type="hidden" value="<?php echo ($v["user_name"]); ?>" name="author_name"/>
                                        <input type="hidden" value="<?php echo ($v["id"]); ?>" name="story_id"/>
                                        <input type="hidden" value="<?php echo ($v["name"]); ?>" name="story_name"/>
                                        <input type="hidden" value="<?php echo (session('user_id')); ?>" name="follower_id"/>
                                        <input type="hidden" value="<?php echo (session('user_name')); ?>" name="follower_name"/>
                                        <button type="submit" class="btn btn-default">放入书架</button>
                                    </form>
                                <?php else: ?>
                                    <form action="/write-it-now-win-/Home/Collection/uncollection" method="post" >
                                        <input type="hidden" value="<?php echo ($v["user_id"]); ?>" name="author_id"/>
                                        <input type="hidden" value="<?php echo ($v["id"]); ?>" name="story_id"/>
                                        <input type="hidden" value="<?php echo (session('user_id')); ?>" name="follower_id"/>
                                        <button type="submit" class="btn btn-default">取消收藏</button>
                                    </form><?php endif; ?>
                            </div>
                        </div>
                        <hr />
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>
</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>