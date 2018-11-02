<?php
class conn{
  
  public function __construct(){
    $server = '140.131.114.154';
	  $user = 'root123';
	  $pass = 'root';
	  $database = 'sing sang song';	
	//$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) or die('Error with MySQL connection');
    
		try{	
			$this->pdo = new PDO('mysql:host=140.131.114.154;dbname=sing sang song', 'root123', 'root');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->exec('set names utf8');
			

		}catch(PDOException $e){
			echo '資料庫連接失敗:'.$e->getMessage();
			exit();
		}
	}
  
    //獲取一行數據
	public function getOne($sql){
		$rs=$this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
		
		return $rs;
	}
	
	//獲取多行數據結果
	public function getAll($sql){
		$rs=$this->pdo->query($sql)->fetchall(PDO::FETCH_ASSOC);
		
		return $rs;

	}
}
?>