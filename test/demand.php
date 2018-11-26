<!DOCTYPE HTML>

<html>

<head>
	<!-- crease -->
	<link rel="stylesheet" type="text/css" href="assets/css_crease/demo.css" />
	<link rel="stylesheet" type="text/css" href="assets/css_crease/style_common.css" />
	<link rel="stylesheet" type="text/css" href="assets/css_crease/style1.css" />
	<script type="text/javascript" src="assets/js_crease/modernizr.custom.69142.js"></script>
	
	<link rel="stylesheet" href="assets/css_demand/demand.css" />

<style>
	#error {color: #FF0000;font-size:15px;}
	.error {color: #FF0000;font-size:15px;position: relative;  left:27px;}
	</style>
	<title>刊登需求</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
<?php

$txt_titleErr = $moneyErr = $introErr =$vocalErr="";
$txt_title = $money = $intro = $vocal = $how = $datetime = $myallvocal ="";
header("Content-Type:text/html;charset=utf-8");
function test_input($data) {
		$data = trim($data);//去除兩側空白
   $data = stripslashes($data);//刪除反斜線
   $data = htmlspecialchars($data);
   return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["txt_title"])) {
	$txt_titleErr = "標題是必填的";
	} else {
	 $txt_title = test_input($_POST["txt_title"]);
	}
	if (empty($_POST["money"])) {
		$moneyErr = "金額是必填的";
	} else {
	$money = test_input($_POST["money"]);
	}
	if (empty($_POST["intro"])) {
		$introErr = "簡介是必填的";
	} else {
	$intro= test_input($_POST["intro"]);
	var_dump($intro);
	}
	if (empty($_POST["vocal"])) {
	$vocalErr = "請至少勾選一個選項";
	} else {
	
	$vocal	=implode(',',$_POST["vocal"]);
	$vocal=serialize($vocal);
	
	}
	
$how= $_POST['how'];
$how=serialize($how);

$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ; 

}
/*

//登入資料庫
$server = '140.131.114.154';
$user = 'root123';
$pass = 'root';
$database = 'sing sang song';

$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8")) or die('Error with MySQL connection');
    

$sql = "INSERT INTO program (prog_name, prog_datetime, prog_clasifi, prog_intro,pay,price) 
VALUES (
    '$txt_title',
    '$datetime',
    '$vocal',
    '$intro',
    '$how',
	'$money')";

   $conn->exec($sql);
  
*/

?>


	<!-- Header -->
	<header id="header" class="alt">
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
				<a href="login.html">專案</a>
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
				<p>DO ur best</p>
				<h2 style="font-family:Microsoft JhengHei;">刊登需求</h2>
			</header>
		</div>
	</section>
	
	<!-- Main -->
	<div id="main" class="container">
	<h2 style="position: relative;left:50px;">刊登需求</h3>
		<!--============-表單===========-->
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST">
		<p class="error"><span class="error">* 必填</span></p>
			<div class="6u 12u$(small)">
			<span style="color: #FF0000;font-size:15px;position: relative;  left:27px;top:27px;">*</span><h3 class="h">標題：<input style=" position: relative; top:1px;left:5px;" id="txt_title"  type="text" name="txt_title">
			<span id="error"><?php  echo $txt_titleErr;?>
			<!--------------- -聲音類型- ---------------- -->
			
				<h3 class="h">需求類型</h3>
					
				
					<div class="vocal_1">

					<input type="checkbox" id="vocal2" name="vocal[]" value="溫柔" checked="checked">
					<label for="vocal2" style="font-family:Microsoft JhengHei;">溫柔</label>

					<input type="checkbox" id="vocal3" name="vocal[]" value="陽光">
					<label for="vocal3" style="font-family:Microsoft JhengHei;">陽光</label>

					<input type="checkbox" id="vocal4" name="vocal[]" value="高亢">
					<label for="vocal4" style="font-family:Microsoft JhengHei;">高亢</label>

					<input type="checkbox" id="vocal5" name="vocal[]" value="圓潤">
					<label for="vocal5" style="font-family:Microsoft JhengHei;">圓潤</label>
					</div>
					<div class="vocal_2">
					<input type="checkbox" id="vocal6" name="vocal[]" value="尖銳">
					<label for="vocal6" style="font-family:Microsoft JhengHei;">尖銳</label>

					<input type="checkbox" id="vocal7" name="vocal[]" value="陰沉">
					<label for="vocal7" style="font-family:Microsoft JhengHei;">陰沉</label>

					<input type="checkbox" id="vocal8" name="vocal[]" value="恐怖">
					<label for="vocal8" style="font-family:Microsoft JhengHei;">恐怖</label>

					<input type="checkbox" id="vocal9" name="vocal[]" value="口齒不清">
					<label for="vocal9" style="font-family:Microsoft JhengHei;">口齒不清</label>
					</div>
					<div class="vocal_3" id="vocal10">
						<input id="vocal11" type="checkbox" name="text" value="Other">
						<label for="vocal11" style="font-family:Microsoft JhengHei;">其他</label>
						<input style="display:none" type="text" id="txt_other" name="text">
					</div>
				

			</div>

			
			<h3>費用結算方式</h3>
				<div class="radios">
					<input type="radio" id="how2"  name="how[]" value="計次" checked="checked">
					<label for="how2" style="font-family:Microsoft JhengHei;">計次</label>

					<input type="radio" id="how3"  name="how[]" value="天數">
					<label for="how3" style="font-family:Microsoft JhengHei;">天數</label>

					<input type="radio" id="how4"  name="how[]" value="集數">
					<label for="how4" style="font-family:Microsoft JhengHei;">集數</label>

					<input type="radio" id="how5"  name="how[]" value="周期">
					<label for="how5" style="font-family:Microsoft JhengHei;">周期</label>


				</div>
			
			<div>
			<span style="color: #FF0000;font-size:15px;position: relative;  left:27px;top:27px;" >*</span><label id="lbl_money" for="how6" style="font-family:Microsoft JhengHei;">金額：</label>
				<input id="txt_money" type="text" name="money"><span class="error"><?php  echo $moneyErr;?>
				
			</div>
			<div class="clear"></div>
			
			<h3>選擇檔案</h3>
			<div action=" " method="post" enctype="multipart/form-data">

				<input type="file" name="file" id="file" />
			</div>
			<br>

			
			<h3>專案簡介<span id="error">*</span></h3>
			<textarea placeholder="介紹專案內容、描述需求聲音個性類型" style=" resize:none;width:700px;height:100px;" id="txttt" name="intro"></textarea>
			<!--<span id="error"><?php  echo $introErr;?>-->
			<label class="btn btn-info">
		<input id="submit" name="submit" type="submit" class="btn_enter" value="確認上傳">

		</form>



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
	<script src="assets/js_provide/script_other.js"></script>
	<script src="assets/js/main.js"></script>


</body>

</html>