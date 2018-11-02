
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
			margin: 0px auto;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;

		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 0px auto;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			opacity: 0.8;
			margin: 0px auto;
		}

		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
			margin: 0px auto;
		}

		.imgcontainer {
			text-align: center;
			margin: 0px auto;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
			margin: 0px auto;
		}

		.pageDiv{
			width:250px;
			margin-left:auto;
			margin-right:auto;
			text-align:left
		}

		.container {
			padding: 16px;
			margin: 0px auto;
		}

		span.psw {
			float: right;
			padding-top: 16px;
			margin: 0px auto;
		}
		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
			.cancelbtn {

			}
		}
	</style>
</head>
<body>


<form action="actionlogin.php" method="post" name="login"  class="needs-validation" novalidate>
	<div class="imgcontainer">
		<img src="images/logo.png" alt="Avatar" >
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>


		<div class="pageDiv" >
			<label for="account" style="font-family:Microsoft JhengHei;" ><b>帳號</b></label>
			<input type="text" style="width:240px;high:40px;border:2px; font-family:Microsoft JhengHei; background-color:#CCDDFF;" placeholder="-輸入使用者帳號-" name="account" required>

			<br>

			<label for="password" style="font-family:Microsoft JhengHei;"><b>密碼</b></label>
			<input type="password" style="width:240px;high:40px;border:2px; font-family:Microsoft JhengHei; background-color:#CCDDFF;" placeholder="-輸入使用者密碼-" name="password" required>

			<input type="hidden" name="refer" value="index.php">



			<br>
			<br>
			<label style="font-family:Microsoft JhengHei;">
				<input type="checkbox" checked="checked"  name="remember"> 記住我
			</label>
			<br>
			<br>
			<a href="index.php"><button type="button" class="cancelbtn" style="width:90px;high:30px;border:2px black; font-family:Microsoft JhengHei;"> 取消登入</button> </a>
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			<button type="submit" class="cancelbtn" style="width:90px;high:30px;border:2px black; font-family:Microsoft JhengHei;">登入</button>

			<br>
			<br>
			<br>
			<span  style="font-family:Microsoft JhengHei;">忘記 <a href="#" style="font-family:Microsoft JhengHei;">密碼?</a></span>

		</div>




	<div class="container" style="background-color:#f1f1f1">


	</div>
</form>

<script type="text/javascript">
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js " integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T " crossorigin="anonymous "></script>

</body>
</html>