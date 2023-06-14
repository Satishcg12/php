<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addition</title>
</head>

<body>
    <form action="server.php" method="POST">
        <input type="number" name="a" id="a" value="0">
        <input type="number" name="b" id="b" value="0">
        <button type="submit">

<?php

function add()
{
    # code...
}
$a = $_POST['a'];
$b = $_POST['b'];
$c = $a + $b;
echo $c?$c:"add";
?>
        </button>
    </form>
</body>

</html>
