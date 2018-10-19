<!DOCTYPE html>
<html>
<head>
	<title>登入</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {font-family: Arial, Helvetica, sans-serif;}
		form {border: 3px solid #f1f1f1;}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			opacity: 0.8;
		}

		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}
		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
			.cancelbtn {
				width: 100%;
			}
		}
	</style>
</head>
<body>
     <?php
            $old_url = $_SERVER["REQUEST_URI"];
            $check = strpos($old_url, '?');
            if($check !== false){
                if(substr($old_url, $check+1) == ''){
                  echo '';
              }else{
                  if(base64_decode($_GET['refer']) == 'nolog'){
                    echo '<div class="alert alert-danger" role="alert">帳號密碼輸入錯誤！</div>';
                  }
              }
            }
            ?>

<form action="actionlogin.php" method="post" name="login"  class="needs-validation" novalidate>
	<div class="imgcontainer">
		<img src="images/logo.png" alt="Avatar" >
	</div>

	<div class="container">
		<label for="account" style="font-family:Microsoft JhengHei;" ><b>帳號</b></label>
		<input type="text" style="font-family:Microsoft JhengHei;" placeholder="-輸入使用者帳號-" name="account" required>

		<label for="password" style="font-family:Microsoft JhengHei;"><b>密碼</b></label>
		<input type="password" style="font-family:Microsoft JhengHei;" placeholder="-輸入使用者密碼-" name="password" required>

		<button type="submit" class="btn btn-outline-info">登入</button>

		<br>

		<label style="font-family:Microsoft JhengHei;">
			<input type="checkbox" checked="checked"  name="remember"> 記住我
		</label>
	</div>

	<div class="container" style="background-color:#f1f1f1">
		<a href="index.php"><button type="button" class="cancelbtn" style="font-family:Microsoft JhengHei;"> 取消登入</button> </a>
		<span class="psw" style="font-family:Microsoft JhengHei;">忘記 <a href="#" style="font-family:Microsoft JhengHei;">密碼?</a></span>
	</div>
</form>

</body>
</html>
