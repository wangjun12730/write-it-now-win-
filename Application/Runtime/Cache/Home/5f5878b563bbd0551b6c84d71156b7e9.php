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
            <li class="z"><a href="Index/shouye.html" target="myiframe">首页</a></li>
            <li class="line">|</li>
            <li class="z"><a href="/win/write-it-now-win-/Home/Iframe/discuss_list" target="myiframe">讨论</a></li>
        </ul>
    </section>
</div>
<!--内嵌框架-->
<section>
    <iframe src="Index/shouye.html" name="myiframe" scrolling="yes"> </iframe>
</section>


<!--footer-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分类导航</title>
</head>
<body>
<div id="slide">
    <?php if(is_array($cate)): $i = 0; $__LIST__ = array_slice($cate,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><div class="cate">
        <div class="cate1 left"><a href="/win/write-it-now-win-/Home/Index/find/cid/<?php echo ($v1["cid"]); ?>"><?php echo ($v1["cname"]); ?></a> </div>
        <div class="subitem" style="display: none;">
            <?php if(isset($v1["child"])): if(is_array($v1["child"])): $i = 0; $__LIST__ = array_slice($v1["child"],0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><dl><dt><a href="/win/write-it-now-win-/Home/Index/find/cid/<?php echo ($v2["cid"]); ?>"><?php echo ($v2["cname"]); ?></a> </dt><dd>
                    <?php if(isset($v2["child"])): if(is_array($v2["child"])): $i = 0; $__LIST__ = array_slice($v2["child"],0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>|<a href="/win/write-it-now-win-/Home/Index/find/cid/<?php echo ($v3["cid"]); ?>"><?php echo ($v3["cname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </dd></dl><?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="clear"></div>
</div>
<div id="best">
    <div class="best_img left">推荐商品</div>
    <?php if(is_array($best)): foreach($best as $key=>$v): ?><ul class="item left">
            <li><a href="/win/write-it-now-win-/Home/Index/goods/id<?php echo ($v["gid"]); ?>" target="_blank">
                <?php if(empty($v["thumb"])): ?><img src="/win/write-it-now-win-/Public/image/preview.jpg">
                    <?php else: ?><img src="/win/write-it-now-win-/Public/uploads/thumb/<?php echo ($v["thumb"]); ?>"><?php endif; ?>
            </a> </li>
            <li class="goods"><a href="/win/write-it-now-win-/Home/Index/goods/id/<?php echo ($v["gid"]); ?>" target="_blank"><?php echo ($v["gname"]); ?></a> </li>
            <li class="price">￥<?php echo ($v["price"]); ?></li>
        </ul><?php endforeach; endif; ?>
    <div class="clear"></div>
</div>
</body>
</html>

<footer><p>write it now!</p>
    <p>win</p></footer>
</body>
</html>