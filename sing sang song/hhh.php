<?php



//登入資料庫
$server = '140.131.114.154';
$user = 'root123';
$pass = 'root';
$database = 'sing sang song';
header("Content-Type:text/html;charset=utf-8");
$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) or die('Error with MySQL connection');
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$sql = $conn->query("SELECT * FROM `program`");
$datalist = $sql->fetchAll();
foreach ($datalist as $datainfo)
    {
        echo $datainfo['id'] . "<br>";
    }

   /*
$sth->execute();


var_dump($sql); /*
 foreach((array)$list as $row)
{
    echo  $row["prog_name"];
    //echo $prog_intro;
}*/

?>
