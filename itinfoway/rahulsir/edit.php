<?php
$conn=mysqli_connect("localhost","root","","rahul")or die("connection fail");

$id=$_GET['id'];

$query="SELECT * FROM `users` WHERE `id`='$id'";

$data=mysqli_query($conn,$query)or die("query uncessfull");
$row=mysqli_fetch_assoc($data);
print_r($row);
?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>first name</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<input type="text" name="fn" value="<?php echo $row['firstname']; ?>"></td>
				</tr>
				<tr>
					<td>last name</td>
					<td><input type="text" name="ln" value="<?php echo $row['last_name']; ?>"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
				<tr>
					<td>dob</td>
					<td><input type="date" name="dob" value="<?php echo $row['dob']; ?>"></td>
				</tr>
				<tr>
					<td>mobile</td>
					<td><input type="number" name="mobile" value="<?php echo $row['mobile']; ?>"></td>
				</tr>
				<tr>
					<td>xender</td>
					<td>
						<input type="radio" name="xender" value="male"<?=($row["xender"]=="male")?"checked":""?>>male
						<input type="radio" name="xender" value="female"<?=($row["xender"]=="female")?"checked":""?>>female
					</td>
				</tr>
				<tr>
					<td>address</td>
					<td>
						<textarea cols="10" rows="5" name="address" >
							<?php echo $row['address']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>hobbie</td>
					<td>
						<input type="checkbox" name="hobbi[]" value="cricket"<?=(in_array("cricket",json_decode($row["hobbi"])))?"checked":""?>>cricket
						<input type="checkbox" name="hobbi[]" value="football"<?=(in_array("football",json_decode($row["hobbi"])))?"checked":""?>>football
						<input type="checkbox" name="hobbi[]" value="riding"<?=(in_array("riding",json_decode($row["hobbi"])))?"checked":""?>>riding
					</td>
				</tr>
				<tr>
					<td>country</td>
					<td>
						<select name="country" value="<?php echo $row['country']; ?>">
							<option value="rajkot">rjkt</option>
							<option value="surat">surat</option>
							<option value="baroda">baroda</option>
							<option value="amd">amd</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>