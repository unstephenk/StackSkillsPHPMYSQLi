<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: stephenk
 * Date: 1/20/2016
 * Time: 4:32 PM
 */

$con = mysqli_connect("localhost","root","NOPE!","StackSkillsPHPMYSQLi") or die("Connection Failed");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MYSQL Connection</title>
</head>
<body>

<form method="post" action="mysqli_connection.php">
    <input type="text" name="name" placeholder="Enter your name"/><br/>
    <input type="text" name="pass" placeholder="Enter your password"/><br/>
    <input type="text" name="email" placeholder="Enter your email"/><br/>
    <input type="submit" name="sub" value="Insert Data"/><br/>
</form>

<?php

if (isset($_POST['sub'])){

    $insert = "insert into users (name, pass, email) values ('$name','$pass', '$email')";
    $run = mysqli_query($con,$insert);

    if ($run){
        echo "Information has successfully been added to the database.";
    }

}

?>

</body>
</html>