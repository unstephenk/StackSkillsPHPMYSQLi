<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/22/2016
 * Time: 12:44 AM
 */

$con = mysqli_connect("localhost","root","NOPE","StackSkillsPHPMYSQLi") or die("Connection Failed");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MYSQL Connection</title>
</head>
<body>

<form method="post" action="mysqli_update_data.php">
    <input type="text" name="name" placeholder="Enter your name"/><br/>
    <input type="text" name="pass" placeholder="Enter your password"/><br/>
    <input type="text" name="email" placeholder="Enter your email"/><br/>
    <input type="submit" name="sub" value="Insert Data"/><br/>
</form>


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

    if (isset($_POST['sub'])){

        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];

        $insert = "insert into users (name, pass, email) values ('$name','$pass', '$email')";
        $run = mysqli_query($con,$insert);

        if ($run){
            echo "Information has successfully been added to the database.";
        }

    }

    $select = "select * from users";
    $run = mysqli_query($con,$select);

    while($row=mysqli_fetch_array($run) ){
        $user_id = $row['id'];
        $user_name = $row['name'];
        $user_pass = $row['pass'];
        $user_email = $row['email'];

        ?>
        <tr align="center">
            <td><?php echo $user_id ?></td>
            <td><?php echo $user_name ?></td>
            <td><?php echo $user_pass ?></td>
            <td><?php echo $user_email ?></td>
            <td><a href="mysqli_update_data.php?edit=<?php echo $user_id; ?>">Edit</a></td>
            <td><a href="mysqli_update_data.php?delete=<?php echo $user_id; ?>">Delete</a></td>
        </tr>
    <?php  }    ?>

</table>

<?php
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];

    $delete = "delete from users where id='$delete_id'";

    $run_delete = mysqli_query($con,$delete);

    if ($run_delete){
        echo "<script>alert('A user has been deleted!')</script>";
        echo "<script>window.open('mysqli_update_data.php','_self')</script>";
    }
}

if(isset($_GET['edit'])){
    include("mysqli_update_data_form.php");
}
?>

</body>
</html>