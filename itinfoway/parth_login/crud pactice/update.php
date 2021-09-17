<?php
include('connection.php');
$update="UPDATE `student` set `first_name`='raam' where `first_name`='harsh'";
$data=mysqli_query($conn,$update);
if($data)
{
	echo "succesfully update";
}
else
{
	echo "error";
}
?>