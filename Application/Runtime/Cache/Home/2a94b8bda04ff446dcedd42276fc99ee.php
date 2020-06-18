<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
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
            <!--标签按钮（补充一下）-->
            <!--<li><a href="#">悬疑</a></li><li><a href="#">都市</a></li><li><a href="#">玄幻</a></li>-->
            <!--<li><a href="#">恐怖</a></li><li><a href="#">言情</a></li><li><a href="#">科技</a></li> -->

        </li><li class="curr"><a href="/win/write-it-now-win-/">首页</a></li>
            </li><li class="curr"><a href="/win/write-it-now-win-/">讨论区</a></li>
        </ul>
    </div>
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
    <div id="service">
        <ul><li>购物指南</li><li>配送方式</li><li>支付方式</li>
            <li>售后服务</li><li>特色服务</li><li>网络服务</li>
        </ul>
        <div class="clear"></div>
    </div>
    <div id="footer">WIN网站</div>
</div>
</body>
</html>