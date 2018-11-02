<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>聲音需求列表</title>    
  </head>
  <body>
    <p align="center">123 321 1234567</p>
    <?php
    
    //require_once("DB_connect.php");
      //登入資料庫
      
	$server = '140.131.114.154';
	$user = 'root123';
	$pass = 'root';
	$database = 'sing sang song';	
	$conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) or die('Error with MySQL connection');
		
      //指定每頁顯示幾筆記錄
      $records_per_page = 5;

      //取得要顯示第幾頁的記錄
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;

      //建立資料連接
      //$link = create_connection();
			
      //執行 SQL 命令
      $sql = "SELECT prog_name,prog_datetime,prog_intro FROM project ORDER BY date DESC";	      
      $count = $conn->prepare($sql);

      //取得記錄數
      //$total_records = mysqli_num_rows($result);
      $count->execute();   
      $no=$count->rowCount();    

      //計算總頁數
      //$total_pages = ceil( $count / $records_per_page);
      $total_pages = ceil( $no / $records_per_page);

      //計算本頁第一筆記錄的序號
      $started_record = $records_per_page * ($page - 1);

      //將記錄指標移至本頁第一筆記錄的序號
      //mysqli_data_seek($result, $started_record);       

      echo "<table width='800' align='center' cellspacing='3'>";

      //顯示記錄
      /*
      $sth = $conn->prepare($sql);
      $sth->execute();
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
      //$data=$conn->quer($sql)
      $j = 1;
      foreach($rows as $row){
        echo "<tr>"."主題：" . $row["prog_name"] . "<td>";
        echo "時間：" . $row["prog_datetime"] . "<td>";
        echo $row["content"] . "</td></tr>";
        $j++;	
      } */

      class Member
      {
          public function showMember()
          {
              echo "<br />";
              echo "sn:".$this->prog_name."<br />";
              echo "name:".$this->prog_datetime."<br />";
              echo "mail:".$this->prog_intro."<br />";
              //echo "home:".$this->home."<br />";
              //echo "message:".$this->message."<br />";
          }
      }
       
      //$sql = "SELECT * FROM project ORDER BY date DESC";
      $sth = $conn->prepare($sql);
      $sth->execute();
      $rows = $sth->fetchAll(PDO::FETCH_CLASS,"Member");
       
      foreach($rows as $row)
      {
          $row->showMember();
      }
      
      echo "</table>" ;

      //產生導覽列
      echo "<p align='center'>";

      if ($page > 1)
        echo "<a href='index.php?page=". ($page - 1) . "'>上一頁</a> ";

      for ($i = 1; $i <= $total_pages; $i++)
      {
        if ($i == $page)
          echo "$i ";
        else
          echo "<a href='index.php?page=$i'>$i</a> ";
      }

      if ($page < $total_pages)
        echo "<a href='index.php?page=". ($page + 1) . "'>下一頁</a> ";
      echo "</p>";

      //釋放記憶體空間  
      /*
      mysqli_free_result($result);
      mysqli_close($link);  
      */
    ?>
    
  </body>
</html>