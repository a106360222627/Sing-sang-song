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
	<link rel="stylesheet" href="assets/css_registor/registor.css" />
	<style>
	#error {color: #FF0000;font-size:15px;}
	.error {color: #FF0000;font-size:15px;position: relative;  left:27px;}
	</style>
	<title>註冊</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
<?php


$nameErr = $emailErr = $phoneErr= $accountErr = $passwordErr = "";
$name = $email = $phone = $account = $password = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
 function check_not_null($post_array){
    foreach($post_array as $value){
        if($value == ''){
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "姓名是必填的";
   } else {
     $name = test_input($_POST["name"]);
   }

    if (empty($_POST["phone"])) {
    $phoneErr = "電話是必填的";
  } else {
    $phone = test_input($_POST["phone"]);
  }

   if (empty($_POST["email"])) {
     $emailErr = "電子郵件是必填的";
   } else {
     $email = test_input($_POST["email"]);
     // 檢查電子郵件地址是否有效
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "無效的email格式";
     }
   }
   if (empty($_POST["account"])) {
    $accountErr = "帳號是必填的";
  } else {
    $account = test_input($_POST["account"]);
  }
  if (empty($_POST["password"])) {
    $passwordErr = "密碼是必填的";
  } else {
    $password = test_input($_POST["password"]);
  }

}
if(check_not_null(['name','email','account','password','phone'])){
//登入資料庫
$server = '140.131.114.154';
$user = 'root123';
$pass = 'root';
$database = 'sing sang song';

$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8")) or die('Error with MySQL connection');


$sql = "INSERT INTO user (user_name, user_phone, user_email, user_acc,user_paswd)
VALUES (
    '$name',
    '$phone',
    '$email',
    '$account',
    '$password')";
   $conn->exec($sql);

}

?>
	<!-- Header -->
	<header id="header" class="alt">
		<div class="logo">
			<a id="login_1" style="font-family:Microsoft JhengHei;">登入</button>
				<span style="font-family:Microsoft JhengHei;">註冊</span>
			</a>
		</div>
		<a href="#menu">Menu</a>
	</header>


	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li>
				<a href="index_login.html">首頁</a>
			</li>
			<li>
				<a href="generic_login.html">會員資料</a>
			</li>
			<li>
				<a href="vocal_login.html">搜尋聲音</a>
			</li>
			<li>
				<a href="login.html">登入</a>
			</li>
		</ul>
	</nav>

	<!-- One -->
	<section id="One" class="wrapper style3">
		<div class="inner">
			<header class="align-center">
				<p>Do Ur Best</p>
				<h2 style="font-family:Microsoft JhengHei;">註冊</h2>
			</header>
		</div>
	</section>

	<!-- Main -->
	<div id="main" class="container">


		<!-- 音檔資料 -->
		<h2 id="elements">個人資料</h2>
		<p class="error"><span class="error">* 必填</span></p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="post">
			<div id="txt" class="row uniform">
				<div class="6u 12u$(xsmall)">
				<h4 style="font-family:Microsoft JhengHei;">姓名<span id="error">*</span></h3>
				<input type="text" name="name" id="name" value="" placeholder="-請輸入姓名-" /><span id="error"><?php  echo $nameErr;?></span>
				<h4 style="font-family:Microsoft JhengHei;">電話<span id="error">*</span></h3>
				<input type="text" name="phone" id="phone" value="" placeholder="-請輸入電話-" /><span id="error"><?php echo $phoneErr;?></span>
				<h4 style="font-family:Microsoft JhengHei;">電子郵件<span id="error">*</span></h3>
				<input type="text" name="email" id="email" value="" placeholder="-請輸入電子郵件-" /><span id="error"><?php echo $emailErr;?></span>
				<h4 style="font-family:Microsoft JhengHei;">帳號<span id="error">*</span></h3>
				<input type="text" name="account" id="account" value="" placeholder="-請輸入帳號-" /><span id="error"> <?php echo $accountErr;?></span>
				<h4 style="font-family:Microsoft JhengHei;">密碼<span id="error">*</span></h3>
				<input type="password" name="password" id="password" value="" placeholder="-請輸入密碼-" /><span id="error"><?php echo $passwordErr;?></span>
				<br>

				</div>
			</div>

			<br>
			<input id="submit" name="submit" type="submit" class="button special" style="font-family:Microsoft JhengHei;" value="註冊">
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
	<script src="assets/js_provide/scripts.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>


</body>

</html>