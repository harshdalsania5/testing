	<?php
	include('connect.php');
	if(isset($_POST['save']))
	{
		$fn=$_POST['f_name'];
		$Ln=$_POST['l_name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		//$_FILES["profile_picture"]
		$files="";
		if(isset($_FILES) && $_FILES["profile_picture"]["size"]>0){
			$ext=explode(".",$_FILES["profile_picture"]["name"]);
			$files=time().".".$ext[1];
			move_uploaded_file( $_FILES["profile_picture"]["tmp_name"],"img/".$files);
		}
		
		//$hobbie=implode(",",$_POST['hob']);
		$hobbie=json_encode($_POST['hob']);
		
		$query="INSERT INTO `users`(first_name,last_name,email_id,password,xender,hobbie,d_o_b,profile_picture) values ('$fn','$Ln','$email','$password','$gender','$hobbie','$dob','$files')";
		
		$data=mysqli_query($connect,$query) or die ("query uncessfull");
		
		if($data)
		{
			echo "record inserted successfully";
		}
		else
		{
			echo("Error description: " . mysqli_error($connect));
		}
		//header('location:userform.php');
	}
?>