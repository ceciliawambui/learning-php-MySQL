<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 style="text-align:center">Sign Up Form</h1>
    <br>
    <form action="errorsignup.inc.php" method="POST" style="padding-left:550px">
        <input type="text" name="first"placeholder="Firstname">
        <br>
        <input type="text" name="last"placeholder="Lastname">
        <br>
        <input type="text" name="email"placeholder="E-mail">
        <br>
        <input type="text" name="uid"placeholder="Username">
        <br>
        <input type="password" name="pwd"placeholder="Password">
        <br>
        <button type="submit" name="submit" style="width:80px">Sign Up</button>
    </form>
    <?php
    // $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // if (strpos($fullUrl, "signup=empty")==true){
    //     echo "<p class='error'>You did not fill in all fields!</p>";
    //     exit();
    // }elseif (strpos($fullUrl, "signup==char")==true){
    //     echo "<p class='error'>You used invalid characters!</p>";
    //     exit();
    // }elseif (strpos($fullUrl, "signup=email")==true){
    //     echo "<p class='error'>You used invalid email!</p>";
    //     exit();
    // }elseif (strpos($fullUrl, "signup=success")==true){
    //     echo "<p class='success'>You have been signed up!</p>";
    //     exit();
    // }
    if(!isset($_GET['signup'])){
        exit();
    }else{
        $signupCheck = $_GET['signup'];
        if ($signupCheck == "empty"){
            echo "<p class='error'>You did not fill in all fields!</p>";
            exit();
        }elseif($signupCheck == "char"){
            echo "<p class='error'>You used invalid characters!</p>";
            exit();
        }elseif($signupCheck == "invalidemail"){
            echo "<p class='error'>You used invalid email!</p>";
            exit();
        }elseif($signupCheck == "success"){
            echo "<p class='success'>You have been signed up!</p>";
            exit();

        }
    }
    ?>

    
</body>
</html>