<!DOCTYPE html>
<html>
<head>
    <title>Special Commands</title>
</head>

<body>


<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/19/2016
 * Time: 11:13 PM
 */

echo date("D/M/d/Y") . "<br/>";

echo mt_rand(0,1000) . "<br/>";

$numbers = array("10", "10", "10");

echo array_sum($numbers) . "<br/>";

$n = 1.001;

echo $n . "<br/>";;

echo round($n) . "<br/>";

$password = mt_rand();

echo $password . "<br/>";

echo md5($password) . "<br/>";

?>

</body>
</html>