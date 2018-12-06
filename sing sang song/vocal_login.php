<!DOCTYPE HTML>

<html>
	<head>
		<!-- crease -->
		<link rel="stylesheet" type="text/css" href="assets/css_crease/demo.css" />
        <link rel="stylesheet" type="text/css" href="assets/css_crease/style_common.css" />
        <link rel="stylesheet" type="text/css" href="assets/css_crease/style1.css" />
		<script type="text/javascript" src="assets/js_crease/modernizr.custom.69142.js"></script>
		
		
		<title>搜尋聲音</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body>
		
		<!-- Header -->
			<header id="header">
				<div class="logo" ><a href="index.html" style="font-family:Microsoft JhengHei;">登出  <a href="generic_login.html"> <span style="font-family:Microsoft JhengHei;">Ya-Wei，您好</span></a></a></div>
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
                <a href="provide_login.php">提供聲音</a>
            </li>
            <li>
                <a href="list.php">尋求聲音</a>
            </li>
            <li>
                <a href="file:///C:/Users/USER/Desktop/STT/index.html">語音辨識</a>
             </li>
			<li>
				<a href="program_list.html">專案</a>
			</li>
			<li>
				<a onclick="myFunction()">配音員專區</a>
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
						<p>sing sang song</p>
						<h2 style="font-family:Microsoft JhengHei;">搜尋聲音</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main" class="container">

				<!-- Elements -->
					<h2 id="elements">選擇分類</h2>


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

										<div class="12u$">
                                             <div class="select-wrapper">
                                             <h3 style="font-family:Microsoft JhengHei;">語速</h3>
                                                  <select name="sex" id="sex">
                                                  <option value="1">- 選擇語速 -</option>
                                                  <option value="2">快速</option>
                                                  <option value="3">中等</option>
                                                  <option value="4">慢速</option>
                                             </select>
                                             </div>
                                        </div>

										<div class="6u 12u$(small)">
										<h3 style="font-family:Microsoft JhengHei;">聲音類型</h3>
											<form id="voice">
											<input type="checkbox" id="vocal2" name="vocal2">
											<label for="vocal2" style="font-family:Microsoft JhengHei;">溫柔</label>
											
											<input type="checkbox" id="vocal3" name="vocal3">
											<label for="vocal3" style="font-family:Microsoft JhengHei;">陽光</label>
											
											<input type="checkbox" id="vocal4" name="vocal4">
											<label for="vocal4" style="font-family:Microsoft JhengHei;">高亢</label>
											
											<input type="checkbox" id="vocal5" name="vocal5">
											<label for="vocal5" style="font-family:Microsoft JhengHei;">圓潤</label>
											
											<input type="checkbox" id="vocal6" name="vocal6">
											<label for="vocal6" style="font-family:Microsoft JhengHei;">尖銳</label>
											
											<input type="checkbox" id="vocal7" name="vocal7">
											<label for="vocal7" style="font-family:Microsoft JhengHei;">陰沉</label>
											
											<input type="checkbox" id="vocal8" name="vocal8">
											<label for="vocal8" style="font-family:Microsoft JhengHei;">恐怖</label>
											
											<input type="checkbox" id="vocal9" name="vocal9">
											<label for="vocal9" style="font-family:Microsoft JhengHei;">口齒不清</label>
											
											<input type="checkbox" id="vocal10" name="vocal10">
											<label for="vocal10" style="font-family:Microsoft JhengHei;">其他</label>
											</form>
											
										</div>

										<div class="12u$">
											<ul class="actions">
												<li><a href="vocal.html" class="button alt" style="font-family:Microsoft JhengHei;">重新選擇</a></li>
												<li><a id="show" class="button special icon fa-search" onclick="myFunction()"  style="font-family:Microsoft JhengHei;">確認搜尋</a></li>
											</ul>

											<p id="tt" style="display:none" "font-family:Microsoft JhengHei;"  >您已選擇：</p>
										</div>
											<p id="text2" style="display:none" "font-family:Microsoft JhengHei;" >溫柔</p>
											<p id="text3" style="display:none" "font-family:Microsoft JhengHei;" >陽光</p>
											<p id="text4" style="display:none" "font-family:Microsoft JhengHei;" >高亢</p>
											<p id="text5" style="display:none" "font-family:Microsoft JhengHei;" >圓潤</p>
											<p id="text6" style="display:none" "font-family:Microsoft JhengHei;" >尖銳</p>
											<p id="text7" style="display:none" "font-family:Microsoft JhengHei;" >陰沉</p>
											<p id="text8" style="display:none" "font-family:Microsoft JhengHei;" >恐怖</p>
											<p id="text9" style="display:none" "font-family:Microsoft JhengHei;" >口齒不清</p>
											<p id="text10" style="display:none" "font-family:Microsoft JhengHei;" >其他</p>

									</div>



									<div class="table-wrapper">
										<table>
											<thead>
											<tr id="tr1" style="display:none">
												<th>作品名稱</th>
												<th>音檔</th>
												<th>演出者</th>
											</tr>
											</thead>
											<tbody>
											<tr id="tr2" style="display:none">
												<td style="font-family:Microsoft JhengHei;">gap</td>
												<td>
													<audio controls>
														<source  src="music/m1.mp3" type="audio/mpeg" >
														Your browser does not support the audio tag.
													</audio>
												</td>
												<td>phee</td>
											</tr>
											<tr id="tr3" style="display:none">
												<td style="font-family:Microsoft JhengHei;">母湯喔</td>
												<td>
													<audio controls>
														<source  src="music/m2.mp3" type="audio/mpeg" >
														Your browser does not support the audio tag.
													</audio>
												</td>
												<td>Ya-Wei</td>
											</tr>
											<tr id="tr4" style="display:none">
												<td style="font-family:Microsoft JhengHei;">hey dude</td>
												<td>
													<audio controls>
														<source onclick=" " src="music/m3.mp3" type="audio/mpeg" >
														Your browser does not support the audio tag.
													</audio>
												</td>
												<td>Ya-Wei</td>
											</tr>
											<tr id="tr5" style="display:none">
												<td style="font-family:Microsoft JhengHei;">大家好</td>
												<td>
													<audio controls>
														<source  src="music/m4.mp3" type="audio/mpeg" >
														Your browser does not support the audio tag.
													</audio>
												</td>
												<td>Ya-Wei</td>
											</tr>


											</tbody>
										</table>
									</div>


									</code></pre>

						</div>
					</div>

			</div>


		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://twitter.com/?lang=zh-tw" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://zh-tw.facebook.com/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://mail.google.com/" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
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
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


		<script>
            function myFunction() {
             let t = document.getElementById("tt");
                t.style.display = "block";
			alert("在此平台使用他人創作之前請先遵守CC授權條款");

                for(let i=1 ; i++ ; i<=10){
                    let checkBox = document.getElementById("vocal"+i);
                    let text = document.getElementById("text"+i);
                    if (checkBox.checked === true ){
                        text.style.display = "block";
                        $("#tr"+i).show();
                    } else {
                        text.style.display = "none";
                        $("#tr"+i).hide();
                    }
			
                }
				
            }

            $(document).ready(function(){
                $("#show").click(function(){
                    $("#tr1").show();
                });
            });

		</script>
	</body>
</html>