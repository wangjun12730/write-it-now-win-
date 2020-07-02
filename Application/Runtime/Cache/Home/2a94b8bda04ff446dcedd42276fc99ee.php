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
        height: 300px;
        background: url(/win/write-it-now-win-/Public/image/background/3.jpg) no-repeat;
        background-size: 100%,100%;
        margin-top: -20px;
    }
    .search-input{
        display: inline-block;
        width: 400px;
        height: 36px;
        margin-top:130px;
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
        margin-top: 130px;
        margin-left: -5px;
        padding-top: 8px;
    }
    .search-btn:hover{
        text-decoration: none;
        color: #fff;
        background-color: #d9534f;
    }
    .ranklist > h3{
        padding-bottom: 4px;
        border-bottom: 1px solid black;
    }
    .ranklist > h3 span{
        font-size: 18px;
        font-weight: 400;
        line-height: 25px;
        overflow: hidden;
        height: 24px;
        color: #1a1a1a;
    }
    .ranklist ul{
        list-style: none;
    }
    .author a{
        text-decoration: none;
    }
    .author a{
        color: #a6a6a6;
    }
    .author .tag:hover{
        color: red;
    }
    .author .authorname:hover{
        color: black;
    }
    .bookname{
        text-decoration: none;
        color: black;
    }
    .bookname:hover{
        color:slategray;
    }
    .bookinfo h3{
        margin-top: 10px;
        font-size: 16px;
    }
    .bookinfo h3 a{
        color: black;
    }
    .bookinfo h3 a:hover{
        text-decoration: none;
        color: #c7254e;
    }
    /*鼠标悬浮图片缩放*/
    .img:hover{
        -ms-transform:scale(1.1,1.2); /* IE 9 */
        -webkit-transform: scale(1.1,1.2); /* Safari */
        transform: scale(1.1,1.2); /* 标准语法 */
    }

    h4 img{
        float: right;
    }
    .hot-book-list{
        margin-left: -8px;
    }

    .hot-book-list p{
        font-size: 14px;
        letter-spacing: 1px;
        color: #999;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .hot-book-list p a{
        color: #333;
    }
    .hot-book-list p a:hover{
        text-decoration: none;
        color: #9B410E;
    }
    .hot-author{

        background: #f7f7f7;
        border: 1px solid #f0f0f0;
        color: #333;
        height: 195.2px;
    }
    .hot-author .author-name{
        font-size: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 10px;
        color: #333;
    }
    .hot-author p{
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 12px;
        margin-top: 10px;
    }
    .more{
        color: black;
    }
    .more:hover{
        text-decoration: none;
        color: #c8e5bc;
    }
    #newUpdate table tr td a{
        color: black;
    }
    #newUpdate table tr td a:hover{
        text-decoration: none;
        color: #c7254e;
    }
</style>

<div style="width: 100%">
    <!--标签栏-->
    <div id="box" style="margin-top: 100px">
        <div id="search">
            <ul class="menu">
                <li><i type="button" class="fa fa-search" aria-hidden="true" name="popBox" onclick="popBox()"></i> </li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/都市" target="_blank">都市</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/武侠" target="_blank">武侠</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/游戏" target="_blank">游戏</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/玄幻" target="_blank">玄幻</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/军事" target="_blank">军事</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/穿越" target="_blank">穿越</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/恐怖" target="_blank">恐怖</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/科技" target="_blank">科技</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/悬疑" target="_blank">悬疑</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/tag/type/历史" target="_blank">历史</a></li>
                <li><a href="/win/write-it-now-win-/Home/Tag/endingStory">完结</a></li>
            </ul>
            <p>
            <ul class="back">
                <li><a href="/win/write-it-now-win-/Home/Index/index"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a></li>
            </ul></p>
        </div>
        <div class="clear"></div>
    </div>
    <!--弹出层-->
    <div id="popLayer"></div>
    <div id="popBox" style="border-radius: 10px">
        <div class="close">
            <a href="javascript:void(0)" onclick="closeBox()"><i class="fa fa-times"></i></a>
        </div>
        <div class="center">
            <input type="text" class="left" id="search-input" placeholder="斗破苍穹">
            <i type="button" class="fa fa-search fa-2x" id="search-btn" >
            </i>
            <p id="search_hot">热门搜索：斗破苍穹</p>
        </div>
    </div>
    <script>
        /*点击弹出按钮*/
        function popBox() {
            var popBox = document.getElementById("popBox");
            var popLayer = document.getElementById("popLayer");
            popBox.style.display = "block";
            popLayer.style.display = "block";
        };

        /*点击关闭按钮*/
        function closeBox() {
            var popBox = document.getElementById("popBox");
            var popLayer = document.getElementById("popLayer");
            popBox.style.display = "none";
            popLayer.style.display = "none";
        }
    </script>
