<?php session_start(); ?>
<?php

if( !isset($_POST['account']) || !isset($_POST['password']) || $_POST['account']=="" || $_POST['password']=="" ){
//若沒有從Login submit或帳密為空白，就導回Login.php
header("location:login.php");
}
else {
//連接帳號資料表，檢查帳密是否正確
$db_server = "140.131.114.154"; //資料庫主機位置
$db_user = "root123"; //資料庫的使用帳號
$db_password = "root"; //資料庫的使用密碼
$db_name = "sing sang song"; //資料庫名稱

//PDO的連接語法
$pdo = new PDO("mysql:host=$db_server;dbname=$db_name",$db_user,$db_password);
//設定為utf8編碼，必要設定
$pdo->query('SET NAMES "utf8"');

$Id = $_POST['account'];
$password = $_POST['password'];

// 建立SQL字串，並執行SQL指令，先在SQL指令中要用?留下未來要Binding的資料，在excute中用array來Bind Data，這樣可避免SQL Injection的駭客攻擊
$sql = "SELECT * FROM `user` WHERE( `user_acc` = ? AND `user_paswd` = ? )";

//執行SQL指令，並取得資料結果集合
$sth = $pdo->prepare($sql);
$sth->execute(array($Id, $password));
$result = $sth->fetch(PDO::FETCH_OBJ);

if( $result ) {  //若有資料，表示帳號密碼正確，設定Session，並導向 login.php
$_SESSION['LoginSuccess'] = true;
header("location:index.php");
}
else {  //如果
echo "<h1 style='color:red;'>帳號密碼錯誤，請重新登入。</h1>";
echo "<p><a href='login.php'>回到登入畫面</a></p>";
}

$pdo = NULL;
}

?>