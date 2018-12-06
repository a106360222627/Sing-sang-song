<!DOCTYPE HTML>

<html>

<head>
	<!-- crease -->
	<link rel="stylesheet" type="text/css" href="assets/css_crease/demo.css" />
	<link rel="stylesheet" type="text/css" href="assets/css_crease/style_common.css" />
	<link rel="stylesheet" type="text/css" href="assets/css_crease/style1.css" />
	<script type="text/javascript" src="assets/js_crease/modernizr.custom.69142.js"></script>
	<!-- dialog -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="assets/css_pro-inside/pro-inside.css" />

	<title>詳細專案</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
<?php

	//登入資料庫
	$server = '140.131.114.154';
	$user = 'root123';
	$pass = 'root';
	$database = 'sing sang song';
	header("Content-Type:text/html;charset=utf-8");
	$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) or die('Error with MySQL connection');
	
	
	$sql = "SELECT * FROM `program` where prog_id='50'";
	$query =$conn->query($sql);
	$query->setFetchMode(PDO::FETCH_ASSOC);//
	 foreach($query as $row)
	{
		 $row['prog_name'].'<br>';
		 $row['prog_intro'].'<br>';
		 $row['pay'].'<br>';
		 $row['price'].'<br>';
		 $row['prog_clasifi'].'<br>';
		$row['prog_upload'].'<br>';
	}
	$name=$row['prog_name'];
	$intro=$row['prog_intro'];
	$pay=unserialize($row['pay']);
	$price=$row['price'];
	//$pay=unserialize($row['pay']);
	$classifi=unserialize($row['prog_clasifi']);
	$file=$row['prog_upload'];
	
?>


	<!-- Header -->
	<header id="header" class="alt">
		<div class="logo">	<div class="logo" ><a href="index.php" style="font-family:Microsoft JhengHei;">登出  <a href="generic_login.php"> <span style="font-family:Microsoft JhengHei;">Ya-Wei，您好</span></a></a></div><span style="font-family:Microsoft JhengHei;">註冊</span>
			</a>
		</div>
		<a href="#menu">Menu</a>
	</header>


	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li>
				<a href="index_login.php">首頁</a>
			</li>
			<li>
				<a href="generic_login.php">會員資料</a>
			</li>
			<li>
				<a href="vocal_login.php">搜尋聲音</a>
			</li>
			<li>
				<a href="index.php">登出</a>
			</li>
		</ul>
	</nav>

	<!-- One -->
	<section id="One" class="wrapper style3">
		<div class="inner">
			<header class="align-center">
				<p>Do Ur Best</p>
				<h2 style="font-family:Microsoft JhengHei;">詳細專案</h2>
			</header>
		</div>
	</section>

	<!-- Main -->
	<div id="main" class="container">


		<!-- 音檔資料 -->
		<h2 id="elements"><?php echo $name;?></h2>
		<form>

			<!--------------- -聲音類型- ---------------- -->
			<div class="6u 12u$(small)">
				<h3 class="h">需求類型</h3>
				<div class="txt_in" style="font-size:18px;"><?php echo $classifi;?></div>
			</div>

		</form>

		<!--==================專案簡介=====================-->
		<h3>費用計算方式</h3>
			<div>
				<div class="txt_in" style="font-size:18px;"><?php echo $pay ;?>，<?php echo $price;?></div>
			</div>
<br>
		<!--==================上傳影片=====================-->
		<h3>介紹檔案：</h3>
		<img class="txt_in"src="showimg.php" style="width:500px; height:300px;">
		


		<!--==================專案簡介=====================-->
		<h3>專案簡介</h3>
		<p class="txt_in" style="font-size:18px;">
		<?php echo $intro;?></p>

		</form>

		</form>

	</div>

	</div>
	<div class="menber">
		<img src="images/57.png"style="width:180px;height: 180px;border-radius:40px">
		<label>成員</label>
		<label>Ya-Wei</label>
		<label>Xin-Rong</label>
		<label>Barack Obama</label>
	</div>

	<div style="clear:both;"></div><!--這是用來清除上方的浮動效果-->

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<ul class="icons">
				<li>
					<a href="https://twitter.com/?lang=zh-tw" class="icon fa-twitter">
						<span class="label">Twitter</span>
					</a>
				</li>
				<li>
					<a href="https://zh-tw.facebook.com/" class="icon fa-facebook">
						<span class="label">Facebook</span>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/" class="icon fa-instagram">
						<span class="label">Instagram</span>
					</a>
				</li>
				<li>
					<a href="https://mail.google.com/" class="icon fa-envelope-o">
						<span class="label">Email</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="copyright">
			&copy; NTUB IMD
		</div>
	</footer>

	<!-- Scripts -->

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js_provide/scripts.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>


</body>

</html>