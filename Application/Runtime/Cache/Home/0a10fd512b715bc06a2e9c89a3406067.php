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
    .followStory{
        min-width: 1200px;
    }
    .menu{
        color: #666;
        font-size: 16px;
        padding-bottom: 20px;
    }
    .menu a{
        color: #666;
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
    .menu-tab .menu-tab-follow-story{
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

    .follow-books{
        margin-bottom: 30px;
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
    .right-btn button{
        width: 100px;
        margin-top: 20px;
        display: block;
    }
    .right-btn a{
        width: 100px;
        margin-top: 20px;
        display: block;
    }
</style>

<div class="followStory container">
    <div class="menu">
        <span><a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($author_id); ?>">Ta的主页</a> > <span>收藏</span></span>
    </div>
    <div class="menu-tab">
        <a href="/write-it-now-win-/Home/Index/follow/author/<?php echo ($author_id); ?>" class="menu-tab-follow"><em><b>关注&nbsp; <?php echo ($follow_count); ?></b></em></a>&nbsp;
        <a href="/write-it-now-win-/Home/Index/fans/author/<?php echo ($author_id); ?>" class="menu-tab-fan"><em><b>粉丝&nbsp; <?php echo ($fans_count); ?></b></em></a>&nbsp;
        <span class="menu-tab-follow-story"><em><b>收藏&nbsp; <?php echo ($count); ?></b></em></span>
    </div>

</div>

<div class="container follow-books">
    <div class="row author-books">
        <div class="title">
            Ta的收藏
        </div>
        <div class="book-list">
            <?php if($count == 0): ?><h3>作者暂时没有收藏作品</h3>
             <?php else: ?>
                <ul>
                    <?php if(is_array($res)): foreach($res as $key=>$v): ?><li>
                            <div class="row">
                                <div class="col-sm-2">
                                    <a><img src="/write-it-now-win-/Public/<?php echo ($v["collection"]["picture"]); ?>"></a>
                                </div>
                                <div class="col-sm-8 list-msg">
                                    <p class="book-name">
                                        <a><?php echo ($v["collection"]["name"]); ?></a>
                                    </p>
                                    <p class="tag">
                                        <a><?php echo ($v["collection"]["tag"]); ?></a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                        <?php if($v.collection.is_doing == '0'): ?><span>连载中</span>
                                        <?php else: ?>
                                            <span>完结</span><?php endif; ?>
                                        <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                        <span><?php echo ($v["collection"]["font_count"]); ?> 字</span>
                                    </p>
                                    <p class="book-sig">
                                       <?php echo ($v["collection"]["info"]); ?>
                                    </p>
                                    <p class="new-section">
                                        <a href="/write-it-now-win-/Home/StoryShow/StoryInfo/s_id/<?php echo ($v["collection"]["id"]); ?>/section/<?php echo ($v["collection"]["newsection"]["id"]); ?>">最新章节： <?php echo ($v["collection"]["newsection"]["section"]); ?> &nbsp;<?php echo ($v["collection"]["newsection"]["title"]); ?></a>
                                    </p>
                                </div>
                                <div class="col-sm-2 right-btn">
                                    <a href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["collection"]["id"]); ?>" class="btn btn-danger">立即阅读</a>
                                    <?php if($v['collection']['is_collection'] == 0): ?><form action="/write-it-now-win-/Home/Collection/collection" method="post" >
                                            <input type="hidden" value="<?php echo ($v["collection"]["user_id"]); ?>" name="author_id"/>
                                            <input type="hidden" value="<?php echo ($v["collection"]["user_name"]); ?>" name="author_name"/>
                                            <input type="hidden" value="<?php echo ($v["collection"]["id"]); ?>" name="story_id"/>
                                            <input type="hidden" value="<?php echo ($v["collection"]["name"]); ?>" name="story_name"/>
                                            <input type="hidden" value="<?php echo (session('user_id')); ?>" name="follower_id"/>
                                            <input type="hidden" value="<?php echo (session('user_name')); ?>" name="follower_name"/>
                                            <button type="submit" class="btn btn-default">放入书架</button>
                                        </form>
                                        <?php else: ?>
                                        <form action="/write-it-now-win-/Home/Collection/uncollection" method="post" >
                                            <input type="hidden" value="<?php echo ($v["collection"]["user_id"]); ?>" name="author_id"/>
                                            <input type="hidden" value="<?php echo ($v["collection"]["id"]); ?>" name="story_id"/>
                                            <input type="hidden" value="<?php echo (session('user_id')); ?>" name="follower_id"/>
                                            <button type="submit" class="btn btn-default">取消收藏</button>
                                        </form><?php endif; ?>
                                </div>
                            </div>
                            <hr />
                        </li><?php endforeach; endif; ?>
                </ul><?php endif; ?>
        </div>
    </div>
</div>
</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>