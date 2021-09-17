<?php
include("DB.php");
$objdb=new DB();
$data=$objdb->delet("users","id=".$_GET["id"]);

if($data)
{
	header('location:view.php');
}
else
{
	echo "error";
}
?>