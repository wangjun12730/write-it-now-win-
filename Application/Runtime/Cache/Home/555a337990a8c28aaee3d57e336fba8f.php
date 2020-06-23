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
        .section:hover{
            background-color: #F2F2F2;
        }

    </style>
</head>
<body style="background-color: #F2F2F2">
<div class="container" style="background-color: white;margin-top: 100px;padding-bottom: 30px;padding-top: 20px">
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
<div class="container" style="background-color: white;margin-top: 15px;padding-top: 15px">
    <div class="row" style="margin-left: 5px">
        <div class="col-sm-1" onclick="location='/write-it-now-win-/Home/User/index'">
            <h4 class="hj1" style="color:red">栏目 <?php echo (session('story_count')); ?></h4>
            <div class="dliv" style="width:70px;border-bottom: 3px solid red;margin-left: -8px;margin-top: 15px"></div>
        </div>
        <div class="col-sm-1" >
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
    <button class="btn btn-danger" onclick="location='/write-it-now-win-/Home/StoryShow/authourStoryShow/s_id/<?php echo ($story["id"]); ?>'">目录列表</button>
    <button class="btn btn-primary" onclick="location='/write-it-now-win-/Home/StoryShow/createSection/s_id/<?php echo ($story["id"]); ?>'">新建章节</button>
    <br />
    <br />
    <br />
    <div classs="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <img src="/write-it-now-win-/Public/<?php echo ($story["picture"]); ?>" style="width: 150px;height: 150px"/>
                </div>
                <div class="col-sm-8 col-xs-12" style="padding-top: 20px">
                    <h4 style="display: inline"><?php echo ($story["name"]); ?></h4><span style="border: 1px solid red;margin-left: 5px;color: #8B6914"><?php echo ($story["tag"]); ?></span>
                    <span style="border: 1px solid red;margin-left: 5px;color: #8B6914">
                        <?php if($story["is_doing"] == 0): ?>连载中
                            <?php else: ?>
                                已完结<?php endif; ?>
                    </span>
                    <br />
                    <br />
                    <p  style="color:#858585;">简介：<?php echo ($story["info"]); ?></p>
                </div>
            </div>
        </div>
        <hr />
        <div class="container">
            <div class="row" style="margin-top: 20px;margin-bottom: 50px">
                <?php if($empty==1): ?><h1>您现在还没有章节</h1>
                    <?php else: ?>
                    <?php if(is_array($result)): foreach($result as $key=>$v): ?><div class="col-sm-4 col-xs-6 text-center section" style="margin-bottom: 30px">
                            <a class="btn btn-danger" onclick="location='/write-it-now-win-/Home/StoryShow/authourStoryDetail/section_id/<?php echo ($v["id"]); ?>'"><?php echo ($v["section"]); ?> <?php echo ($v["title"]); ?></a>
                        </div><?php endforeach; endif; endif; ?>
            </div>
        </div>
    </div>

</div>
<!--头像 Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form  class="form-horizontal" method="post" action="change_picture_ok.php" enctype="multipart/form-data">
                <div class="modal-header" style="background:#6495ED">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel1" align="left">更换头像</h5>
                </div>
                <div class="modal-body" align="left">
                    <div style="height:40%;background-image:url(/write-it-now-win-/Public/image/1.jpg);background-repeat: no-repeat;background-size: cover;" >

                    </div>
                    <div style="height:20%">
                        <div class="form-group form-group-sm" style="margin-top:20px;">
                            <label for="file" class="col-sm-3 control-label" >上传</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer" style="background:#C1FFC1;margin-bottom:-30px;">
                    <input type="hidden" name="picture_path" value="<?php echo $sql[0][1];?>">
                    <button type="submit" class="btn btn-primary">保存</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"  >关闭</button>
                </div>

            </form>
        </div>
    </div>
</div>


<!--修改资料模态框 Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" method="post" action="user_data_change.php">
                <div class="modal-header" style="background:#6495ED">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel">编辑资料</h5>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="col-sm-2 col-xs-2"></div>
                        <div class="col-sm-8 col-xs-8">
                            <div class="form-group">
                                <label for="user" class="col-sm-2 control-label">昵称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user" name="user" value="<?php echo $sql[0][12];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sex" class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="sex" name="sex">
                                        <option <?php if($sql[0][4]=="男") echo "selected";?>>男</option>
                                        <option <?php if($sql[0][4]=="女") echo "selected";?>>女</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="yeas" class="col-sm-2 control-label">年龄</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="years" name="years" value="<?php echo $sql[0][3];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="xueyuan" class="col-sm-2 control-label">学院</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="xueyuan" name="xueyuan" value="<?php echo $sql[0][6];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="zhuanye" class="col-sm-2 control-label">专业</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="zhuanye" name="zhuanye" value="<?php echo $sql[0][7];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="grade" class="col-sm-2 control-label">年级</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="grade" name="grade" value="<?php echo $sql[0][5];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tel" class="col-sm-2 control-label">电话</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="tel" name="tel" value="<?php echo $sql[0][8];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="youxiang" class="col-sm-2 control-label">邮箱</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="youxiang" name="youxiang" value="<?php echo $sql[0][9];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gexingqianming" class="col-sm-2 control-label">个性签名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="gexingqianming" name="gexingqianming" value="<?php echo $sql[0][10];?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-2"></div>
                    </div>
                </div>
                <div class="modal-footer" style="background:#B0E0E6;margin-bottom:-30px;">
                    <button type="submit" class="btn btn-primary">保存</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--新建栏目 Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="form-horizontal" method="post" action="/write-it-now-win-/Home/StoryShow/createStory">
            <div class="modal-content">
                <div class="modal-header" style="background:#6495ED">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel3">新建栏目</h5>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="col-sm-2 col-xs-2"></div>
                        <div class="col-sm-8 col-xs-8">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">栏目名称</label>
                                <div class="col-sm-10">
                                    <input type="text" id="name" class="form-control" name="name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tag" class="col-sm-2 control-label">标签</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="tag" name="tag">
                                        <option selected>武侠</option>
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
                            </div>
                            <div class="form-group">
                                <label for="info" class="col-sm-2 control-label">简介</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="info" name="info" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="picture" class="col-sm-2 control-label">图片</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="picture" name="picture" >
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-2 col-xs-2"></div>
                    </div>

                </div>
                <div class="modal-footer" style="background:#B0E0E6;margin-bottom:-30px;">
                    <input type="hidden" name="user_name" value="王俊" />
                    <input type="hidden" name="user_id" value="1000" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".hj1").hover(function(){
            $(this).next().addClass("bhr");
            $(this).addClass("hj")
        },function(){
            $(this).next().removeClass("bhr");
            $(this).removeClass("hj");
        });
    });
</script>
</body>
</html>