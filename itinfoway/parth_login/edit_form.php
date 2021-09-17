<?php
include('connect.php');
$id=$_GET['id'];

$query="select * from users where id='$id'";
$data=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($data);

print_r($row);

?>
<br>
<br>
<br>
<br>
<form action="update_.php" method="post">
	<table>
		<tr>
			<input type="hidden" value="<?=$row["id"]?>" name="id">
			<td>firstname</td>
			<td><input type="text" value="<?php echo $row['first_name']?>" name="first_name"></td>
		</tr>
		<tr>
			<td>lastname</td>
			<td><input type="text" value="<?php echo $row['last_name']?>" name="last_name"></td>
		</tr>
		<tr>
			<td>emailid</td>
			<td><input type="text" value="<?php echo $row['email_id']?>" name="email_id"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" value="<?php echo $row['password']?>" name="password"></td>
		</tr>
		<tr>
			<td>xender</td>
			<td>
				<input type="radio" value="male" <?=($row["xender"]=="male")?"checked":""?> name="xender">male
				<input type="radio" value="female" <?=($row["xender"]=="female")?"checked":""?> name="xender">female
			</td>
		</tr>
		<tr>
			<td>dob</td>
			<td><input type="date" value="<?php echo $row['d_o_b']?>" name="d_o_b"></td>
		</tr>
		<tr>
			<td>hobbie</td>
			<td>
				<input type="checkbox" value="cricket" <?=(in_array("caricket",json_decode($row["hobbie"])))?"checked":""?> name="hobbie[]">cricket
				<input type="checkbox" value="travelling" <?=(in_array("travelling",json_decode($row["hobbie"])))?"checked":""?> name="hobbie[]">travelling
				<input type="checkbox" value="singing" <?=(in_array("singing",json_decode($row["hobbie"])))?"checked":""?> name="hobbie[]">singing
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="update">
			</td>
		</tr>
	</table>
</form>