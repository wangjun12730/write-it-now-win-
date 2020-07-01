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
            <?php if(isset($mid)): ?><li><a href="/win/write-it-now-win-/Home/User/index"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>Hello，<?php echo ($mname); ?>！[<a href="/win/write-it-now-win-/Home/User/logout">退出</a>]<li>
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
            <li class="z"><a href="/win/write-it-now-win-/Home/Index/discuss_list" target="myiframe">讨论</a></li>
        </ul>
    </section>
</div>
<!--内嵌框架-->
<section>
    <iframe src="/win/write-it-now-win-/Home/Index/shouye" name="myiframe" scrolling="yes"> </iframe>
</section>


<!--footer-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>留言板</title>
<link rel="stylesheet" href="/win/write-it-now-win-/Public/css/home.css" />
</head>
<body>
<div id="box">
	<h1>留言板</h1>
	<div class="postbox">
		<form method="post" action="index.php?p=home&c=comment&a=add">
			<ul class="userbox">
				<li>名称：</li><li class="user_name" ><input type="text" name="poster" /></li>
				<li>邮箱：</li><li class="user_email" ><input type="text" name="mail" /></li>
				<li class="user_post"><input type="submit" class="post_button" value="发布" /></li>
			</ul>
			<textarea name="comment" required="required" >在此处输入留言</textarea>
		</form>
	</div>
	<div class="comment_info">
		留言数：<?php echo $num; ?>
	</div>
	<ul class="comments">
		<?php foreach($data as $v): ?>
		<li>
			<p>用户名：<?php echo $v['poster']; ?></p>
			<p><?php echo $v['comment']; ?></p>
			<p>发表日期：<?php echo $v['date']; ?></p>
			<?php if($v['reply']!==''): ?>
			<?php endIf; ?>
		</li>
		<?php endForeach; ?>
	</ul>
	<div class="comments_footer">
		<?php echo $pageControl; ?>
	</div>
</div>
</body>
</html>


<footer><p>write it now!</p>
    <p>win</p></footer>
</body>
</html>