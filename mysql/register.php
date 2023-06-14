<!DOCTYPE html>
<html>


<body>

<h2>HTML Forms</h2>

<form action="register_functioin.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  
  <label for="age">Age:</label><br>
  <input type="text" id="age" name="age"><br>
  <label for="phone">Phone no:</label><br>
  <input type="text" id="phone" name="phone"><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" ><br>
  <input type="submit" value="Submit">
</form> 
<!-- name	age	phone_number	address -->
<p>
    <?php 
        if(isset($_GET["error"]))
        echo $_GET["error"];
        elseif (isset($_GET["success"]))
        echo $_GET["success"];
    ?>
</p>


</body>
</html>