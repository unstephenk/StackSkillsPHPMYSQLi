<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: stephenk
 * Date: 1/20/2016
 * Time: 5:12 PM
 */

$con = mysqli_connect("localhost","root","NOPE","StackSkillsPHPMYSQLi") or die("Connection Failed");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MYSQL Connection</title>
</head>
<body>

<table width="500" bgcolor="orange" border="2">
    <tr>
        <th>S.N.</th>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    /**
     * Created by PhpStorm.
     * User: stephenk
     * Date: 1/20/2016
     * Time: 5:12 PM
     */

    $select = "select * from users";
    $run = mysqli_query($con,$select);

    while($row=mysqli_fetch_array($run) ){
        $user_id = $row['id'];
        $user_name = $row['name'];
        $user_pass = $row['pass'];
        $user_email = $row['email'];

    ?>
    <tr>
        <td><?php echo $user_id ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo $user_pass ?></td>
        <td><?php echo $user_email ?></td>
        <td>x</td>
        <td>x</td>
        <td></td>
    </tr>
    <?php  }    ?>

</table>

</body>
</html>