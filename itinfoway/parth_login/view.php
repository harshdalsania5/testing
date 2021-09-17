<h1>fetch data function(mysqli_fetch_array)</h1>
<?php
	include('connect.php');
?>
<table border="1px">
	<thead>
		<tr>
			<th>id</th>
			<th>first name</th>
			<th>lastname name</th>
			<th>email id</th>
			<th>password</th>
			<th>xender</th>
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
			while($row=mysqli_fetch_array($data))
			{
			?>
			<tr>
				<td><?=$row[0]?></td>
				<td><?=$row[1]?></td>
				<td><?=$row[2]?></td>
				<td><a href="mailto:<?=$row[3]?>"> <?=$row[3]?></a></td>
				<td><?=$row[4]?></td>
				<td><?=$row[5]?></td>
				<td><?=$row[6]?></td>
				<td><?=$row[7]?></td>
				<td>
					<a href="edit_form.php?id=<?=$row[0]?>">edit</a>
					<a href="delet_.php?id=<?=$row[0]?>">delet</a>
				</td>
			</tr>
			<?php
			}
		}
		else
		{
			
		}?>
	</tbody>
</table>
