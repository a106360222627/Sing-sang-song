<?php
if($_FILES['file']['error']>0){
  exit("檔案上傳失敗！");//如果出現錯誤則停止程式
}
move_uploaded_file($_FILES['file']['tmp_name'],'music/'.$_FILES['file']['name']);//複製檔案
echo '<a href="music/'.$_FILES['file']['name'].'">music/'.$_FILES['file']['name'].'</a>'."<br/>";//顯示檔案路徑
echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
echo "暫存名稱: " . $_FILES["file"]["tmp_name"]."<br/>";
echo "返回頁面: " . '<a href="provide_login.html">點我返回'.'</a>'."<br/>";
?>