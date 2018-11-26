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
	echo $intro= test_input($_POST["intro"]);
	
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
  


?>