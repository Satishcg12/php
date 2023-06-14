<h1>
    array single dimension array for l
</h1>
<?php
    $name = array("satish", "ashok", "rayyan", "nishan");
    for ($i =0 ; $i< count($name); $i++){
        echo $name[$i] . "<br>";
    }
?>
<h1>
    Key value pair(associative array) and foreach
</h1>
<?php
    $name = array("satish"=>1, "ashok"=>2, "rayyan"=>3, "nishan"=>3);
    

    foreach ($name as $key => $value) {
         echo "Key :".$key."<br>value: ".$value."<br>";
         echo "<hr>";
    }
?>

<h1>
    search inarray
</h1>
<?php
    $name = array("satish", "ashok", "rayyan", "nishan");
    
    echo"found";
?>