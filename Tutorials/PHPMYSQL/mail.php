<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mail</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/17/2016
 * Time: 3:47 PM
 */

/*mail("Receiver: sendingtoyou@gmail.com", "Subject: Hello There",
    "Body: How are you doing?", "From: unstephenk@gmail.com");*/

$to="skuehl@utdallas.edu";
$body="How are you doing?";
$subject="Check this out!";
$from="unstephenk@gmail.com";

mail($to, $subject, $body, $from);

echo "<h2>Email has been sucessfully sent</h2>";

?>

</body>
</html>