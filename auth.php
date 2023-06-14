
<?php
    if(isset($_POST))
    $name = $_POST["name"] ;
    $pass = $_POST["pass"] ;
    $result = null;
    if($name =="admin" && $pass == "admin"){
        header("location:dashboard.php");
    }else{
        header("location:form.php?error= invalid credential");

    }



?>

