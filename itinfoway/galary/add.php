<?php
include('connection.php');

 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $username=$_POST['username'];
 $emailid=$_POST['emailid'];
 $password=$_POST['password'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $createid=$_POST['creteid'];
 
 $query="INSERT INTO `users`(`first_name`, `last_name`, `users_name`, `email_id`, `password`, `xender`, `dob`, `create_id`) VALUES ('$firstname','$lastname','$username','$emailid','$password','$gender','$dob','$createid')";
 
 $data=mysqli_query($conn,$query)or die("query unccessfull");
 
 if(!$data)
 {
	echo "record not insert";
 }
 else
 {
	 header('location:view.php');
 }
?>