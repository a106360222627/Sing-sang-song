<?php
$server = '140.131.114.154';
$user = 'root123';
$pass = 'root';
$database = 'sing sang song';

$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8")) or die('Error with MySQL connection');

?>