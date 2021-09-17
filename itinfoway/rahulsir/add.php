<?php
$conn=mysqli_connect("localhost","root","","rahul")or die("connection fail");
if(isset($_POST['submit']))
{
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$mobile=$_POST['mobile'];
	$xender=$_POST['xender'];
	$address=$_POST['address'];
	$hobbi=json_encode($_POST['hobbi']);
	$country=$_POST['country'];
	
	$query="INSERT INTO `users`(`firstname`, `last_name`, `email`, `dob`, `mobile`, `xender`, `address`, `hobbi`, `country`) VALUES ('$fn','$ln','$email','$dob','$mobile','$xender','$address','$hobbi','$country')";
	
	$data=mysqli_query($conn,$query) or die("query uncessfull");
	
	if(!$data)
	{
		echo "record not inserted";	
	}
	else
	{
		header('location:view.php');
	}
}
?>