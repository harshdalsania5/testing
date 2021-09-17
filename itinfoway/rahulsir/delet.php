<?php
$conn=mysqli_connect("localhost","root","","rahul")or die("connection fail");

$id=$_GET['id'];

$query="DELETE FROM `users` WHERE `id`='$id'";

$data=mysqli_query($conn,$query)or die("query uncessfull");
?>