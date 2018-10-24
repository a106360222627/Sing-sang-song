
<?php

//登入資料庫
$server = '140.131.114.154';
$user = 'root123';
$pass = 'root';
$database = 'sing sang song';
header("Content-Type:text/html;charset=utf-8");
$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) or die('Error with MySQL connection');


$sql = "SELECT * FROM `program` where prog_id='2'";
$sth = $conn->prepare($sql);
$sth->execute();

$row = $sth->fetch(PDO::FETCH_ASSOC);
 foreach((array)$row as $key =>$value)
{
    echo $key." : ".$value."<br />";
    //echo $prog_intro;
}

?>