<!--    搜索-->
    <div id="searching"class="text-center">
        <div>
            <form >
                <input type="search" name="search-input" class="search-input" placeholder="斗破苍穹">
                <a class="search-btn" target="_blank"><b>搜索</b>
                </a>
            </form>
        </div>
    </div>

    <!--  排行  -->
    <div class="container" id="ranking" >
        <h3>热度排行</h3>
        <hr />
        <div class="row" style="margin-top: -20px">
            <div class="col-md-3 col-sm-5 col-xs-12 ranklist" >
                <h3><span>总排行榜</span></h3>
                <ul style="margin-top: -20px">
                    <li>
                        <div class="row">
                            <div class="col-sm-8" style="overflow: hidden">
                                <h3 style="font:700 14px/18px Arial;background-color: #bf2c24;width: 36px;height: 18px;text-align: center;color: #fff;">NO.1</h3>
                                <h4 style="font-size: 16px;margin-top: -5px"><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[0]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[0]['name']); ?></a></h4>
                                <p style="color: #bf2c24;margin-bottom: 4px;margin-top: -5px"><b>总人气冠军</b></p>
                                <p class="author" style="color: #a6a6a6">
                                    <a class="tag"><?php echo ($total_count[0]['tag']); ?></a>
                                    <i >·</i>
                                    <a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($total_count[0]['user_id']); ?>" target="_blank" class="authorname"><?php echo ($total_count[0]['user_name']); ?></a>
                                </p>
                            </div>
                            <div class="col-sm-4" style="margin-top: 20px">
                                <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[0]['id']); ?>" target="_blank" >
                                    <img src="/win/write-it-now-win-/Public/<?php echo ($total_count[0]['picture']); ?>"  style="width: 62px;height: 85px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e67225;color: #fff;padding-bottom: 3px">2
                        </span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1; border-top: 1px solid #ebccd1">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[1]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[1]['name']); ?></a>
                        </span>
                    </li>
                    <li><span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e6bf25;color: #fff;padding-bottom: 3px">3</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[2]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[2]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">4</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[3]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[3]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">5</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[4]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[4]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">6</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[5]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[5]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">7</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[6]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[6]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">8</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[7]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[7]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">9</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[8]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[8]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">10</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[9]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[9]['name']); ?></a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-5 col-xs-12 ranklist" >
                <h3><span>月排行榜</span></h3>
                <ul style="margin-top: -20px">
                    <li>
                        <div class="row">
                            <div class="col-sm-8" style="overflow: hidden">
                                <h3 style="font:700 14px/18px Arial;background-color: #bf2c24;width: 36px;height: 18px;text-align: center;color: #fff;">NO.1</h3>
                                <h4 style="font-size: 16px;margin-top: -5px"><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[0]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[0]['name']); ?></a></h4>
                                <p style="color: #bf2c24;margin-bottom: 4px;margin-top: -5px"><b>总人气冠军</b></p>
                                <p class="author" style="color: #a6a6a6">
                                    <a class="tag"><?php echo ($month_count[0]['tag']); ?></a>
                                    <i >·</i>
                                    <a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($month_count[0]['user_id']); ?>" target="_blank" class="authorname"><?php echo ($month_count[0]['user_name']); ?></a>
                                </p>
                            </div>
                            <div class="col-sm-4" style="margin-top: 20px">
                                <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[0]['id']); ?>" target="_blank" >
                                    <img src="/win/write-it-now-win-/Public/<?php echo ($month_count[0]['picture']); ?>"  style="width: 62px;height: 85px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e67225;color: #fff;padding-bottom: 3px">2
                        </span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1; border-top: 1px solid #ebccd1">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[1]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[1]['name']); ?></a>
                        </span>
                    </li>
                    <li><span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e6bf25;color: #fff;padding-bottom: 3px">3</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[2]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[2]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">4</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[3]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[3]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">5</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[4]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[4]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">6</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[5]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[5]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">7</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[6]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[6]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">8</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[7]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[7]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">9</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[8]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[8]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">10</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[9]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[9]['name']); ?></a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-5 col-xs-12 ranklist" >
                <h3><span>周排行榜</span></h3>
                <ul style="margin-top: -20px">
                    <li>
                        <div class="row">
                            <div class="col-sm-8" style="overflow: hidden">
                                <h3 style="font:700 14px/18px Arial;background-color: #bf2c24;width: 36px;height: 18px;text-align: center;color: #fff;">NO.1</h3>
                                <h4 style="font-size: 16px;margin-top: -5px"><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[0]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[0]['name']); ?></a></h4>
                                <p style="color: #bf2c24;margin-bottom: 4px;margin-top: -5px"><b>总人气冠军</b></p>
                                <p class="author" style="color: #a6a6a6">
                                    <a class="tag"><?php echo ($week_count[0]['tag']); ?></a>
                                    <i >·</i>
                                    <a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($week_count[0]['user_id']); ?>" target="_blank" class="authorname"><?php echo ($week_count[0]['user_name']); ?></a>
                                </p>
                            </div>
                            <div class="col-sm-4" style="margin-top: 20px">
                                <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[0]['id']); ?>" target="_blank">
                                    <img src="/win/write-it-now-win-/Public/<?php echo ($week_count[0]['picture']); ?>"  style="width: 62px;height: 85px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e67225;color: #fff;padding-bottom: 3px">2
                        </span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1; border-top: 1px solid #ebccd1">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[1]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[1]['name']); ?></a>
                        </span>
                    </li>
                    <li><span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e6bf25;color: #fff;padding-bottom: 3px">3</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[2]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[2]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">4</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[3]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[3]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">5</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[4]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[4]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">6</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[5]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[5]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">7</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[6]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[6]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">8</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[7]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[7]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">9</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[8]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[8]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">10</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[9]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[9]['name']); ?></a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-5 col-xs-12 ranklist" >
                <h3><span>日排行榜</span></h3>
                <ul style="margin-top: -20px">
                    <li>
                        <div class="row">
                            <div class="col-sm-8" style="overflow: hidden">
                                <h3 style="font:700 14px/18px Arial;background-color: #bf2c24;width: 36px;height: 18px;text-align: center;color: #fff;">NO.1</h3>
                                <h4 style="font-size: 16px;margin-top: -5px"><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[0]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[0]['name']); ?></a></h4>
                                <p style="color: #bf2c24;margin-bottom: 4px;margin-top: -5px"><b>单日人气冠军</b></p>
                                <p class="author" style="color: #a6a6a6">
                                    <a class="tag"><?php echo ($day_count[0]['tag']); ?></a>
                                    <i >·</i>
                                    <a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($day_count[0]['user_id']); ?>" target="_blank" class="authorname"><?php echo ($day_count[0]['name']); ?></a>
                                </p>
                            </div>
                            <div class="col-sm-4" style="margin-top: 20px">
                                <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[0]['id']); ?>" target="_blank" >
                                    <img src="/win/write-it-now-win-/Public/<?php echo ($day_count[0]['picture']); ?>"  style="width: 62px;height: 85px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e67225;color: #fff;padding-bottom: 3px">2
                        </span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1; border-top: 1px solid #ebccd1">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[1]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[1]['name']); ?></a>
                        </span>
                    </li>
                    <li><span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e6bf25;color: #fff;padding-bottom: 3px">3</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[2]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[2]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">4</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[3]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[3]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">5</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[4]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[4]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">6</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[5]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[5]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">7</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[6]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[6]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">8</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[7]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[7]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">9</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[8]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[8]['name']); ?></a>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">10</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[9]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[9]['name']); ?></a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--    频道分类-->
    <div class="container" id="tagsort">
        <h3>频道分类</h3>
        <hr />
        <div class="row">
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">玄幻&nbsp;·&nbsp;奇幻 <img src="/win/write-it-now-win-/Public/image/background/cate01.png" /></h4>
                <div class="hot-book-list">
                    <?php if(is_array($res8)): foreach($res8 as $key=>$v): ?><p><span>「<?php echo ($v["tag"]); ?>」</span><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" target="_blank"><?php echo ($v["name"]); ?></a></p><?php endforeach; endif; ?>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">都市&nbsp;·&nbsp;娱乐<img src="/win/write-it-now-win-/Public/image/background/cate02.png" /></h4>
                <div class="hot-book-list">
                    <?php if(is_array($res9)): foreach($res9 as $key=>$v): ?><p><span>「<?php echo ($v["tag"]); ?>」</span><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>" target="_blank"><?php echo ($v["name"]); ?></a></p><?php endforeach; endif; ?>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12"style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">历史&nbsp;·&nbsp;军事<img src="/win/write-it-now-win-/Public/image/background/cate03.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「历史」</span><a>唐朝贵公子</a></p>
                    <p><span>「军事」</span><a>密战无痕</a></p>
                    <p><span>「军事」</span><a>军旗永辉</a></p>
                    <p><span>「军事」</span><a>大秦工程兵</a></p>
                    <p><span>「历史」</span><a>盛唐日月</a></p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">武侠&nbsp;·&nbsp;科幻<img src="/win/write-it-now-win-/Public/image/background/cate04.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「科幻」</span><a>欢想世界</a></p>
                    <p><span>「武侠」</span><a>医不容慈</a></p>
                    <p><span>「科幻」</span><a>改变大唐之李元霸</a></p>
                    <p><span>「武侠」</span><a>少侠请开恩</a></p>
                    <p><span>「科幻」</span><a>墨家科技</a></p>

                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">恐怖&nbsp;·&nbsp;悬疑<img src="/win/write-it-now-win-/Public/image/background/cate05.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「恐怖」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「悬疑」</span><a>超级侦探系统</a></p>
                    <p><span>「恐怖」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「恐怖」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「悬疑」</span><a>我在创造神话世界</a></p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">穿越&nbsp;·&nbsp;游戏<img src="/win/write-it-now-win-/Public/image/background/cate06.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">二次元<img src="/win/write-it-now-win-/Public/image/background/cate07.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>

                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12 hot-author" style="background-color: #f7f7f7">
                <h4 style="width: 100%;padding-bottom: 5px">人气作者</h4>
                <a href="/win/write-it-now-win-/Home/Index/showAuthor/author/10015" target="_blank"><img src="/win/write-it-now-win-/Public/image/user/1001572f082025aafa40faf1dff7ea264034f79f019bd.jpg" class="img-circle" style="width: 60px;height: 60px;float: right"></a>
                <a class="author-name" >天蚕土豆</a>
                <p>主要作品</p>
                <p >斗破苍穹、武动乾坤、大主宰等</p>
                <div style="width: 100%;text-align: center;margin-top: 20px"><a href="/win/write-it-now-win-/Home/Index/showAuthor/author/10015" target="_blank" class="btn btn-danger">作者详情</a></div>
            </div>
        </div>

    </div>
    <!--   总览-->
    <div class="container" id="bookinfos">
        <h3 style="display: inline-block">栏目总览</h3>
        <a href="/win/write-it-now-win-/Home/Tag/allstory" target="_blank" class="more" style="float: right;display: inline-block;margin-top: 50px">查看更多</a>
        <hr />
        <div class="row" style="margin-top: 30px">
            <?php if(is_array($overview)): foreach($overview as $key=>$v): ?><div class="col-sm-5 col-md-4 col-xs-12" style="padding-bottom: 30px ">
                    <div class="row">
                        <div class="col-sm-3" style="overflow: hidden">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><img src="/win/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" class="img" alt="加载图片失败" style="width: 72px;height: 96px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);"></a>
                        </div>
                        <div class="col-sm-9 bookinfo">
                            <h3><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></h3>
                            <p style="font-size: 12px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis">简介：<?php echo ($v["info"]); ?></p>
                            <p style="font-size: 12px;"><a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["user_id"]); ?>" target="_blank"><span class="glyphicon glyphicon-user" style="color: #a6a6a6"><?php echo ($v["user_name"]); ?></span></a><span style="color: #bf2c24;border: 1px solid #df9591;float: right;"><?php echo ($v["font_count"]); ?></span><span style="color: #a6a6a6;border: 1px solid #bfbfbf;float: right;margin-right: 10px"><?php echo ($v["tag"]); ?></span><p>
                        </div>
                    </div>
                </div><?php endforeach; endif; ?>

        </div>
    </div>

    <!--   完本精品-->
    <div class="container" id="bookending">
        <h3 style="display: inline-block">完本精品</h3>
        <a  href="/win/write-it-now-win-/Home/Tag/endingStory" target="_blank" class="more" style="float: right;display: inline-block;margin-top: 50px">查看更多</a>
        <hr />
        <div class="row" style="margin-top: 30px">
         <?php if(is_array($finish)): foreach($finish as $key=>$v): ?><div class="col-sm-5 col-md-4 col-xs-12" style="padding-bottom: 30px ">
                <div class="row">
                    <div class="col-sm-3" style="overflow: hidden">
                        <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><img src="/win/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" class="img" alt="加载图片失败" style="width: 72px;height: 96px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);"></a>
                    </div>
                    <div class="col-sm-9 bookinfo">
                        <h3><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></h3>
                        <p style="font-size: 12px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis">简介：<?php echo ($v["info"]); ?></p>
                        <p style="font-size: 12px;"><a href="/win/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["user_id"]); ?>" target="_blank"><span class="glyphicon glyphicon-user" style="color: #a6a6a6"><?php echo ($v["user_name"]); ?></span></a><span style="color: #bf2c24;border: 1px solid #df9591;float: right;"><?php echo ($v["font_count"]); ?>字</span><span style="color: #a6a6a6;border: 1px solid #bfbfbf;float: right;margin-right: 10px"><?php echo ($v["tag"]); ?></span><p>
                    </div>
                </div>
            </div><?php endforeach; endif; ?>
        </div>
    </div>

    <!--最近更新-->
    <div class="container" id="newUpdate">
        <h3 style="display: inline-block">最新更新</h3>
        <a  href="/win/write-it-now-win-/Home/Tag/allstory" target="_blank" class="more" style="float: right;display: inline-block;margin-top: 50px">查看更多</a>
        <table class="table">
            <?php if(is_array($update)): foreach($update as $key=>$v): ?><tr>
                    <td><a><?php echo ($v["tag"]); ?></a></td>
                    <td><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["story_id"]); ?>" target="_blank"><?php echo ($v["story_name"]); ?></a></td>
                    <td><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["story_id"]); ?>" target="_blank"><?php echo ($v["section"]); ?> &nbsp;<?php echo ($v["title"]); ?> </a></td>
                    <td><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["story_id"]); ?>" target="_blank"><?php echo ($v["user_name"]); ?></a></td>
                    <td><a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["story_id"]); ?>" target="_blank"><?php echo ($v["update_time"]); ?></a></td>
                </tr><?php endforeach; endif; ?>
        </table>
    </div>

</div>




<script>
    //搜索
    function search1() {

        if($("#se").val()===""){
            alert('搜索内容不能为空！');
        }
        var a = $("#se").val();
        location = '#?search='+a;
        return true;
    }

    //当主页面搜索链接被点击时执行
    $(".search-btn").click(function () {
        if($('.search-input').val()== ''){
            $(this).attr("href","/win/write-it-now-win-/Home/Index/search/kw/"+$('.search-input').attr('placeholder'));
        }else {
            $(this).attr("href","/win/write-it-now-win-/Home/Index/search/kw/"+$('.search-input').val());
        }

    });

    //当悬浮弹出框搜索链接被点击时执行
    $("#search-btn").click(function () {
        if($('#search-input').val()== ''){
            location = "/win/write-it-now-win-/Home/Index/search/kw/"+$('#search-input').attr('placeholder');
        }else {
            location = "/win/write-it-now-win-/Home/Index/search/kw/"+$('#search-input').val();
        }

    });
</script>

</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>