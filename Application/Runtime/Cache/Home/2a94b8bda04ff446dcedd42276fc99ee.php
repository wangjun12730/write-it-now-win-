<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>write it now!</title>
    <link href="/win/write-it-now-win-/Public/css/layout.css" rel="stylesheet" />
    <link rel="stylesheet" href="/win/write-it-now-win-/Public/css/font-awesome.min.css">
</head>
<body>
<!--顶部-->
<div id="top">
    <div class="top_nav">
        <ul class="left">
            <?php if(isset($mid)): ?><li><a href="/win/write-it-now-win-/Home/User/index"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i> Hello，<?php echo ($mname); ?>！[<a href="/win/write-it-now-win-/Home/User/logout">退出</a>]<li>
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
            <li class="z"><a href="/win/write-it-now-win-/Home/Index/shouye" target="myiframe">首页</a></li>
            <li class="line">|</li>
            <li class="z"><a href="/win/write-it-now-win-/Home/Iframe/discuss_list" target="myiframe">讨论</a></li>
        </ul>
    </section>
</div>
<!--内嵌框架-->
<section>
    <iframe src="/win/write-it-now-win-/Home/Index/shouye" name="myiframe" scrolling="yes"> </iframe>
</section>


<!--footer-->


<footer><p>write it now!</p>
    <p>win</p></footer>
</body>
</html>