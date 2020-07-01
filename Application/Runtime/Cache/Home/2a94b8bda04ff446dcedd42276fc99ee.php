<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title>WIN网站</title>
    <link href="/win/write-it-now-win-/Public/css/home.css" rel="stylesheet" />
    <script src="/win/write-it-now-win-/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="top">
    <div class="top_nav">
        <ul><li>收藏本站</li><li>关注本站</li></ul>
        <ul class="right">
            <?php if(isset($mid)): ?><li><?php echo ($mname); ?>，欢迎来到WIN网站！[<a href="/win/write-it-now-win-/Home/User/logout">退出</a>]<li>
                <?php else: ?>
                <li>您好，欢迎来到WIN网站！[<a href="/win/write-it-now-win-/Home/User/login">登录</a>][<a href="/win/write-it-now-win-/Home/User/register">免费注册</a>]</li><?php endif; ?>
            <li class="line">|</li><li>个人中心</li>
            <li class="line">|</li><li><a href="/win/write-it-now-win-/Home/User/index">个人中心</a></li>
            <li class="line">|</li><li><a href="/win/write-it-now-win-/Home/User/column">我的栏目</a></li>
            <li class="line">|</li><li>联系客服</li>
        </ul>
    </div>
</div>
<div id="box">
    <div id="header">
        <a class="left" href="/win/write-it-now-win-/"><div id="logo"></div></a>
        <div id="search" class="left">
            <input type="text" class="left" />
            <input class="search_btn" type="button" value="搜索" />
            <p id="search_hot">热门搜索：言情  悬疑  恐怖  完结</p>
        </div>
        <div id="info" class="left">
            <input type="button" value="个人中心" onclick="location.href='/win/write-it-now-win-/Home/User/index'" />
        </div>
    </div>
    <div class="clear"></div>
    <div id="nav">
        <ul><li class="category"><a href="#">全部分类</a>
            <!--标签按钮（补充一下）-->
            <!--<li><a href="#">悬疑</a></li><li><a href="#">都市</a></li><li><a href="#">玄幻</a></li>-->
            <!--<li><a href="#">恐怖</a></li><li><a href="#">言情</a></li><li><a href="#">科技</a></li> -->

        </li><li class="curr"><a href="/win/write-it-now-win-/">首页</a></li>
            </li><li class="curr"><a href="/win/write-it-now-win-/">讨论区</a></li>
        </ul>
    </div>
    
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
</style>

