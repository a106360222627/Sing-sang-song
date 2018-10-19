<?php
require 'config.php';

$account = $_POST['account'];
$password = $_POST['password'];
$refer = $_POST['refer'];
$en_password = md5($password);
$nolog = base64_encode('nolog');


if ($number == '' || $pwd == ''){
    // No login information
    header('Location: login.php?refer='. base64_encode('noinfo'));
}else{
    $sql = "SELECT user_id, DATEDIFF(SECOND,'1970-01-01',GETUTCDATE()) + user_id +
    ROUND(DATEDIFF(SECOND,'1970-01-01',GETUTCDATE())*RAND(), 0) FROM user WHERE user_acc='$account' AND password='$en_password'";
    $stmt = sqlsrv_query( $conn, $sql )
            or die(header('Location: login.php?refer='.$nolog));

    if(sqlsrv_has_rows($stmt)){
        $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
        // Update the user record
        $query = "UPDATE user SET cookie = '$row[1]' WHERE user_id = $row[0]";
            
        sqlsrv_query( $conn, $query )
            or die('cannot insert');
        
        // Set the cookie and redirect

        $cookieexpiry = (time() + 21600);
        setcookie("session_id", $row[1], $cookieexpiry);

        if (empty($refer) || !$refer){
            $refer = 'index.php';
        }

        header('Location: index.php?refer='. base64_encode($row[1]));
    }else{
        // Not authenticated
        header('Location: login.php?refer='.$nolog);
    }
}
?>