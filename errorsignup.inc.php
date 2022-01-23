<?php
if(isset($_POST['submit'])){
    include_once 'dbh.inc.php';
    $first=$_POST['first'];
    $last=$_POST['last'];
    $email=$_POST['email'];
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];
    if (empty($first)|| empty($last) ||empty($email) || empty($uid) || empty($pwd)){
        header("Location: ../error-handler.php?signup=empty");
        exit();
    }else{
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
            header("Location: ../error-handler?signup=char");
            exit();
        }else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../error-handler.php?signup=invalidemail");
                exit();
            }else{
                header("Location: ../error-handler?signup=success");
                exit();
            }

        }
      

    }

}else{
    header("Location: ../error-handler.php");
}
?>