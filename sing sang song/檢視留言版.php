<?php
require("mes.php");
$data=mysql_query('select * from guest order by guestTime desc')//讓資料由最新呈現到最舊
?>