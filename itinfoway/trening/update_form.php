<?php
	include_once("conection.php");
	if(isset($_POST["save"]))
	{
		$q=mysqli_query($db,"UPDATE `users` SET `first_name`='".$_POST["f_name"]."', `last_name`='".$_POST['l_name']."',`email_id`='".$_POST['email']."',`xender`='".$_POST['gender']."',`d_o_b`='".$_POST['dob']."',`hobbie`='".json_encode($_POST['hob'])."' WHERE 	`id`=".$_POST['id']);
		if(!$q){
			 echo("Error description: " . mysqli_error($db));
		}else{
			header("location:userform.php");
		}
	}
	
?>
