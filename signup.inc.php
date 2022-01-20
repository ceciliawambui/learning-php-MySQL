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
VALUES('$first', '$last', '$email', '$uid', '$pwd');";

mysqli_query($conn, $sql);
header("Location: ../includes/index.php?signup=success");
?>
