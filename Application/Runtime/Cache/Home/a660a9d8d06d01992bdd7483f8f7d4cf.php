<?php if (!defined('THINK_PATH')) exit();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WIN网站——个人中心</title>
    <link href="/write-it-now-win-/Public/css/member.css" rel="stylesheet" />
    <script src="/write-it-now-win-/Public/js/jquery.min.js"></script>
    <link href="/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/write-it-now-win-/Public/js/jquery-3.4.1.min.js"></script>
    <script src="/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
        .bhr{
            width:50px;
            border-bottom: 3px solid red;
            margin-left: -8px;
            margin-top: 15px;
        }
        .hj{
            color: red;
        }
        .bs:hover{
            border: 1px solid palevioletred;
        }

    </style>
</head>
<body style="background-color: #F2F2F2">
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
                    <li><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-edit" style="color: #ebccd1;"></span>&nbsp;&nbsp;创作中心</button></li>
                    <li><a href="#"><span title="收藏" class="glyphicon glyphicon-star" style="color: #ebccd1;font-size: 18px;margin-right: -10px"></span></a></li>
                    <li><a href="#"><span title="消息" class="glyphicon glyphicon-bell" style="color: #ebccd1;font-size: 18px;margin-right: 10px"></span></a></li>
                    <li class="dropdown" style="margin-right: 50px">
                        <a href="#" class="dropdown-toggle" target="_blank" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: inline-block;padding: 0;margin-top: 5px"><img src="/write-it-now-win-/Public/<?php echo (session('user_picture')); ?>" class="img-circle" style="height: 40px;width: 40px" /></a>
                        <ul class="dropdown-menu" style="color: #333">
                            <li><a href="#" style="margin-left: 0"><span class="glyphicon glyphicon-heart" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的关注</a></li>
                            <li><a href="#" style="margin-left: 0"><span class="glyphicon glyphicon-star" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的收藏</a></li>
                            <li><a href="/write-it-now-win-/Home/User/index" style="margin-left: 0"><span class="glyphicon glyphicon-user" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 个人中心</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" style="margin-left: 0"><span class="glyphicon glyphicon-book" style="color: #ebccd1"></span>&nbsp; &nbsp;&nbsp;我的小说</a></li>
                            <li><a href="#" style="margin-left: 0"><span class="glyphicon glyphicon-pencil" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 我的说说</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" style="margin-left: 0"><span class="glyphicon glyphicon-question-sign" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 帮助</a></li>
                            <li><a href="/write-it-now-win-/Home/User/logout" style="margin-left: 0"><span class="glyphicon glyphicon-log-out" style="color: #ebccd1"></span>&nbsp;&nbsp;&nbsp; 退出</a></li>
                        </ul>
                    </li><?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container" style="background-color: white;margin-top: 100px;padding-bottom: 30px;padding-top: 20px;">
    <div class="row">
        <div class="col-sm-2 col-xs-5">
            <!--创建模态框	 -->
            <a href="#" data-toggle="modal" data-target="#myModal1">
                <img src="/write-it-now-win-/Public/<?php echo ($user["picture"]); ?>" alt="..." class="img-circle" style="width: 100px">
            </a>
            <br />
            <br />
            <a href="#" data-toggle="modal" data-target="#myModal" style="display: block;margin-left: 20px" >个人资料设置</a>
        </div>
        <div class="col-sm-8 col-xs-10" style="padding-top: 20px">
            <div class="col-sm-5">
                <h3><?php echo ($user["name"]); ?></h3>
                <br />

                <p><?php echo ($user["per_signature"]); ?></p>
            </div>
            <div class="col-sm-5" style="padding-top: 25px">
                <p ><span style="color:#00CDCD">电话: </span ><?php echo ($user["tel"]); ?></p>
                <p ><span style="color:#00CDCD">邮箱: </span><?php echo ($user["email"]); ?></p>
                <p ><span style="color:#00CDCD">个性签名: </span><?php echo ($user["per_signature"]); ?> </p>
                <p></p>
            </div>
        </div>
        <div class="col-sm-2 col-xs-2">

            <a href="/write-it-now-win-/Home/Index/index" style="float: right;margin-right: 15px">首页</a>
            <div class="dropdown" style="float: right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">设置<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#myModal">修改资料</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal4">修改密码</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container" style="background-color: white;margin-top: 15px;padding-top: 15px;min-height: 600px;margin-bottom: 30px">
    <div class="row" style="margin-left: 5px">
        <div class="col-sm-1" onclick="location='/write-it-now-win-/Home/User/index'" >
            <h4 class="hj1" style="color:red">栏目 <?php echo (session('story_count')); ?></h4>
            <div class="dliv" style="width:70px;border-bottom: 3px solid red;margin-left: -8px;margin-top: 15px"></div>
        </div>
        <div class="col-sm-1">
            <h4 class="hj1">说说</h4>
            <div class="dliv"></div>
        </div>
        <div class="col-sm-1">
            <h4 class="hj1">收藏</h4>
            <div class="dliv"></div>
        </div>
        <div class="col-sm-1">
            <h4 class="hj1">关注</h4>
            <div class="dliv"></div>
        </div>
        <div class="col-sm-1">
            <h4 class="hj1">专栏</h4>
            <div class="dliv"></div>
        </div>
        <div class="col-sm-1" onclick="location='/write-it-now-win-/Home/Checking/checkingList'">
            <h4 class="hj1">审核 <?php echo (session('check')); ?></h4>
            <div class="dliv" style="width:70px"></div>
        </div>
        <div class="col-sm-1" onclick="location='/write-it-now-win-/Home/Message/messageList'">
            <h4 class="hj1">消息 <?php echo (session('messages')); ?></h4>
            <div class="dliv" style="width:70px"></div>
        </div>
    </div>
    <hr style="margin-top: 0px" />
    <div>
        <span style="color:blue;margin-left:5px;margin-right: 20px">栏目 <?php echo (session('story_count')); ?></span> | <a  data-toggle="modal" data-target="#myModal2" >新建栏目</a>
    </div>
    <br />
    <button class="btn btn-danger" >修改栏目</button>
    <br />
    <br />
    <br />
    <div class="container">
        <div class="col-sm-6">
        <img src="/write-it-now-win-/Public/<?php echo ($res["picture"]); ?>" style="width: 200px;height: 200px;margin-bottom: 20px">
            <form  method="post" action="/write-it-now-win-/Home/User/subAlterStory" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="picture">修改主题图片</label>
                    <input type="file" class="form-control" id="picture" name="file" placeholder="picture">
                </div>
                <div class="form-group">
                    <label for="name">栏目名称</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php echo ($res["name"]); ?>">
                </div>
                <div class="form-group">
                    <label for="info">简介</label>
                    <textarea class="form-control" rows="5" id="info" name="info"><?php echo ($res["info"]); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="tag">标签</label>
                    <select class="form-control" id="tag" name="tag">
                        <option >武侠</option>
                        <option >恐怖</option>
                        <option >言情</option>
                        <option >推理</option>
                        <option >悬疑</option>
                        <option >历史</option>
                        <option >军事</option>
                        <option >科幻</option>
                        <option >网游</option>
                        <option >玄幻</option>
                        <option >逸体</option>
                        <option >耽美</option>
                        <option >穿越</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="is_doing"></label>
                    <select class="form-control" id="is_doing" name="is_doing">
                        <option >完结</option>
                        <option selected>连载</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo ($res["id"]); ?>">
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
        </div>
    </div>
</div>

<!--footer-->
<footer style="min-width:1200px;height: 200px;padding-top: 50px;background-color: #f8f8f8;text-align: center"><h3>write it now!</h3>
    <h3>win</h3></footer>
</body>
</html>