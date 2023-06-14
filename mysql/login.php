<?php
require "db_connect.php";
session_start();

if (isset($_POST["phone_no"])) {
    $phone = $_POST['phone_no'];
    $sql = "SELECT `phone_number` FROM customers where `phone_number`='$phone'";
    if ($result = mysqli_query($connect_db, $sql)) {
        if (mysqli_fetch_array($result)) {

            $_SESSION['phone_no'] = $_POST['phone_no'];
            header("location:profile.php");
        } else {
            header("location:login.php?error=User not found ");            
        }
    }
}
echo "login";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="login.php" method="post">
        <input type="number" name="phone_no" placeholder="phone_no">
        <input type="submit">
    </form>
    <p>

    <?php 
        if(isset($_GET["error"]))
        echo $_GET["error"];
    ?>
    </p>
    
</body>



</html>