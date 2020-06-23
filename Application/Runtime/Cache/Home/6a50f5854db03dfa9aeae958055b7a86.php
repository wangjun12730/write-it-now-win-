<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
            <li class="z"><a href="/win/write-it-now-win-/Home/Iframe/shouye" target="myiframe">首页</a></li>
            <li class="line">|</li>
            <li class="z"><a href="/win/write-it-now-win-/Home/Iframe/discuss_list" target="myiframe">讨论</a></li>
        </ul>
    </section>
</div>
<!--内嵌框架-->
<section>
    <iframe src="shouye.html" name="myiframe" scrolling="yes"> </iframe>
</section>



</body>
</html>
<!--<!DOCTYPE html>
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
            标签按钮（补充一下）-->
            <!--<li><a href="#">悬疑</a></li><li><a href="#">都市</a></li><li><a href="#">玄幻</a></li>-->
            <!--<li><a href="#">恐怖</a></li><li><a href="#">言情</a></li><li><a href="#">科技</a></li>

        </li><li class="curr"><a href="/win/write-it-now-win-/">首页</a></li>
            </li><li class="curr"><a href="/win/write-it-now-win-/">讨论区</a></li>
        </ul>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../../../Public/css/layout.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../../Public/css/font-awesome.min.css">
</head>
<body>
<!--标签栏-->
<div id="box">
    <div id="search">
        <ul class="menu">
            <li><i type="button" class="fa fa-search" aria-hidden="true" name="popBox" onclick="popBox()"></i> </li>
            <li><a href="#">科幻</a></li>
            <li><a href="#">悬疑</a></li>
            <li><a href="#">完结</a></li>
        </ul>
        <p>
        <ul class="back">
            <li><a href="shouye.html"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a></li>
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
<!--footer-->
{__CONTENT__}

<footer><p>write it now!</p>
    <p>win</p></footer>

</body>
</html>
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
</head>
<body>
顶部
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

选项
<div id="option">
    <section class="center">
        <ul class="link">
            <li class="z"><a href="shouye.html" target="myiframe">首页</a></li>
            <li class="line">|</li>
            <li class="z"><a href="talk.html" target="myiframe">讨论</a></li>
        </ul>
    </section>
</div>
内嵌框架
<section>
    <iframe src="shouye.html" name="myiframe" scrolling="yes"> </iframe>
</section>



>>>>>>> 0d0198c323c18c2cdcef48a971c3e1f4abc33d93
</body>
</html>-->