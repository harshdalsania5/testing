<?php
include('connect.php');
if(isset($_POST['submit']))
{
	//$id=$_GET['id'];

	$query="UPDATE `users` SET `first_name`='".$_POST["first_name"]."', `last_name`='".$_POST['last_name']."',`email_id`='".$_POST['email_id']."',`password`='".$_POST['password']."',`xender`='".$_POST['xender']."',`d_o_b`='".$_POST['d_o_b']."',`hobbie`='".json_encode($_POST['hobbie'])."' WHERE 	`id`=".$_POST['id'];
	
	$data=mysqli_query($connect,$query) or die ("query uncessfull");
	
	header('location:view.php');
}
?>