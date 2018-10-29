<!DOCTYPE HTML>

<html>

<head>
	<!-- crease -->
	<link rel="stylesheet" type="text/css" href="assets/css_crease/demo.css" />
	<link rel="stylesheet" type="text/css" href="assets/css_crease/style_common.css" />
	<link rel="stylesheet" type="text/css" href="assets/css_crease/style1.css" />
	<script type="text/javascript" src="assets/js_crease/modernizr.custom.69142.js"></script>

	<link rel="stylesheet" href="assets/css_provide/provide.css" />

	<title>提供聲音</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css_CC/super-awesome.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

	<!-- Header -->
	<header id="header">
		<div class="logo">
			<a href="index.html" style="font-family:Microsoft JhengHei;">登出
				<a href="generic_login.html">
					<span style="font-family:Microsoft JhengHei;">志龍，您好</span>
				</a>
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
				<p>do ur best</p>
				<h2 style="font-family:Microsoft JhengHei;">提供聲音</h2>
			</header>
		</div>
	</section>

	<!-- Main -->
	<div id="main" class="container">


		<!-- 音檔資料 -->
		<h2 id="elements">音檔資料</h2>

		<form action="upload.php" enctype="multipart/form-data" method="post">
			<div id="txt" class="row uniform">
				<div class="6u 12u$(xsmall)">
					<h4 style="font-family:Microsoft JhengHei;">作品名稱</h3>
						<input type="text" name="name" id="name" value="" placeholder="-請輸入作品名稱-" />
						<br>
						<h4 style="font-family:Microsoft JhengHei;">上傳檔案</h3>
							<input type="file" name="file" id="file" />
							<br>
							<br>
							<h4 style="font-family:Microsoft JhengHei;">演出者(可以不填寫)</h3>
								<input type="text" name="name" id="name" value="" placeholder="-未知-" />
							<br>
							<h4 style="font-family:Microsoft JhengHei;">CC授權</h3>
                                <div class="cc-selector">
                                    <input id="CC2" type="radio" name="credit-card" value="BY" onclick="myFunction2()" />
                                    <label class="drinkcard-cc CC2" for="CC2"></label>
                                    <input id="CC3" type="radio" name="credit-card" value="BYNC" onclick="myFunction3()" />
                                    <label class="drinkcard-cc CC3"for="CC3"></label>
                                    <input id="CC4" type="radio" name="credit-card" value="BYNCSA" onclick="myFunction4()" />
                                    <label class="drinkcard-cc CC4" for="CC4"></label>
                                    <input id="CC5" type="radio" name="credit-card" value="BYND" onclick="myFunction5()" />
                                    <label class="drinkcard-cc CC5"for="CC5"></label>
                                    <input id="CC6" type="radio" name="credit-card" value="BYNCND" onclick="myFunction6()" />
                                    <label class="drinkcard-cc CC6" for="CC6"></label>
                                    <input id="CC7" type="radio" name="credit-card" value="BYSA" onclick="myFunction7()" />
                                    <label class="drinkcard-cc CC7"for="CC7"></label>
                                </div>
                                <p id="tc" style= "font-family:Microsoft JhengHei;" ></p>
				</div>
			</div>
			<!-- Elements -->
			<br>

			<h2 id="elements">音檔分類</h2>

			<!-- Form -->

			<form method="post" action="#">
				<div class="row uniform">


					<!-- Break -->
					<div class="12u$">
						<div class="select-wrapper">
							<h3 style="font-family:Microsoft JhengHei;">性別</h3>
							<select name="sex" id="sex">
								<option value="1">- 選擇性別 -</option>
								<option value="2">男</option>
								<option value="3">女</option>
							</select>
						</div>
					</div>

					<div class="12u$">
						<div class="select-wrapper">
							<h3 style="font-family:Microsoft JhengHei;">年齡</h3>
							<select name="age" id="age">
								<option value="1">- 選擇年齡 -</option>
								<option value="2">10歲以下(兒童)</option>
								<option value="3">10歲~25歲(青年)</option>
								<option value="4">26歲~35歲(青壯年)</option>
								<option value="5">36歲~50歲(壯年)</option>
								<option value="6">51歲~65歲(老壯年)</option>
								<option value="7">65歲以上(老年)</option>
							</select>
						</div>
					</div>

					<div class="6u 12u$(small)" id="vooice">
						<h2 id="elements" style="font-family:Microsoft JhengHei;">聲音類型</h2>
						<form  class="voice" id="voice">
							<div class="vocal_1">

							<input type="checkbox" id="vocal2" name="vocal2" class="vocal2">
							<label for="vocal2" style="font-family:Microsoft JhengHei;">溫柔</label>
				
							<input type="checkbox" id="vocal3" name="vocal3">
							<label for="vocal3" style="font-family:Microsoft JhengHei;">陽光</label>

							<input type="checkbox" id="vocal4" name="vocal4">
							<label for="vocal4" style="font-family:Microsoft JhengHei;">高亢</label>
							
							<input type="checkbox" id="vocal5" name="vocal5">
							<label for="vocal5" style="font-family:Microsoft JhengHei;">圓潤</label>
							</div>
							<div class="vocal_2">
							<input type="checkbox" id="vocal6" name="vocal6">
							<label for="vocal6" style="font-family:Microsoft JhengHei;">尖銳</label>

							<input type="checkbox" id="vocal7" name="vocal7">
							<label for="vocal7" style="font-family:Microsoft JhengHei;">陰沉</label>

							<input type="checkbox" id="vocal8" name="vocal8">
							<label for="vocal8" style="font-family:Microsoft JhengHei;">恐怖</label>

							<input type="checkbox" id="vocal9" name="vocal9">
							<label for="vocal9" style="font-family:Microsoft JhengHei;">口齒不清</label></div>
							
							<div class="vocal_3" id="vocal10">
								<input id="vocal11" type="checkbox" name="text" value="Other">
								<label for="vocal11" style="font-family:Microsoft JhengHei;">其他</label>
								<input style="display: none" type="text" id="txt_other" name="text">
							</div>

						</form>
						<br>
						<br>
						<input id="submit" name="submit" type="submit" class="button special" style="font-family:Microsoft JhengHei;" value="確認上傳">

					</div>

				</div>



	</div>

	</form>





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
	<script src="assets/js_provide/scripts_other.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

<script>
    function myFunction2() {
        let ttt = document.getElementById("tc").innerHTML = "您選擇：姓名標示";
        }
    function myFunction3() {
        let ttt = document.getElementById("tc").innerHTML = "您選擇：姓名標示,非商業性";
    }
    function myFunction4() {
        let ttt = document.getElementById("tc").innerHTML = "您選擇：姓名標示,非商業性,相同方式分享";
    }
    function myFunction5() {
        let ttt = document.getElementById("tc").innerHTML = "您選擇：姓名標示,禁止改作";
    }
    function myFunction6() {
        let ttt = document.getElementById("tc").innerHTML = "您選擇：姓名標示,非商業性,禁止改作";
    }
    function myFunction7() {
        let ttt = document.getElementById("tc").innerHTML = "您選擇：姓名標示,相同方式分享";
    }
</script>

</body>

</html>