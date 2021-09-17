<?php
include('header.php');
include('connection.php');
$query="SELECT * FROM  `users` WHERE `id`='".$_SEESION["id"]."'";
$data=mysqli_query($conn,$query)or die("query unccessfull");
$row=mysqli_fetch_assoc($data);
?>