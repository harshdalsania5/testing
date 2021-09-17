<?php
include('connection.php');
$query="DELETE FROM `users` WHERE `id`='".$_GET['id']."'";
$data=mysqli_query($conn,$query) or die("query uncessful");
header('location:view.php')
?>