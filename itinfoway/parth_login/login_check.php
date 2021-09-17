<?php
session_start();

if(isset($_POST['email']))
{
	include('connect.php');
	$query="select * from `users` where `email_id`='".$_POST['email']."' and `password`='".$_POST['password']."'";
	$data=mysqli_query($connect,$query)or die ("query uncessfull");
	
	if(mysqli_num_rows($data)>0)
	{
		$row=mysqli_fetch_assoc($data);
		$_SESSION['success']="login successfull";		
		$_SESSION['is_login']=true;		
		$_SESSION['email']=$row['email_id'];		
		$_SESSION['id']=$row['id'];		
		header('location:view.php');
		
		exit;
	}
	else
	{
		 $_SESSION['error']="imail and passwor increat";
	}
	header('location:login.php');
	
}
?>