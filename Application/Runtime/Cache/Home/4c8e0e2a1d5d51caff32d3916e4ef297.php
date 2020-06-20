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
            <li><a href="#new">最新</a></li>
            <li><a href="#">都市</a></li>
            <li><a href="#">言情</a></li>
            <li><a href="#">武侠</a></li>
            <li><a href="#">玄幻</a></li>
            <li><a href="#">古风</a></li>
            <li><a href="#">穿越</a></li>
            <li><a href="#">恐怖</a></li>
            <li><a href="#">科技</a></li>
            <li><a href="#">推理</a></li>
            <li><a href="#">悬疑</a></li>
            <li><a href="#">耽美</a></li>
            <li><a href="#">历史</a></li>
            <li><a href="#">军事</a></li>
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
<div id="column">
    <div class="col" id="new"><div class="colname"><aa>最新发表</aa></div><hr/>
        <!--<?php if(is_array($new)): foreach($new as $key=>$v): ?><ul class="newbook">
                <li><a href="#1" target="_blank"><?php if(empty($v["thumb"])): ?><img scr="#"><?php else: ?><img src="/win/write-it-now-win-/Public/image/preview.jpg"><?php endif; ?></a></li>
                <li class="bookname"><a href="#1" target="_blank"><?php echo ($v["story_name"]); ?></a> </li>
                <li class="content"><?php echo ($v["content"]); ?></li>
            </ul><?php endforeach; endif; ?>-->
        <div class="bookshelf" name="new" item="v">
            <ul>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
                <bb><a href="#">少儿</a><i>(235) </i></bb>
                <bb><a href="#">生活</a><i>(7809) </i></bb>
                <bb><a href="#">社科</a><i>(876) </i></bb>
                <bb><a href="#">管理</a><i>(1234) </i></bb>
                <bb><a href="#">计算机</a><i>(2434) </i></bb>
                <bb><a href="#">教育</a><i>(234) </i></bb>
                <bb><a href="#">工具书</a><i>(7665) </i></bb>
                <bb><a href="#">引进版</a><i>(4557) </i></bb>
                <bb><a href="#">其他类</a><i>(4543) </i></bb>
                <bb><a href="#">小说</a><i>(1110) </i></bb>
                <bb><a href="#">文艺</a><i>(230) </i></bb>
                <bb><a href="#">青春</a><i>(1430) </i></bb>
           



            </ul>
            <div id="divBot">
                <span><a href="#">更多</a></span><i class="fa fa-sort-up" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="col" id="city"><div class="colname"><aa>都市</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="romantic"><div class="colname"><aa>言情</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="martial"><div class="colname"><aa>武侠</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="fantasy"><div class="colname"><aa>玄幻</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="ancient"><div class="colname"><aa>古风</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="through"><div class="colname"><aa>穿越</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="terror"><div class="colname"><aa>恐怖</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="science"><div class="colname"><aa>科技</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="inference"><div class="colname"><aa>推理</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="suspense"><div class="colname"><aa>悬疑</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="BL"><div class="colname"><aa>耽美</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="history"><div class="colname"><aa>历史</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="military"><div class="colname"><aa>军事</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <div class="col" id="end"><div class="colname"><aa>完结</aa></div><hr>
        <div class="bookshelf"></div>
    </div>
    <script type="text/javascript" src="/win/write-it-now-win-/Public/js/jquery-1.12.4.js"></script>
    <script type="text/javascript">
        $(function () {
            $('bb:gt(3)').not(':last').hide();
            $('#divBot span>a').click(function () {

                if ($('#divBot span>a').text() == '更多') {
                    $('#divBot span>a').text('收回');
                    $('bb:gt(3)').show(2000);
                } else {
                    $('#divBot span>a').text('更多');
                    $('bb:gt(3)').hide(2000);
                }
            })
        })
    </script>
</div>
</body>
</html>