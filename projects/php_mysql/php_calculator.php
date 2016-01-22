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
    </select><br/>
    <input type="submit" name="cal" value="Calculate" /><br/>

</form><hr>

<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/22/2016
 * Time: 10:29 AM
 */

?>

</body>
</html>
