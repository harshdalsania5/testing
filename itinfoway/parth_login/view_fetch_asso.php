<h1>view fetch data function(mysqli_fetch_assoc	)</h1>
<?php
	include_once('connect.php');
?>
<table border="1px">
	<thead>
		<tr>
			<th>id</th>
			<th>first name</th>
			<th>last name</th>
			<th>email address</th>
			<th>gender</th>
			<th>hobbie</th>
			<th>DOB</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$query="select * from users";
		$data=mysqli_query($connect,$query);
		if($data)
		{
			while($row=mysqli_fetch_assoc($data))
			{?>
			<tr>
				<td><?=$row['id']?></td>
				<td><?=$row['first_name']?></td>
				<td><?=$row['last_name']?></td>
				<td><?=$row['email_id']?></td>
				<td><?=$row['xender']?></td>
				<td><?=$row['hobbie']?></td>
				<td><?=$row['d_o_b']?></td>
				<td>
					<a href="#">edit</a>
					<a href="#">delete</a>
				</td>
			</tr>
			<?php
			}
		}
		else
		{
				echo "kaik error che bhai";
		}
		?>
	</tbody>
</table>