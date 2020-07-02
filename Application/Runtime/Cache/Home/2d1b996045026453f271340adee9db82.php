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
                <li><a href="#">讨论区</a></li>
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
<!--标签布局-->
<style>
                .tag{
                    min-width: 1200px;
                }
                .search{
                    min-width: 1200px;
                    background: url("/write-it-now-win-/Public/image/background/<?php echo ($bg); ?>") no-repeat;
                    background-size: 100% 100%;
                    height: 300px;
                    margin-top: -20px;
                }
                #searching{
                    height: 100%;
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
                .bookinfo h3{
                    font-size: 16px;
                }
                /*鼠标悬浮图片缩放*/
                .img:hover{
                    -ms-transform:scale(1.1,1.2); /* IE 9 */
                    -webkit-transform: scale(1.1,1.2); /* Safari */
                    transform: scale(1.1,1.2); /* 标准语法 */
                }
</style>
<!--tag-->
<div class="search">
    <div id="searching"class="text-center">
        <div>
            <form >
                <input type="search" name="search-input" class="search-input" placeholder="Search">
                <a class="search-btn" target="_blank"><b>搜索</b>
                </a>
            </form>
        </div>
    </div>
</div>
<div class="tag container">
    <div class="newbook">
        <h3><?php echo ($tag); ?>&nbsp;·&nbsp;新书推荐</h3>
        <hr style="border-bottom:1px solid black "/>
        <div class="row" style="margin-top: 30px">
            <?php if(is_array($newbook)): foreach($newbook as $key=>$v): ?><div class="col-sm-5 col-md-4 col-xs-12" style="padding-bottom: 30px ">
                    <div class="row">
                        <div class="col-sm-3" style="overflow: hidden">
                            <a href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><img src="/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" class="img" alt="加载图片失败" style="width: 72px;height: 96px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);"></a>
                        </div>
                        <div class="col-sm-9 bookinfo">
                            <h3><a style="color: black" href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></h3>
                            <p style="font-size: 12px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis">简介：<?php echo ($v["info"]); ?></p>
                            <p style="font-size: 12px;"><a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["user_id"]); ?>"><span class="glyphicon glyphicon-user" style="color: #a6a6a6"><?php echo ($v["user_name"]); ?></span></a><span style="color: #bf2c24;border: 1px solid #df9591;float: right;"><?php echo ($v["font_count"]); ?>字</span><span style="color: #a6a6a6;border: 1px solid #bfbfbf;float: right;margin-right: 10px"><?php echo ($v["tag"]); ?></span><p>
                        </div>
                    </div>
                </div><?php endforeach; endif; ?>
        </div>
    </div>

    <div class="popular-serial-novel">
        <h3><?php echo ($tag); ?>&nbsp;·&nbsp;人气书籍</h3>
        <hr style="border-bottom:1px solid black "/>
        <div class="row">
            <?php if(is_array($hot_book)): foreach($hot_book as $key=>$v): ?><div class="col-sm-5 col-md-4 col-xs-12" style="padding-bottom: 30px ">
                    <div class="row">
                        <div class="col-sm-3" style="overflow: hidden">
                            <a href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><img src="/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" class="img" alt="加载图片失败" style="width: 72px;height: 96px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);"></a>
                        </div>
                        <div class="col-sm-9 bookinfo">
                            <h3><a style="color: black" href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></h3>
                            <p style="font-size: 12px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis">简介：<?php echo ($v["info"]); ?></p>
                            <p style="font-size: 12px;"><a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["user_id"]); ?>"><span class="glyphicon glyphicon-user" style="color: #a6a6a6"><?php echo ($v["user_name"]); ?></span></a><span style="color: #bf2c24;border: 1px solid #df9591;float: right;"><?php echo ($v["font_count"]); ?>字</span><span style="color: #a6a6a6;border: 1px solid #bfbfbf;float: right;margin-right: 10px"><?php echo ($v["tag"]); ?></span><p>
                        </div>
                    </div>
                </div><?php endforeach; endif; ?>
        </div>
    </div>

    <div class="ending-book">
        <h3><?php echo ($tag); ?>&nbsp;·&nbsp;完本特辑</h3>
        <hr style="border-bottom:1px solid black "/>
        <div class="row">
           <?php if(is_array($ending_book)): foreach($ending_book as $key=>$v): ?><div class="col-sm-5 col-md-4 col-xs-12" style="padding-bottom: 30px ">
                   <div class="row">
                       <div class="col-sm-3" style="overflow: hidden">
                           <a href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><img src="/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" class="img" alt="加载图片失败" style="width: 72px;height: 96px;box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);"></a>
                       </div>
                       <div class="col-sm-9 bookinfo">
                           <h3><a style="color: black" href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></h3>
                           <p style="font-size: 12px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis">简介：<?php echo ($v["info"]); ?></p>
                           <p style="font-size: 12px;"><a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["user_id"]); ?>"><span class="glyphicon glyphicon-user" style="color: #a6a6a6"><?php echo ($v["user_name"]); ?></span></a><span style="color: #bf2c24;border: 1px solid #df9591;float: right;"><?php echo ($v["font_count"]); ?>字</span><span style="color: #a6a6a6;border: 1px solid #bfbfbf;float: right;margin-right: 10px"><?php echo ($v["tag"]); ?></span><p>
                       </div>
                   </div>
               </div><?php endforeach; endif; ?>
        </div>
    </div>
</div>

<script>
    //当主页面搜索链接被点击时执行
    $(".search-btn").click(function () {
        if($('.search-input').val()== ''){
            $(this).attr("href","/write-it-now-win-/Home/Index/search/kw/"+$('.search-input').attr('placeholder'));
        }else {
            $(this).attr("href","/write-it-now-win-/Home/Index/search/kw/"+$('.search-input').val());
        }

    });
</script>
</div>
<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>