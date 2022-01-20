<?php
include_once 'dbh.inc.php';
// The MySQLi function is called mysqli_real_escape_string(), and helps escape any form text that the user passes on from the website, 
// in case they try to inject code into our database.
$first =mysqli_real_escape_string($conn,$_POST['first']);
$last = mysqli_real_escape_string($conn,$_POST['last']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$uid = mysqli_real_escape_string($conn,$_POST['uid ']);
$pwd =mysqli_real_escape_string($conn,$_POST['pwd']);
$sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd)
VALUES(?, ?, ?, ?, ?);";
$stmt =mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL error";
}else{
    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
    mysqli_stmt_execute($stmt);
}
// mysqli_query($conn, $sql);
header("Location: ../includes/index.php?signup=success");
?>
