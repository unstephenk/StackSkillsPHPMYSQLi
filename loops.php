<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
</head>
<body>

<?php
/**
* Created by PhpStorm.
* User: Stephen
* Date: 1/17/2016
* Time: 2:01 PM
*/

/*While loop.*/
echo "<h3>While Loop</h3>";

$number = 1;

while($number <= 10){
    echo $number++ . "</br>";
}

/*For loop*/
echo "<h3>For Loop</h3>";

for($i = 1; $i <= 10; $i++){
    echo $i . "</br>";
}

/*ForEach loop*/
echo "<h3>ForEach Loop</h3>";
$names = array("Stephen","Elizabeth","April","May","June");

foreach ($names as $value){
    echo $value . "</br>";
}



?>


</body>
</html>