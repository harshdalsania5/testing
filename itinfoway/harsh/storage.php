<?php
	include_once("conection.php");
	if(isset($_POST["save"]))
	{
		$file="";
		if(isset($_FILES) && $_FILES["profile_picture"]["size"]>0)
		{
			$ext=explode(".",$_FILES["profile_picture"]["name"]);
			$files=time().".".$ext[1];
			move_uploaded_file( $_FILES["profile_picture"]["tmp_name"],"img/".$files);
		}
			$q=mysqli_query($db,"INSERT INTO `users`(`first_name`,`last_name`,`email_id`,`password`,`xender`,`d_o_b`,`hobbie`,`profile_picture`) VALUES ('".$_POST["f_name"]."','".$_POST['l_name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['dob']."','".json_encode($_POST['hob'])."','".$files."')");
		
		
		if(!$q){
			 echo("Error description: " . mysqli_error($db));
		}else{
			header("location:userform.php");
		}
	}
	
?>
