<?php
$conn=mysqli_connect("localhost","root","","rahul")or die("connection fail");
	
	$id=$_POST['id'];
    $fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$mobile=$_POST['mobile'];
	$xender=$_POST['xender'];
	$address=$_POST['address'];
	$hobbi=json_encode($_POST['hobbi']);
	$country=$_POST['country'];
	
	$query="UPDATE `users` SET `firstname`='$fn',`last_name`='$ln',`email`='$email',`dob`='$dob',`mobile`='$mobile',`xender`='$xender',`address`='$address',`hobbi`='$hobbi',`country`='$country' WHERE `id`='$id'";
	
	$data=mysqli_query($conn,$query)or die ("query uncessfull");
	
	if(!$data)
	{
		echo "record not update";
		
	}
	else
	{
		header('location:view.php');
	}
?>