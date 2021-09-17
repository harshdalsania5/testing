<?php
	include('conection.php');
?>
<table border="1px">
	<thead>
		<tr>
			<th>first name</th>
			<th>Last name</th>
			<th>Eamil</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Hobbie</th>
			<th>PROFILE</th>
			<th>Acction</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query=mysqli_query($db,"SELECT * FROM `users`");
		if($query){
			while($row=mysqli_fetch_assoc($query)){
		?>
		<tr>
			<td><?=$row["first_name"]?></td>
			<td><?=$row["last_name"]?></td>
			<td><a href="mailto:<?=$row["email_id"]?>"><?=$row["email_id"]?></a></td>
			<td><?=$row["xender"]?></td>
			<td><?=$row["d_o_b"]?></td>
			<td><?=$row["hobbie"]?></td>
			<td><img src="img/<?=$row["profile_picture"]?>"></td>
			<td><a  href="#">Edit</a> <a href="#">Delete</a></td>
		</tr>
		<?php
			}
		}else{
			
		}
		?>
	</tbody>
</table>

<br>
<br>
<br>

-----------------------------------------------------------------------------------------------------------------------------------------------------

<br>
<br>
<br>

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