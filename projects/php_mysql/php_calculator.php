<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body bgcolor="#87ceeb">

<form method="post" action="php_calculator.php">

    <b>Value 1:</b>
    <input type="text" name="value1" placeholder="First Value" size="10"/>
    <b>Value 2:</b>
    <input type="text" name="value2"placeholder="Second Value" size="10"/>
    <b>Select Operator: </b>
    <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="submit" name="cal" value="Calculate" /><br/>

</form><hr>

<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/22/2016
 * Time: 10:29 AM
 */

if(isset($_POST['cal'])){
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $opt = $_POST['operator'];

    if($opt=='+'){
        echo "<center><h2>Your Answer is: <b style='color:red;'>";
        echo $value1 + $value2;
        echo "</b></h2></center>";
    }
    if($opt=='*'){
        echo "<center><h2>Your Answer is: <b style='color:red;'>";
        echo $value1*$value2;
        echo "</b></h2></center>";
    }
    if($opt=='-'){
        echo "<center><h2>Your Answer is: <b style='color:red;'>";
        echo $value1 - $value2;
        echo "</b></h2></center>";
    }
    if($opt=='/'){
        echo "<center><h2>Your Answer is: <b style='color:red;'>";
        echo round($value1/$value2);
        echo "</b></h2></center>";
    }
}

?>

</body>
</html>
