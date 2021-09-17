<?php
include('connection.php');
$query="UPDATE `users` SET `first_name`='".$_POST['firstname']."',`last_name`='".$_POST['lastname']."',`users_name`='".$_POST['username']."',`email_id`='".$_POST['emailid']."',`password`='".$_POST['password']."',`xender`='".$_POST['gender']."',`dob`='".$_POST['dob']."',`create_id`='".$_POST['creteid']."' WHERE `id`='".$_POST['id']."'";
$data=mysqli_query($conn,$query) or die("query uncessful");
header('location:view.php');
?>