<?php
include('header.php');
include('connection.php');
$query="SELECT * FROM `users`";
$data=mysqli_query($conn,$query)or die("query unssessfull");
?>
<div class="container-fluid ">
 <div class="row mt-5 justify-content-center">
  <div class="col-lg-8 ">
<table class="table table-bordered ">
	<thead>
		<tr>
			<td>id</td>
			<td>firstname</td>
			<td>lastname</td>
			<td>username</td>
			<td>emailid</td>
			<td>password</td>
			<td>xender</td>
			<td>dob</td>
			<td>createid</td>
			<td>link</td>
		</tr>
	</thead>
	<tbody>
		<?php
		while($row=mysqli_fetch_array($data))
		{
			?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['first_name']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['users_name']; ?></td>
				<td><?php echo $row['email_id']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td><?php echo $row['xender']; ?></td>
				<td><?php echo $row['dob']; ?></td>
				<td><?php echo $row['create_id']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
					<a href="delet.php?id=<?php echo $row['id'];?>">delet</a>
				</td>
			</tr>
			<?php
		}
		?>		
	</tbody>
</table>
</div>
</div>
</div>
<?php
include('footer.php');
?>