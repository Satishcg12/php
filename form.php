<!DOCTYPE html>
<html>


<body>

<h2>HTML Forms</h2>

<form action="auth.php" method="post">
  <label for="name">First name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="pass">Password:</label><br>
  <input type="password" id="pass" name="pass"><br><br>
  <input type="submit" value="Submit">
</form> 
<p>
    <?php 
        if(isset($_GET["error"]))
        echo $_GET["error"];
    ?>
</p>


</body>
</html>