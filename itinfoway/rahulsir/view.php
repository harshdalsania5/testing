<?php
$conn=mysqli_connect("localhost","root","","rahul")or die("connection fail");
?>
<table border="1">
	<thead>
		<tr>
			<td>id</td>
			<td>firstname</td>
			<td>lastname</td>
			<td>email</td>
			<td>dob</td>
			<td>mobile</td>
			<td>xender</td>
			<td>address</td>
			<td>hobbi</td>
			<td>country</td>
			<td>link</td>
		</tr>
	</thead>
	<tbody>
		<?php
		$query="SELECT `id`, `firstname`, `last_name`, `email`, `dob`, `mobile`, `xender`, `address`, `hobbi`, `country` FROM `users`";
		$data=mysqli_query($conn,$query)or die("query uncessull");
		while($row=mysqli_fetch_assoc($data))
		{
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['firstname']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['dob']; ?></td>
			<td><?php echo $row['mobile']; ?></td>
			<td><?php echo $row['xender']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['hobbi']; ?></td>
			<td><?php echo $row['country']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
				<a href="delet.php?id=<?php echo $row['id']; ?>">delet</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>