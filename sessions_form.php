<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>


<form action="" method="get">

    <input type="text" name="name" placeholder="Enter Your Name"/></br>
    <input type="text" name="email" placeholder="Enter Your Email"/></br>
    <input type="text" name="pass" placeholder="Enter Your Pass"/></br>
    <input type="submit" name="sub" value="Submit"/></br>

</form>


<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/17/2016
 * Time: 3:14 PM
 */

if (isset($_GET['sub'])){

    $name = $_GET['name'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];

    $_SESSION=['email']=$email;
}

?>

</body>
</html>