<?php
	session_start();
	include_once("conection.php");
	
	if(isset($_POST["save"]))
	{
		$q=mysqli_query($db,"INSERT INTO `users`(`first_name`,`last_name`,`email_id`,`xender`,`d_o_b`,`hobbie`) VALUES ('".$_POST["f_name"]."','".$_POST['l_name']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['dob']."','".json_encode($_POST['hob'])."')");
		if(!$q){
			$_SESSION["error"]="Error description: " . mysqli_error($db);
		}else{
			$_SESSION["sucess"]="insert recode sucessfuly";
		}
		header("location:view.php");
	}
	
?>
