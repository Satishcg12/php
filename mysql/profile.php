<?php

require "db_connect.php";
session_start();

if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php?error=logout");
    die;

}
if(!isset($_SESSION['phone_no'])){
    header("location:login.php?error=please login fiirst");
    die;
}
$phone = $_SESSION['phone_no'];

$sql = "SELECT * FROM customers where `phone_number`='$phone'";

$result = mysqli_query($connect_db, $sql);

$user_data = mysqli_fetch_array($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $user_data["name"]." . ".$user_data["id"] ?></title>
</head>
<body>
    <h1>Profile</h1>
    <form action="profile.php" method="post">
        <input type="hidden" value="logout" name="logout">
        <button type="submit">logout</button>
    </form>
    <p>

        Name: <?php echo $user_data["name"] ?>
    </p>
    <p>
        Address: <?php echo $user_data["address"] ?>
    </p>
    <p>

        Phone Number: <?php echo $user_data["phone_number"] ?>
    </p>
</body>
</html>