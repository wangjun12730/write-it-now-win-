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
<style>
    .info{
        min-width: 1000px;
        width: 1000px;
    }
    .classify{
        color: #a6a6a6;
    }
    .classify a{
        color: #a6a6a6;
    }
    .story-info{
        margin-top: 30px;
        border: 1px solid  #a6a6a6;
        border-bottom: 0 ;
        padding: 20px 20px 10px;
    }
    .book-img{
        overflow: hidden;
    }
    .book-img img{
        width: 144px;
        height: 192px;
        box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 6px 0 rgba(0, 0, 0, 0.19);
    }
    .book-img img:hover{
        -ms-transform:scale(1.1,1.1); /* IE 9 */
        -webkit-transform: scale(1.1,1.1); /* Safari */
        transform: scale(1.1,1.1); /* 标准语法 */
    }
    .book-info{
        margin-left: -15px;
    }
    .book-name{
        display: inline-block;
        margin-top: 5px;
    }
    .author{
        margin-left: 50px;
        font-size: 16px;
        color: #262626;
    }
    .author a{
        color: #262626;
    }
    .author a:hover{
        text-decoration: none;
        color: #2aabd2;
    }
    .tag button{
        border-radius: 15px;
    }
    .tag .btn2:hover{
        background-color: white;
    }
    .intro{
        color: #262626;
        font-size: 16px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .count{
        font-size: 20px;
    }
    .update p{
        color: #a6a6a6;
    }
    .update .title{
        color: #262626;
    }
    .update .title:hover{
        text-decoration: none;
        color: #2e6da4;
    }
    .update{
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .section-content{
        font-size: 12px;
        width: 600px;
        white-space: nowrap;
        color: #a6a6a6;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .section-content span{
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .recom{
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .recom a{
        color: #333;
        display: block;
    }
    .recom a:hover{
        color: #c8e5bc;
    }
    .recom img{
        width: 135px;
        height: 178px;
        display: block;
    }
    .re-book-name{
        font-size: 16px;
        margin-top: 15px;
        display: inline-block;
        width: 135px;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .comments{
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

<div class="container info">
    <h4 class="classify"><a href="/write-it-now-win-/Home/Index/index">首页</a> <span class="glyphicon glyphicon-menu-right"></span> <a href="/write-it-now-win-/Home/Tag/tag/type/<?php echo ($res["tag"]); ?>" target="_blank"><?php echo ($res["tag"]); ?>频道</a> <span class="glyphicon glyphicon-menu-right"></span> <a><?php echo ($res["name"]); ?></a></h4>
    <div class="story-info">
        <div class="row">
            <div class="col-sm-2 ">
                <div class="book-img">
                    <a>
                        <img src="/write-it-now-win-/Public/<?php echo ($res["picture"]); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="book-info">
                    <h3 class="book-name"><?php echo ($res["name"]); ?></h3>
                    <span class="author"><a><?php echo ($res["user_name"]); ?></a> &nbsp;&nbsp;著</span>
                    <p class="tag">
                        <button class="btn btn-default btn1">
                            <?php echo ($res["tag"]); ?>
                        </button>
                        <button class="btn btn-default btn2">
                            <?php if($res["is_doing"] = 0): ?>连载
                             <?php else: ?>
                                完结<?php endif; ?>
                        </button>
                    </p>
                    <p class="intro"><?php echo ($res["info"]); ?></p>
                    <p class="count"><b><?php echo ($res["font_count"]); ?></b> <span>字</span></p>
                    <p>
                        <?php if($is_follow == 0): ?><form action="/write-it-now-win-/Home/Collection/collection" id="collection" method="post" target="_blank" style="display: inline-block">
                                <input type="hidden" value="<?php echo ($res["user_id"]); ?>" name="author_id"/>
                                <input type="hidden" value="<?php echo ($res["user_name"]); ?>" name="author_name"/>
                                <input type="hidden" value="<?php echo ($res["id"]); ?>" name="story_id"/>
                                <input type="hidden" value="<?php echo ($res["name"]); ?>" name="story_name"/>
                                <input type="hidden" value="<?php echo (session('user_id')); ?>" name="follower_id"/>
                                <input type="hidden" value="<?php echo (session('user_name')); ?>" name="follower_name"/>
                            </form>
                            <a class="btn btn-danger " href="/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($res["id"]); ?>">
                                开始阅读
                            </a>
                            <button class="btn btn-default " form="collection" type="submit" style="margin-left: 10px">
                                加入书架
                            </button>
                         <?php else: ?>
                            <form action="/write-it-now-win-/Home/Collection/uncollection" id="uncollection" method="post" >
                                <input type="hidden" value="<?php echo ($res["user_id"]); ?>" name="author_id"/>
                                <input type="hidden" value="<?php echo ($res["id"]); ?>" name="story_id"/>
                                <input type="hidden" value="<?php echo (session('user_id')); ?>" name="follower_id"/>
                            </form>
                            <a class="btn btn-danger " href="/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($res["id"]); ?>">
                                开始阅读
                            </a>
                            <button class="btn btn-default " type="submit" form="uncollection" style="margin-left: 10px">
                                取消收藏
                            </button><?php endif; ?>
                        <a href="/write-it-now-win-/Home/StoryShow/sectionList/s_id/<?php echo ($res["id"]); ?>" style="float: right;margin-top: 13px;color:#a6a6a6 "><span class="glyphicon glyphicon-list" style="margin-left: 100px;margin-top: 5px"></span> <span>全部目录</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br />
    <hr />
    <div class="update">
        <div class="row">
            <div class="col-sm-10">
            <p style="float: right"><?php echo ($newsection["update_time"]); ?></p>
            <p>最新章节</p>
                <p><a href="/write-it-now-win-/Home/StoryShow/storyInfo/s_id/<?php echo ($res["id"]); ?>/section/<?php echo ($newsection["id"]); ?>" class="title"><?php echo ($newsection["section"]); ?>&nbsp; <?php echo ($newsection["title"]); ?></a></p>
            </div>
        </div>
    </div>
    <hr />
    <div class="recom">
        <a href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($res["id"]); ?>" style="float: right;"><span class="glyphicon glyphicon-repeat" style="color: #a6a6a6"></span> 换一换</a>
        <h4>精彩推荐</h4>
        <hr />
        <div class="row">
            <?php if(is_array($recom)): foreach($recom as $key=>$v): ?><div class="col-sm-2">
                    <a href="/write-it-now-win-/Home/StoryShow/readerStoryShow/s_id/<?php echo ($v["id"]); ?>">
                        <img src="/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" />
                        <span class="re-book-name"><?php echo ($v["name"]); ?></span>
                    </a>
                </div><?php endforeach; endif; ?>
        </div>
    </div>

    <div class="comments">
        <button class="btn btn-danger" style="float: right" data-toggle="modal" data-target="#myModal">我要评论</button>
        <h4>评论</h4>
        <span style="margin-left: 30px">全部评论 <?php echo ($count_comments); ?></span>
        <hr style="margin-top: 10px"/>
        <div class="row">
            <ul>
                <?php if(is_array($comments)): foreach($comments as $key=>$v): ?><li>
                        <div class="row" style="margin-left: 0">
                            <div class="col-sm-1">
                                <div class="user_head">
                                    <a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["user_info"]["id"]); ?>"><img class="img-circle" src="/write-it-now-win-/Public/<?php echo ($v["user_info"]["picture"]); ?>"/></a>
                                </div>
                            </div>
                            <div class="col-sm-11" style="margin-left: -20px">
                                <a href="/write-it-now-win-/Home/Index/showAuthor/author/<?php echo ($v["user_info"]["id"]); ?>" class="reader-name"><b><?php echo ($v["user_info"]["name"]); ?></b></a>
                                <p class="reader-comment"><?php echo ($v[1]); ?></p>
                                <div class="other">
                                    <p class="time">
                                        <?php echo ($v[4]); ?>
                                    </p>
                                    <p class="fr">
                                        <span class="zan">
                                            <span class="glyphicon glyphicon-thumbs-up"></span>
                                            <span><?php echo ($v["like_count"]); ?></span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-left: -20px;width: 1015px">
                            <div class="col-sm-11 col-sm-offset-1">
                                <hr />
                            </div>
                        </div>
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>

<!-- 评论模态框 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">输入评论内容</h4>
            </div>
            <div class="modal-body">
                <form action="/write-it-now-win-/Home/Comments/book_comments" method="post" id="form1">
                    <input type="hidden" name="story_id" value="<?php echo ($res["id"]); ?>" />
                    <input type="hidden" name="author_id" value="<?php echo ($res["user_id"]); ?>" />
                    <textarea name="com_content" style="width: 100%;height: 200px" placeholder="请输入评论"></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary" form="form1">保存</button>
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