<div style="width: 100%">
    <!--标签栏-->
    <div id="box" style="margin-top: 100px">
        <div id="search">
            <ul class="menu">
                <li><i type="button" class="fa fa-search" aria-hidden="true" name="popBox" onclick="popBox()"></i> </li>
                <li><a href="#new">最新</a></li>
                <li><a href="#">都市</a></li>
                <li><a href="#">武侠</a></li>
                <li><a href="#">游戏</a></li>
                <li><a href="#">玄幻</a></li>
                <li><a href="#">穿越</a></li>
                <li><a href="#">恐怖</a></li>
                <li><a href="#">科技</a></li>
                <li><a href="#">悬疑</a></li>
                <li><a href="#">历史</a></li>
                <li><a href="#">军事</a></li>
                <li><a href="#">完结</a></li>
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
    <div id="popBox">
        <div class="close">
            <a href="javascript:void(0)" onclick="closeBox()"><i class="fa fa-times"></i></a>
        </div>
        <div class="center">
            <input type="text" class="left" placeholder="请输入书名！">
            <i type="button" class="fa fa-search fa-2x" aria-hidden="true">
            </i>
            <p id="search_hot">热门搜索：霸道总裁爱上我</p>
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
                <input type="search" name="search-input" class="search-input" placeholder="Search">
                <a class="search-btn"><b>搜索</b>
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
                                    <a class="authorname"><?php echo ($total_count[0]['user_name']); ?></a>
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
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li><span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e6bf25;color: #fff;padding-bottom: 3px">3</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[2]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[2]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">4</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[3]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[3]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">5</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[4]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[4]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">6</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[5]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[5]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">7</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[6]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[6]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">8</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[7]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[7]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">9</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[8]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[8]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">10</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($total_count[9]['id']); ?>" target="_blank" class="bookname"><?php echo ($total_count[9]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
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
                                    <a class="authorname"><?php echo ($month_count[0]['user_name']); ?></a>
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
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li><span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e6bf25;color: #fff;padding-bottom: 3px">3</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[2]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[2]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">4</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[3]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[3]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">5</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[4]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[4]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">6</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[5]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[5]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">7</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[6]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[6]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">8</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[7]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[7]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">9</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[8]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[8]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">10</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($month_count[9]['id']); ?>" target="_blank" class="bookname"><?php echo ($month_count[9]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
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
                                    <a class="authorname"><?php echo ($week_count[0]['user_name']); ?></a>
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
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li><span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e6bf25;color: #fff;padding-bottom: 3px">3</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[2]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[2]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">4</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[3]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[3]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">5</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[4]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[4]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">6</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[5]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[5]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">7</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[6]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[6]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">8</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[7]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[7]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">9</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[8]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[8]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">10</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($week_count[9]['id']); ?>" target="_blank" class="bookname"><?php echo ($week_count[9]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
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
                                    <a class="authorname"><?php echo ($day_count[0]['name']); ?></a>
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
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li><span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #e6bf25;color: #fff;padding-bottom: 3px">3</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[2]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[2]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">4</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[3]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[3]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">5</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                            <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[4]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[4]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">6</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[5]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[5]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">7</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[6]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[6]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">8</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[7]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[7]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">9</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[8]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[8]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
                        </span>
                    </li>
                    <li>
                        <span style="display:inline-block;text-align:center;width: 16px;height: 18px;background-color: #ededed;color: #666;padding-bottom: 3px">10</span>
                        <span style="margin-left:8px;padding-top:5px;display: inline-block;height: 30px;width:232px;border-bottom: 1px solid #ebccd1;">
                             <a href="/win/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($day_count[9]['id']); ?>" target="_blank" class="bookname"><?php echo ($day_count[9]['name']); ?></a>
                            <span class="glyphicon glyphicon-arrow-up" style="float: right;color: #bfbfbf"></span>
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
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">都市&nbsp;·&nbsp;娱乐<img src="/win/write-it-now-win-/Public/image/background/cate02.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12"style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">历史&nbsp;·&nbsp;军事<img src="/win/write-it-now-win-/Public/image/background/cate03.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">武侠&nbsp;·&nbsp;科幻<img src="/win/write-it-now-win-/Public/image/background/cate04.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>

                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12" style="margin-bottom: 20px">
                <h4 style="border-bottom: 1px solid black;width: 100%;padding-bottom: 5px">恐怖&nbsp;·&nbsp;悬疑<img src="/win/write-it-now-win-/Public/image/background/cate05.png" /></h4>
                <div class="hot-book-list">
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
                    <p><span>「玄幻」</span><a>霸道总裁爱上我</a></p>
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
                <a><img src="/win/write-it-now-win-/Public/image/1.jpg" class="img-circle" style="width: 60px;height: 60px;float: right"></a>
                <a class="author-name" >王俊</a>
                <p>主要作品</p>
                <p >赏金天下、妙医鸿途、大国名厨等</p>
                <div style="width: 100%;text-align: center;margin-top: 20px"><button class="btn btn-danger">作者详情</button></div>
            </div>
        </div>

    </div>
    <!--   总览-->
    <div class="container" id="bookinfos">
        <h3 style="display: inline-block">栏目总览</h3>
        <a class="more" style="float: right;display: inline-block;margin-top: 50px">查看更多</a>
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
                            <p style="font-size: 12px;"><span class="glyphicon glyphicon-user" style="color: #a6a6a6"><?php echo ($v["user_name"]); ?></span><span style="color: #bf2c24;border: 1px solid #df9591;float: right;"><?php echo ($v["font_count"]); ?></span><span style="color: #a6a6a6;border: 1px solid #bfbfbf;float: right;margin-right: 10px"><?php echo ($v["tag"]); ?></span><p>
                        </div>
                    </div>
                </div><?php endforeach; endif; ?>

        </div>
    </div>

    <!--   完本精品-->
    <div class="container" id="bookending">
        <h3 style="display: inline-block">完本精品</h3>
        <a  class="more" style="float: right;display: inline-block;margin-top: 50px">查看更多</a>
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
                        <p style="font-size: 12px;"><span class="glyphicon glyphicon-user" style="color: #a6a6a6"><?php echo ($v["user_name"]); ?></span><span style="color: #bf2c24;border: 1px solid #df9591;float: right;"><?php echo ($v["font_count"]); ?>字</span><span style="color: #a6a6a6;border: 1px solid #bfbfbf;float: right;margin-right: 10px"><?php echo ($v["tag"]); ?></span><p>
                    </div>
                </div>
            </div><?php endforeach; endif; ?>
        </div>
    </div>

    <!--最近更新-->
    <div class="container" id="newUpdate">
        <h3 style="display: inline-block">最新更新</h3>
        <a class="more" style="float: right;display: inline-block;margin-top: 50px">查看更多</a>
        <table class="table">
            <?php if(is_array($update)): foreach($update as $key=>$v): ?><tr>
                    <td><?php echo ($v["tag"]); ?></td>
                    <td><?php echo ($v["story_name"]); ?></td>
                    <td><?php echo ($v["section"]); ?> &nbsp;<?php echo ($v["title"]); ?></td>
                    <td><?php echo ($v["user_name"]); ?></td>
                    <td><?php echo ($v["update_time"]); ?></td>
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
</script>

    <div id="service">
        <ul><li>购物指南</li><li>配送方式</li><li>支付方式</li>
            <li>售后服务</li><li>特色服务</li><li>网络服务</li>
        </ul>
        <div class="clear"></div>
    </div>
    <div id="footer">WIN网站</div>
</div>
=======
    <title>write it now!</title>
    <link href="../../../Public/css/layout.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../../Public/css/font-awesome.min.css">
</body>
<body>
<!--顶部-->
    <div id="top">
        <div class="top_nav">
            <ul class="left">
                <?php if(isset($mid)): ?><li>Hello，<?php echo ($mname); ?>！[<a href="/win/write-it-now-win-/Home/User/logout">退出</a>]<li>
                    <?php else: ?>
                    <li>Hello！[<a href="/win/write-it-now-win-/Home/User/login">登录</a>][<a href="/win/write-it-now-win-/Home/User/register">免费注册</a>]</li><?php endif; ?>
            </ul>
            <ul class="right">
                <li><a href="#"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

<!--选项-->
<div id="option">
    <section class="center">
        <ul class="link">
            <li class="z"><a href="shouye.html" target="myiframe">首页</a></li>
            <li class="line">|</li>
            <li class="z"><a href="talk.html" target="myiframe">讨论</a></li>
        </ul>
    </section>
</div>
<!--内嵌框架-->
<section>
    <iframe src="shouye.html" name="myiframe" scrolling="yes"> </iframe>
</section>



>>>>>>> 0d0198c323c18c2cdcef48a971c3e1f4abc33d93
</body>
</html>