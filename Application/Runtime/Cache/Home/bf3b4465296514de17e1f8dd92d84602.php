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
    #searching{
        height: 150px;
    }
    .search-input{
        display: inline-block;
        width: 400px;
        height: 36px;
        margin-top:50px;
        border:1px solid #dbdbdb;
    }
    .search-btn{
        display: inline-block;
        height: 36px;
        width: 60px;
        text-align: center;
        text-indent: 5px;
        letter-spacing: 4px;
        color:#fff;
        background: #bf2c24;
        vertical-align: top;
        margin-top: 50px;
        margin-left: -5px;
        padding-top: 8px;
    }
    .search-btn:hover{
            text-decoration: none;
            color: #fff;
            background-color: #d9534f;
    }
/*   搜索内容 */
    .tool-bar{
        z-index: 1;
        height: 40px;
        background: #f7f6f2;
        margin-bottom: 30px;
        color: #a6a6a6;
        padding-top: 10px;
        min-width: 1200px;
    }
    .count-info{
        float: right;
        margin-right: 20px;
    }
    .count-info span{
        color: #00CDCD;
    }
    .count-tip{
        margin-left: 20px;
        color: #ed4259;
    }
    .content-list{
        min-width: 1200px;
        margin-bottom: 30px;
    }
    .content-list ul{
        list-style: none;
    }
    .book-img{
        overflow: hidden;
    }
    .book-img img{
        width: 102px;
        height: 136px;
        box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);
    }
    .book-img img:hover{
        -ms-transform:scale(1.1,1.2); /* IE 9 */
        -webkit-transform: scale(1.1,1.2); /* Safari */
        transform: scale(1.1,1.2); /* 标准语法 */
    }
    .book-info{
        margin-left: -75px;
    }
    .book-name{
        color:saddlebrown;
    }
    .book-name:hover{
        text-decoration: none;
        color: #d9534f;
    }
    .author{
        color: #a6a6a6;
    }
    .author a{
        text-decoration: none;
        color: #a6a6a6;
    }
    .author a:hover{
        text-decoration: none;
        color: #d9534f;
    }
    .book-right p{
        float: right;
        margin-top: 10px
    }
    .con-button{
        margin-top: 110px;
    }
    .con-button .bn1{
        margin-right: 20px;
        margin-left: 185px;
    }
    .intro{
        height: 40px;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #666;
    }
    .update a{
        color: #3f5a93
    }
    .update a:hover{
        color: blueviolet;
        text-decoration: none;
    }
    /*作者信息显示*/
    .author-info img{
        width: 120px;
        height: 120px;
    }
    .author-info .author-intros{
        margin-left: 40px;
    }
    .author-info .author-intros p{
        z-index: 10;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #666;
    }
    .author-book {
        margin-left: 50px;
    }
    .author-book p{
        overflow: hidden;
        text-align: center;
        font-size: 12px;
    }
    .author-book p img{
        width: 68px;
        height: 88px;
        box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);
    }
    .author-book p img:hover{
        -ms-transform:scale(1.1,1.2); /* IE 9 */
        -webkit-transform: scale(1.1,1.2); /* Safari */
        transform: scale(1.1,1.2); /* 标准语法 */
    }
    .author-intros a:hover{
        text-decoration: none;
        color: #9B410E;
    }
    .author-book a:hover{
        text-decoration: none;
    }
</style>
<div id="searching"class="text-center">
    <div>
        <form >
            <input type="search" name="search-input" class="search-input" placeholder="斗破苍穹">
            <a class="search-btn"><b>搜索</b>
            </a>
        </form>
    </div>
</div>

