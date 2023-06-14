<?php
require "db_connect.php";

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO `mero_db`.`customers` (`name`, `age`, `phone_number`, `address`) VALUES ('$name', '$age', '$phone', '$address');";
if (mysqli_query($connect_db, $sql))
    header("location:register.php?success=A user added");
else
    header("location:register.php?error=Something went wrong");
