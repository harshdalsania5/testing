<?php
iniclude('connect.php');

$query="select * from `users` where `id`='".$_SESSION['id']."'";

$data=mysqli_query($connect,$query)or die("query uncessfull");

$row=mysqli_fetch_assoc($data);

?>