<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WIN后台</title>
    <link href="/write-it-now-win-/Public/css/admin.css" rel="stylesheet" />
    <script src="/write-it-now-win-/Public/js/jquery.min.js"></script>
    <link href="/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/write-it-now-win-/Public/js/jquery-3.4.1.min.js"></script>
    <script src="/write-it-now-win-/Public/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div id="top">
    <h1 class="left">WIN 后台管理系统</h1>
    <ul class="right">
        <li>欢迎您：<?php echo (session('admin_name')); ?></li>
        <li>|</li><li><a href="/write-it-now-win-/" target="_blank">前台首页</a></li>
        <li>|</li><li><a href="/write-it-now-win-/Admin/Login/logout">退出登录</a></li>
    </ul>
</div>
<div id="main">
    <div id="menu" class="left">
        <ul><li><a href="/write-it-now-win-/Admin/Index/index" id="Index_index">后台首页</a></li>
            <li><a href="/write-it-now-win-/Admin/Check/checkList" id="Check_index">审核 &nbsp;<span style="color: #2aabd2"><?php echo (session('checking')); ?></span></a> </li>
            <li><a href="/write-it-now-win-/Admin/User/showAll" id="Member_index">用户管理</a></li>
            <li><a href="/write-it-now-win-/Admin/Story/storyList" id="Story_index">栏目管理</a></li>
            <li><a href="/write-it-now-win-/Admin/Index/alterpwd" id="alter_pwd">修改密码</a></li>
        </ul>
    </div>
    <div id="content">
        <div class="item"><div class="title1" style="color:#09C;font-weight:bold;">栏目管理</div>

<div class="searchUser">
    <div  style="margin-bottom: 30px;margin-top: 20px" >
        <a class="btn btn-primary" href="/write-it-now-win-/Admin/Story/storyList">栏目列表</a>
        <a class="btn btn-warning">搜索栏目</a>
    </div>
    <form class="form-inline" method="post">
        <div class="form-group" >

            <div class="input-group">
                <input type="text" class="form-control" id="search" name="content" placeholder="Search">
                <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">搜索</button>
    </form>

    <div class="content">
        <?php if($search==0): ?><h3>请输入小说id或名字,并点击搜素按钮</h3><?php endif; ?>
        <?php if($empty==1): ?><h3>未搜索到相关栏目</h3>
            <?php elseif($search==1): ?>
            <table class="table table-striped table-hover table-condensed" style="margin-top: 30px">
                <tr>
                    <th>id</th>
                    <th>图片</th>
                    <th>栏目名</th>
                    <th>简介</th>
                    <th>标签</th>
                    <th>作者id</th>
                    <th>作者姓名</th>
                    <th>创建时间</th>
                </tr>
                <?php if($res1 != 0): ?><!-- 显示搜索用户id得到的数据-->
                    <tr>
                        <td style="padding-top: 20px"><?php echo ($res1["id"]); ?></td>
                        <td><img src="/write-it-now-win-/Public/<?php echo ($res1["picture"]); ?>" style="width: 50px;height: 50px"></td>
                        <td style="padding-top: 20px"><a href="/write-it-now-win-/Admin/Story/storyDetail/s_id/<?php echo ($res1["id"]); ?>"><?php echo ($res1["name"]); ?></a></td>
                        <td style="padding-top: 20px "><div   data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php echo ($res1["info"]); ?>" title="个性签名" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;width:145px;">
                            <?php echo ($res1["info"]); ?>
                        </div></td>
                        <td style="padding-top: 20px"><?php echo ($res1["tag"]); ?></td>
                        <td style="padding-top: 20px"><?php echo ($res1["user_id"]); ?></td>
                        <td style="padding-top: 20px"><?php echo ($res1["user_name"]); ?></td>
                        <td style="padding-top: 20px"><?php echo ($res1["create_time"]); ?></td>
                    </tr><?php endif; ?>
                <!-- 显示搜索用户名的到的数据-->
                <?php if(is_array($res2)): foreach($res2 as $key=>$v): ?><tr>
                        <td style="padding-top: 20px"><?php echo ($v["id"]); ?></td>
                        <td><img src="/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" style="width: 50px;height: 50px"></td>
                        <td style="padding-top: 20px"><a href="/write-it-now-win-/Admin/Story/storyDetail/s_id/<?php echo ($res1["id"]); ?>"><?php echo ($v["name"]); ?></a></td>
                        <td style="padding-top: 20px "><div   data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php echo ($v["info"]); ?>" title="个性签名" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;width:145px;">
                            <?php echo ($v["info"]); ?>
                        </div></td>
                        <td style="padding-top: 20px"><?php echo ($v["tag"]); ?></td>
                        <td style="padding-top: 20px"><?php echo ($v["user_id"]); ?></td>
                        <td style="padding-top: 20px"><?php echo ($v["user_name"]); ?></td>
                        <td style="padding-top: 20px"><?php echo ($v["create_time"]); ?></td>
                    </tr><?php endforeach; endif; ?>
            </table><?php endif; ?>
    </div>

</div></div>
    </div>
</div>
<script>
    $("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>


</body>
</html>