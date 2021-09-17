<?php
include("DB.php");
if(isset($_POST)){
	$objdb=new DB();
	$data=$objdb->insert("users",$_POST);
	$_POST['hobbie']=json_encode($_POST['hobbie']);
unset($_POST['save']);
	//$dataview=$objdb->view("users");
	//print_r($dataview);
	if($data){
		
	}else{
		
	}
}
?>