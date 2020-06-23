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
        <div class="item"><div class="title1" style="color:#09C;font-weight:bold;">审核列表</div>

<div class="check">

    <div  style="margin-bottom: 30px;margin-top: 20px" >
        <a class="btn btn-warning" >未审核</a><a  href="/write-it-now-win-/Admin/Check/isCheckList" class="btn btn-primary" style="margin-left: 10px">已审核</a>
    </div>
    <?php if($empty==1): ?><h3>现在还没有需要审核的信息</h3>
    <?php else: ?>
        <table class="table table-striped table-hover table-condensed">
             <tr>
                <th>id</th>
                <th>小说名</th>
                <th>作者</th>
                <th>章节</th>
                 <th>标题</th>
                <th>内容</th>
                <th>时间</th>
                <th>类型</th>
                 <th>审核</th>
             </tr>
            <?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
                     <td><?php echo ($v["id"]); ?></td>
                     <td><?php echo ($v["story_name"]); ?></td>
                     <td><?php echo ($v["user_name"]); ?></td>
                     <td><?php echo ($v["section"]); ?></td>
                     <td><?php echo ($v["title"]); ?></td>
                     <td><div   data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php echo ($v["content"]); ?>" title="审核内容" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;width:145px;">
                         <?php echo ($v["content"]); ?>
                     </div></td>
                     <td><?php echo ($v["time"]); ?></td>
                     <td><?php echo ($v["type"]); ?></td>
                     <td>
                         <div class="btn-group">
                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 审核 <span class="caret"></span>
                             </button>
                             <ul class="dropdown-menu">
                                 <li >
                                     <a id="ok" href="/write-it-now-win-/Admin/Check/checkType/type/<?php echo ($v["type"]); ?>/c_id/<?php echo ($v["id"]); ?>"><?php echo ($v["type"]); ?>通过</a>
                                 </li>
                                 <li><a href="/write-it-now-win-/Admin/Check/checkNot/c_id/<?php echo ($v["id"]); ?>">拒绝</a></li>
                             </ul>
                         </div>
                     </td>
                 </tr><?php endforeach; endif; ?>
        </table><?php endif; ?>
</div>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script></div>
    </div>
</div>
<script>
    $("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>


</body>
</html>