<div class="search-content container">
    <?php if($count == 0): ?><div style="text-align: center">
            <h4>没有输入有效关键词</h4>
        </div>
        <div class="not_search">
            <h3 style="border-bottom: 1px solid black;padding-bottom: 20px">新书推荐</h3>
            <div class="content-list" style="margin-top: 20px">
                <ul>
                    <?php if(is_array($res)): foreach($res as $key=>$v): ?><li>
                            <div class="row">
                                <div class="book-img col-sm-2">
                                    <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" target="_blank">
                                        <img src="/win/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>">
                                    </a>
                                </div>
                                <div class="book-info col-sm-7">
                                    <h4 ><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" class="book-name"><?php echo ($v["name"]); ?></a>
                                    </h4>
                                    <p class="author"><a><span class="glyphicon glyphicon-user"></span> <span><?php echo ($v["user_name"]); ?></span></a> &nbsp;|&nbsp; <a><span><?php echo ($v["tag"]); ?></span></a> &nbsp;|&nbsp;
                                        <?php if($v["is_dong"] == '0'): ?><span>连载</span>
                                            <?php else: ?>
                                            <span>完结</span><?php endif; ?>
                                    </p>
                                    <p class="intro">
                                        <?php echo ($v["info"]); ?>
                                    </p>
                                    <div class="update">
                                        <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" >最新更新 <span><?php echo ($v["new_section"]["section"]); ?></span> <span><?php echo ($v["new_section"]["title"]); ?></span></a>
                                        <span>2019-12-29</span>
                                    </div>
                                </div>
                                <div class="col-sm-3 book-right">
                                    <p><?php echo ($v["font_count"]); ?> 总字数</p>
                                    <div class="con-button">
                                        <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" class="btn btn-danger bn1" >书籍详情</a>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-top: 10px"/>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
    <?php else: ?>
        <div class="is_search">
            <?php if($is_author == 1): ?><div class="author-info">
                    <h3>作者</h3>
                    <hr style="border-bottom:1px solid black "/>
                    <?php if(is_array($author)): foreach($author as $key=>$v): ?><div class="row" style="margin-bottom: 20px">
                        <div class="col-sm-1">
                            <a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["id"]); ?>"><img src="/win/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" class="img-circle"></a>
                        </div>
                        <div class="col-sm-4 author-intros">
                            <h4><a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["id"]); ?>" style="color: black"><?php echo ($v["name"]); ?></a></h4>
                            <p>简介:<?php echo ($v["per_signature"]); ?></p>
                            <p><span>作品数：<?php echo ($v["bookcount"]); ?></span></p>
                        </div>
                        <div class="col-sm-6 author-book">
                            <div class="row">
                                <?php $__FOR_START_571__=0;$__FOR_END_571__=$v["bookcount"];for($i=$__FOR_START_571__;$i < $__FOR_END_571__;$i+=1){ if($i < 6): ?><div class="col-sm-2" style="margin-left: -10px">
                                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v['authorbook'][$i]['id']); ?>" style="color: black">
                                                <p><img src="/win/write-it-now-win-/Public/<?php echo ($v['authorbook'][$i]['picture']); ?>"></p>
                                                <p><?php echo ($v['authorbook'][$i]['name']); ?></p>
                                            </a>
                                        </div><?php endif; } ?>
                            </div>
                        </div>
                        </div><?php endforeach; endif; ?>
                </div>
            <?php else: ?>
                <div class="tool-bar">
                    <div class="count-info">
                        <p>共 <span><?php echo ($count); ?></span> 本相关作品</p>
                    </div>
                    <div class="count-tip">
                        <p>搜到的内容</p>
                    </div>
                </div>
                <div class="content-list">
                    <ul>
                        <?php if(is_array($book)): foreach($book as $key=>$v): ?><li>
                                <div class="row">
                                    <div class="book-img col-sm-2">
                                        <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" target="_blank">
                                            <img src="/win/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>">
                                        </a>
                                    </div>
                                    <div class="book-info col-sm-7">
                                        <h4 ><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" class="book-name"><?php echo ($v["name"]); ?></a>
                                        </h4>
                                        <p class="author"><a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["user_id"]); ?>"><span class="glyphicon glyphicon-user"></span> <span><?php echo ($v["user_name"]); ?></span></a> &nbsp;|&nbsp; <a><span><?php echo ($v["tag"]); ?></span></a> &nbsp;|&nbsp;
                                            <?php if($v["is_dong"] == '0'): ?><span>连载</span>
                                                <?php else: ?>
                                                <span>完结</span><?php endif; ?>

                                        </p>
                                        <p class="intro">
                                            <?php echo ($v["info"]); ?>
                                        </p>
                                        <div class="update">
                                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" >最新更新 <span><?php echo ($v["new_section"]["section"]); ?></span> <span><?php echo ($v["new_section"]["title"]); ?></span></a>
                                            <span>2019-12-29</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 book-right">
                                        <p><?php echo ($v["font_count"]); ?> 总字数</p>
                                        <div class="con-button">
                                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" class="btn btn-danger bn1" >书籍详情</a>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-top: 10px"/>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div><?php endif; ?>
        </div><?php endif; ?>
</div>

<script>
    //当搜索链接被点击时执行
    $(".search-btn").click(function () {
        if($('.search-input').val()== ''){
            $(this).attr("href","/win/write-it-now-win-/Home/Index/search/kw/"+$('.search-input').attr('placeholder'));
        }else {
            $(this).attr("href","/win/write-it-now-win-/Home/Index/search/kw/"+$('.search-input').val());
        }


    });
</script>
</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>