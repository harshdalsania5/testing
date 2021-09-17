<?php

include('connect.php');
if(isset($_GET['id']))
{
	//$id=$_GET['id'];

	$query="DELETE FROM `users` WHERE `id`=".$_GET['id'];
	
	$data=mysqli_query($connect,$query);
	
	header('location:view.php');
}
?>
