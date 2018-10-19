<?php
$Link = mysqli_connect('localhost', 'root', '', 'sing sang song');
if (!$Link) {
　die(' 連線失敗，輸出錯誤訊息 : ' . mysqli_error());
}
echo ' 連線成功 ';
mysqli_close($Link);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
這是中文 UTF-8 編碼
</body>
</html>