<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/17/2016
 * Time: 2:21 PM
 */

function hello(){

    $name = "Stephen";
    if(strlen($name) > 5){
        echo $name . "</br>". "Your name is greater than five letters" . "</br>";
    }
    else{
        echo "Your name is less than 5 letters" . "</br>";
    }
}

/*Calls the hello function*/
hello();

?>


</body>
</html>