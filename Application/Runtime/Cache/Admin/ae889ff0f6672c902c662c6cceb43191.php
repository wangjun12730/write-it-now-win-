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
        <div class="item">

<div class="title1" style="color:#09C;font-weight:bold;">用户管理</div>
<div class="showAllUser">
    <div  style="margin-bottom: 30px;margin-top: 20px" >
        <a class="btn btn-warning">用户列表</a>
        <a class="btn btn-primary" href="/write-it-now-win-/Admin/User/searchUser">搜索用户</a>
        <a class="btn btn-primary" href="/write-it-now-win-/Admin/User/showBanUser">被封禁用户</a>
    </div>

    <?php if($empty==1): ?><h3>现在还没有用户注测</h3>
    <?php else: ?>
        <table class="table table-striped table-hover table-condensed">
            <tr>
                <th>id</th>
                <th>头像</th>
                <th>姓名</th>
                <th>电话</th>
                <th>电子邮件</th>
                <th>个性签名</th>
                <th>是否被封禁</th>
                <th>封禁</th>
            </tr>
            <?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
                    <td class="u_id" style="padding-top: 20px "><?php echo ($v["id"]); ?></td>
                    <td><img src="/write-it-now-win-/Public/<?php echo ($v["picture"]); ?>" style="width: 50px;height: 50px"></td>
                    <td style="padding-top: 20px "><?php echo ($v["name"]); ?></td>
                    <td style="padding-top: 20px "><?php echo ($v["tel"]); ?></td>
                    <td style="padding-top: 20px "><?php echo ($v["email"]); ?></td>
                    <td style="padding-top: 20px "><div   data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php echo ($v["per_signature"]); ?>" title="个性签名" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;width:145px;">
                        <?php echo ($v["per_signature"]); ?>
                    </div></td>
                    <td style="padding-top: 20px "><?php echo ($v["is_ban"]); ?></td>
                    <td style="padding-top: 15px "><a  class="btn btn-primary ban"  data-toggle="modal" data-target="#myModal">封禁</a></td>
                </tr><?php endforeach; endif; ?>
        </table><?php endif; ?>
<!-- 封禁时间模态框 -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">请选择封禁时间</h4>
                </div>
                <form action="/write-it-now-win-/Admin/User/banUser" method="post">
                    <div class="modal-body">
                        <input type="datetime-local" name="ban_time" />
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="id" name="id" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary ">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
    $(document).ready(function () {
        $(".ban").click(function () {
            $("#id").val($(this).parent().parent().find("td").eq(0).text());
        });
    })
</script>
</div>
    </div>
</div>
<script>
    $("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>


</body>
</html>