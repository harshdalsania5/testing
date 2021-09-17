<?php
	include("DB.php");
		$objdb=new DB();
		$data=$objdb->view("users");
	//print_r($data);
	if($data){
		?>
			<!doctype html>
			<html lang="en">
			  <head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
				<title>Hello, world!</title>
			  </head>
			  <body>
				
						<table class="table table-striped">
						  <thead class="thead-dark">
							<tr>
							  <th scope="col">id</th>
							  <th scope="col">First name</th>
							  <th scope="col">Last name</th>
							  <th scope="col">email id</th>
							  <th scope="col">password</th>
							  <th scope="col">xender</th>
							  <th scope="col">dob</th>
							  <th scope="col">hobbie</th>
							  <th scope="col">edit</th>
							  <th scope="col">delete</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php
						  
							foreach($data as $a){
							?>	
							<tr>
							  <td><?php echo $a['id']; ?></td>
							  <td><?php echo $a['first_name']; ?></td>
							  <td><?php echo $a['last_name']; ?></td>
							  <td><?php echo $a['email_id']; ?></td>
							  <td><?php echo $a['password']; ?></td>
							  <td><?php echo $a['xender']; ?></td>
							  <td><?php echo $a['d_o_b']; ?></td>
							  <td>
								<ul>
									<?php
									$d=json_decode($a['hobbie']);
									foreach($d as $aa)
									{
									?>
									<li>
										<?php echo $aa; ?>
									</li>
									<?php
									}
									?>
								</ul>
							  </td>
							  <td><a href="edit.php?id=<?=$a["id"]; ?>">Edit</a></td>
							  <td><a href="delete.php?id=<?=$a["id"]; ?>" onclick="return confirm('are you sure !')">delet</a></td>
							</tr>
							<?php
							}
							?>
						  </tbody>
						</table>


				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
			  </body>
			</html>
			
	<?php
	}else
	{
		echo "error";
	}

?>