<?php
session_start();

if(isset($_GET['name'])){

    $_SESSION['name'] = $_GET['name'];
    header("location:view.php");
}else{

    header("location:view.php?error= someting went wrong");
}

?>


