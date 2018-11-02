<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>聲音需求列表</title>    
  </head>
  <body>
    <p align="center">123 321 1234567</p>
    <?php 

include 'conn.php';
$conn=new conn();    
//$rs=$this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$total=$conn->getOne('select count(*) as total from program'); 
$total=$total['total'];	//總數據條數
$num=5;	//每頁顯示條數
$totalpage=ceil($total/$num);	//計算頁數
if(isset($_GET['page']) && $_GET['page']<=$totalpage){//這裡做了一個判斷，若get到數據並且該數據小於總頁數情況下才付給當前頁參數，否則跳轉到第一頁
	$thispage=$_GET['page'];
}else{
	$thispage=1;
}

//註意下面<< .($thispage-1)*$num.','.$num.'' >>部分，通過計算來確定從第幾條數據開始取出，當前頁數減去1後再乘以每頁顯示數據條數 .($thispage-1)*$num.','.$num.''
//$sql="SELECT prog_name , prog_datetime , prog_intro FROM program ORDER BY prog_datetime DESC"; 
$pages = ($thispage-1)*$num.','.$num.'';
$sql="SELECT prog_name , prog_datetime , prog_intro FROM program ORDER BY prog_id DESC LIMIT ".$pages.""; 
//$sql=$sql.($thispage-1)*$num.','.$num.'';
/*
//$sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
    foreach ($conn->query($sql) as $row) {
        print $row['prog_name'] . "\t";
        print $row['prog_datetime'] . "\t";
        print $row['prog_intro'] . "\n";
    }
*/

$data=$conn->getAll($sql);

echo "<table width='800' cellspacing='3'>";

foreach($data as $k=>$v){
	echo '<tr><td>'.$v['prog_name'].'</td><td>'.$v['prog_datetime'].'</td><td>'.$v['prog_intro'].'</td></tr>';	
}   

echo "</table>" ;

/*
echo "<tr>"."主題：" . $row["prog_name"] . "<td>";
        echo "時間：" . $row["prog_datetime"] . "<td>";
        echo $row["content"] . "</td></tr>";  */

//顯示分頁數字列表
for($i=1;$i<=$totalpage;$i++){
	echo '<a href="?page='.$i.'">'.$i.'</a> ';	
	
}


?>
    
  </body>
</html>