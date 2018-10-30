<?php
	//登入資料庫
	$server = '140.131.114.154';
	$user = 'root123';
	$pass = 'root';
	$database = 'sing sang song';
	header("Content-type: image/png");
	$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) or die('Error with MySQL connection');
	
	
	$sql = "SELECT * FROM `program` where prog_id='7'";
	$query =$conn->query($sql);
	$query->setFetchMode(PDO::FETCH_ASSOC);//
	 foreach($query as $row)
	{
		 $row['prog_upload'].'<br>';
	}
    echo $file=$row['prog_upload'];
?>



?>