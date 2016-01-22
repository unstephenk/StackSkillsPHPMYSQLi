<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Currency Converter</title>
</head>
<body bgcolor="#87ceeb">

<form method="post" action="php_currency_converter.php">

    <b>Enter Amount: </b>
    <input type="text" name="amt" placeholder="Enter Amount" size="10"/>
    <b>From: </b>
    <select name="from">
        <option>USD</option>
        <option>GBP</option>
        <option>PKR</option>
        <option>INR</option>
        <option>RUR</option>
        <option>MIR</option>
    </select>
    <b>To: </b>
    <select name="to">
        <option>USD</option>
        <option>GBP</option>
        <option>PKR</option>
        <option>INR</option>
        <option>RUR</option>
        <option>MIR</option>
    </select>
    <input type="submit" name="convert" value="Convert" /><br/>

</form><hr>

<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/22/2016
 * Time: 10:59 AM
 */

if(isset($_POST['convert'])){
    $amt = $_POST['amt'];
    $from = $_POST['from'];
    $to = $_POST['to'];

    if($from == 'USD' AND $to == 'PKR'){
        echo "<center><h2>Your answer is: <b style='color:red';>";
        echo $amt*101 . "PKR";
        echo "</b></h2></center>";
    }
    if($from == 'USD' AND $to == 'GBP'){
        echo "<center><h2>Your answer is: <b style='color:red';>";
        echo $amt*101 . "GBP";
        echo "</b></h2></center>";
    }
    if($from == 'USD' AND $to == 'INR'){
        echo "<center><h2>Your answer is: <b style='color:red';>";
        echo $amt*101 . "INR";
        echo "</b></h2></center>";
    }
    if($from == 'USD' AND $to == 'RUR'){
        echo "<center><h2>Your answer is: <b style='color:red';>";
        echo $amt*101 . "RUR";
        echo "</b></h2></center>";
    }
    if($from == 'USD' AND $to == 'MIR'){
        echo "<center><h2>Your answer is: <b style='color:red';>";
        echo $amt*3.20 . "MIR";
        echo "</b></h2></center>";
    }
}


?>

</body>
</html>