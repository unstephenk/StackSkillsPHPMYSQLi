<?php
$expire = time()+60*60*24*30;

setcookie("cookiename","google.com","$expire");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>

<h3>Refresh the browser to view cookie information below.</br></h3>

<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/17/2016
 * Time: 3:32 PM
 */

echo $_COOKIE['cookiename'];

?>

</body>
</html>