<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="/win/write-it-now-win-/Public/css/layout.css" rel="stylesheet" />
    <link rel="stylesheet" href="/win/write-it-now-win-/Public/css/font-awesome.min.css">
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
        <p id="search_hot">热门搜索：霸道总裁爱上我</p>
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
<!--最新-->
<div id="new">
    <div class=""></div>
    <?php if(is_array($new)): foreach($new as $key=>$v): ?><ul class="newbook">
            <li><a href="#1" target="_blank"><?php if(empty($v["thumb"])): ?><img scr="#"><?php else: ?><img src="/win/write-it-now-win-/Public/image/preview.jpg"><?php endif; ?></a></li>
            <li class="bookname"><a href="#1" target="_blank"><?php echo ($v["story_name"]); ?></a> </li>
            <li class="content"><?php echo ($v["content"]); ?></li>
        </ul><?php endforeach; endif; ?>
</div>

</body>
</html>