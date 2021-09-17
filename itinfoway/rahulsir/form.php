<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form action="add.php" method="post">
			<table>
				<tr>
					<td>first name</td>
					<td><input type="text" name="fn"></td>
				</tr>
				<tr>
					<td>last name</td>
					<td><input type="text" name="ln"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>dob</td>
					<td><input type="date" name="dob"></td>
				</tr>
				<tr>
					<td>mobile</td>
					<td><input type="number" name="mobile"></td>
				</tr>
				<tr>
					<td>xender</td>
					<td>
						<input type="radio" name="xender" value="male">male
						<input type="radio" name="xender" value="female">female
					</td>
				</tr>
				<tr>
					<td>address</td>
					<td>
						<textarea cols="10" rows="5" name="address">
						</textarea>
					</td>
				</tr>
				<tr>
					<td>hobbie</td>
					<td>
						<input type="checkbox" name="hobbi[]" value="cricket">cricket
						<input type="checkbox" name="hobbi[]" value="football">football
						<input type="checkbox" name="hobbi[]" value="riding">riding
					</td>
				</tr>
				<tr>
					<td>country</td>
					<td>
						<select name="country">
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