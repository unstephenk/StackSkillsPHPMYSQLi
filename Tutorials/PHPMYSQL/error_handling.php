<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error Handling</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/19/2016
 * Time: 10:20 PM
 */

/*$file = fopen("stephen.txt", "r") or die("Unable to read file.");*/

if (!file_exists("create_a_test_file_data.txt")){
    die("Unable to read the file.");
}
else{
    $file = fopen("create_a_test_file_data.txt", "r");
}



?>


</body>
</html>