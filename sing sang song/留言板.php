<?php
require("mes.php");

$guestName=$_POST['guestName'];
$guestEmail=$_POST['guestEmail'];
$guestGender=$_POST['guestGender'];
$guestSubject=$_POST['guestSubject'];
$guestContent=$_POST['guestContent'];
$guestTime = date("Y:m:d H:i:s",time()+28800);

if(isset($guestName)){
mysql_query("insert into guest value('','$guestName','$guestEmail','$guestGender','$guestSubject','$guestTime','$guestContent')");
header("檢視留言板.php");
}
?>
