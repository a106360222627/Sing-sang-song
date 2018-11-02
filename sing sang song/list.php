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
	<link rel="stylesheet" href="assets/css_list/list.css" />

	<title>需求專區</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

	<!-- Header -->
	<header id="header" class="alt">	<div class="logo" ><a href="index.php" style="font-family:Microsoft JhengHei;">登出  <a href="generic_login.php"> <span style="font-family:Microsoft JhengHei;">Ya-Wei，您好</span></a></a></div>
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
				<a href="program_list.html">專案</a>
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
				<h2 style="font-family:Microsoft JhengHei;">需求專區</h2>
			</header>
		</div>
	</section>
	
	<!-- Main -->
	<div id="main" class="container">
		<a href="demand.php" style="font-family:Microsoft JhengHei; font-weight:bold;"> <button id="demand"  >刊登需求</button> </a>
		<div class="table-wrapper">
		
			<table> 
				<thead>
					<tr id="tr1" style="">
						<th>標題</th>
						<th>刊登時間</th>
						<th>內容</th>

					</tr>
				</thead>
				<tbody>
				<?php
						include 'conn.php';
						$conn=new conn();  
						$total=$conn->getOne('select count(*) as total from program'); 
						$total=$total['total'];	//總數據條數
						$num=5;	//每頁顯示條數
						$totalpage=ceil($total/$num);	//計算頁數
						if(isset($_GET['page']) && $_GET['page']<=$totalpage){//這裡做了一個判斷，若get到數據並且該數據小於總頁數情況下才付給當前頁參數，否則跳轉到第一頁
							$thispage=$_GET['page'];
						}else{
							$thispage=1;
						}

						//註意下面<< .($thispage-1)*$num.','.$num.'' >>部分，通過計算來確定從第幾條數據開始取出，當前頁數減去1後再乘以每頁顯示數據條數 .($thispage-1)*$num.','.$num.''
						//$sql="SELECT prog_name , prog_datetime , prog_intro FROM program ORDER BY prog_datetime DESC"; 
						$pages = ($thispage-1)*$num.','.$num.'';
						$sql="SELECT prog_name , prog_datetime , prog_intro FROM program ORDER BY prog_id DESC LIMIT ".$pages.""; 
						//$sql=$sql.($thispage-1)*$num.','.$num.'';
						
						$data=$conn->getAll($sql);
						foreach($data as $k=>$v){
							echo '<tr><td>'.'<a href="http://140.131.114.154/sing%20sang%20song/pro-inside.php">'.$v['prog_name'].'</td><td>'.$v['prog_datetime'].'</td><td>'.$v['prog_intro'].'</a>'.'</td></tr>';	
						}  
						
				?>	
				</tbody> 
			</table>
		</div><div style="position: relative;left:500px; font-size:17px;">
		<?php 
			echo "第\t";
			for($i=1;$i<=$totalpage;$i++){
				echo '<a href="?page='.$i.'">'.$i.'</a> ';								
				} 
			echo "\t頁";
		?></div>
		<!-- <label style="font-size:15px;margin-left:430px;">第頁</label> -->
						
	</div>

	</form>

	</div>

	</div>


	
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