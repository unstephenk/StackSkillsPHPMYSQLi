<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 1/22/2016
 * Time: 9:52 AM
 */

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    $select = "select * from users where id = $edit_id";
    $run = mysqli_query($con,$select);
    $row = mysqli_fetch_array($run);

    $user_id = $row['id'];
    $user_name = $row['name'];
    $user_pass = $row['pass'];
    $user_email = $row['email'];

}
?>

    <br/>
    <form method="post" action="mysqli_order_by_limit_form.php">
        <input type="text" name="name" placeholder="<?php echo $user_name; ?>"/><br/>
        <input type="text" name="pass" placeholder="<?php echo $user_pass; ?>"/><br/>
        <input type="text" name="email" placeholder="<?php echo $user_email; ?>"/><br/>
        <input type="submit" name="sub" value="Update Data"/><br/>
    </form>