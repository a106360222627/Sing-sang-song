<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DB_connect</title>
</head>
<body>
    <?php
        $link = mysqli_connect("localhost", "root123", "root") or die ("無法建立連結");
        echo "成功建立連結";
  
?>
</body>
</html>