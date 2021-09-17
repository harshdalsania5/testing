<?php
session_start();
if(isset($_POST["email"])){
include('connection.php');
	 $query="SELECT * FROM  `users` WHERE `email_id`='".$_POST['email']."' AND  `password`='".$_POST["password"]."'";
	 $data=mysqli_query($conn,$query)or die("query unccessfull");
	 if(mysqli_num_rows($data)>0){
		$row=mysqli_fetch_assoc($data);
		$_SESSION["success"]="Login Successfuly";
		$_SESSION["is_login"]=true;
		$_SESSION["username"]=$row["users_name"];
		$_SESSION["id"]=$row["id"];
	 }else{
		 $_SESSION["error"]="email/password increate";
	 }
	 
	 header("location:login.php");
}
?>