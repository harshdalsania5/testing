<?php
	session_start();
	include('conection.php');
	if(isset($_SESSION["sucess"])){
		echo "<font color='green'>".$_SESSION["sucess"]."</font>";
		unset($_SESSION["sucess"]);
	}
?>
<table border="1px">
	<thead>
		<tr>
			<th>id</th>
			<th>first name</th>
			<th>Last name</th>
			<th>Eamil</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Hobbie</th>
			<th>Acction</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query=mysqli_query($db,"SELECT * FROM `users`");
		if($query){
			while($row=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?=$row[0]?></td>
			<td><?=$row[1]?></td>
			<td><?=$row[2]?></td>
			<td><a href="mailto:<?=$row["email_id"]?>"><?=$row[3]?></a></td>
			<td><?=$row[4]?></td>
			<td><?=$row[5]?></td>
			<td><?=$row[6]?></td>
			<td>
				<a  href="edit_userform.php?id=<?=$row[0]?>">Edit</a> 
				<a href="#">Delete</a>
			</td>
		</tr>
		<?php
			}
		}else{
			
		}
		?>
	</tbody>
</table>