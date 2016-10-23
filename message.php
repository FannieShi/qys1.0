<?php
	//定义一个常量，用来授权调用includes里面的文件
	define('IN_TG', true);
	//调用公共文件
	require dirname(__FILE__).'/includes/common.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=yes">
<title>七月上｜web前端技术</title>
<meta name="description" content="七月上，专注于web前端开发技术、致力于前端开发工具资源的个人原创博客。">
<meta name="keywords" content="七月上,FannieShi,Fannie Shi,web前端,留言板"> 
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="css/basic.css" />
<link rel="stylesheet" href="css/about.css" />
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/base.js"></script>
<!--[if lt IE 9]> 
<script>window.location.href='http://cdn.dmeng.net/upgrade-your-browser.html?referrer='+location.href;</script>
<![endif]-->
</head>
<body>
	<?php
		require ROOT_PATH.'includes/header.inc.php';
	?>	
	<section class="wrap">
		<div class="banner">
			<div class="text">
				<p>The best life is use of willing attitude, a happy-go-lucky life.</p>
				<p>最好的生活是用心甘情愿的态度,过随遇而安的生活。</p>
			</div>
		</div>	
	</section>
	<section class="wrap clearfix">
		<div class="main">
			<div class="bloglist">
				<h3 class="title">
					<span>留言板</span>
				</h3>
				<div class="aboutText" style="padding: 100px 20px; text-align: center; background: #fff;">
					功能尚未开放，敬请期待~
				</div>
			</div>
		</div>
		<aside class="sidebar">
			<!--个人信息-->
			<div class="qys">
				<div class="qys-img">
					<img src="imgs/img05.jpg" alt="" />
					<div class="about">
						<a href="about.php">关于七月上</a>
					</div>
				</div>
				<!--外链网易云音乐-->
				<div class="qys-music">
					<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=297 height=86 src="http://music.163.com/outchain/player?type=2&id=31445554&auto=0&height=66"></iframe>
				</div>
				<div class="qys-intro">
					<p class="icon1">姓名：七月上｜Fannie Shi</p>
					<p class="icon2">职业：Web前端开发</p>
					<p class="icon3">籍贯：湖北省-黄冈市</p>
					<p class="icon4">邮箱：me@fannieshi.com</p>
					<p class="icon5">GitHub：<a href="https://github.com/FannieShi">FannieShi</a></p> 	
				</div>
				<div class="qys-sina">
					<h3>
						<span>新浪微博</span>
					</h3>
					<iframe width="100%" height="90" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=350&fansRow=2&ptype=1&speed=0&skin=5&isTitle=0&noborder=0&isWeibo=0&isFans=0&uid=2647637494&verifier=72a768f2&colors=71c4a7,66a690,fff,eee,66a690&dpc=1"></iframe>
				</div>	
			</div>
			<?php
				require ROOT_PATH.'includes/footer.inc.php';
			?>
		</aside>
	</div>
</body>
</html>