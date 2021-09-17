<?php
include("DB.php");
if(isset($_POST)){
	$objdb=new DB();
	print_r($_POST);
	$_POST['hobbie']=json_encode($_POST['hobbie']);
	unset($_POST['save']);
	$data=$objdb->update("users",$_POST,"id=".$_POST["id"]);
	if($data){
		header('location:view.php');
	}else{
		echo "error";
	}
}
?>