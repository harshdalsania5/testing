<?php
include('connection.php');
$view="SELECT * FROM `student`";

$data=mysqli_query($conn,$view);
?>
<table border="1">
	<thead>
		<tr>
			<td>id</td>
			<td>firstname</td>
			<td>email</td>
			<td>gender</td>
			<td>city</td>
			<td>dob</td>
			<td>hobbie</td>
		</tr>
	</thead>
	<tbody>
		<?php
		while($row=mysqli_fetch_array($data))
		{?>
			<tr>
				<td><?php echo $row[0] ?></td>
				<td><?php echo $row[1] ?></td>
				<td><?php echo $row[2] ?></td>
				<td><?php echo $row[3] ?></td>
				<td><?php echo $row[4] ?></td>
				<td><?php echo $row[5] ?></td>
				<td><?php echo $row[6] ?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
	<?php
?>