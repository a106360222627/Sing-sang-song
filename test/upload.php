<?php
if($_FILES['file']['error']>0){
  exit("檔案上傳失敗！");//如果出現錯誤則停止程式
}
move_uploaded_file($_FILES['file']['tmp_name'],'music/'.$_FILES['file']['name']);//複製檔案
echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
header("Refresh:3; url=provide_login.php");
?>

<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<p style="color:red;">上傳成功</p>
<img src="images/321.gif" alt="Avatar" class="avatar" width="100" height="100">
</body>
</html>