<?php
include('connection.php');

$fn=$_POST['f_name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$dob=$_POST['dob'];
$hobbi=json_encode($_POST['hob']);

//$insert="INSERT INTO `student`(first_name,email,gender,city,dob,hobbies) `values` ('$fn','$email','$gender','$city','$dob','$hobbi')";
$insert="INSERT INTO `student`(`first_name`, `email`, `gender`, `city`, `dob`, `hobbies`) VALUES ('$fn','$email','$gender','$city','$dob','$hobbi')";

$data=mysqli_query($conn,$insert);

if($data)
{
	echo "successfully add";
}
else
{
	echo "error";
}

mysqli_close($conn);

?>