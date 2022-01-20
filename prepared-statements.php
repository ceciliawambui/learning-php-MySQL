<?php
include_once 'C:\xampp\htdocs\includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // The basic idea behind Prepared Statements, is to create placeholders in our SQL statements when we send them to our database.
    //  Then later we fill in the placeholders with parameters that the user send from a form.
    $data="john";
    // created a templet
    $sql = "SELECT * FROM users where user_uid=?;";
    // Create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    // Prepare the prepared statements
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statements failed";
    }else{
        // bind parameters to the placeholders
        mysqli_stmt_bind_param($stmt, "s", $data );
        // Run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while($row = mysqli_fetch_assoc($result)){
            echo $row['user_uid'] . "<br>";

    }

    }
    ?>
   

    
</body>
</html>