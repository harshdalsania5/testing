<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>user form</title>
  </head>
  <body>
  <div class="container-{breakpoint}">
  <div class="bg-warning  col-12">
  <div class="row justify-content-center ">
	<div class="col p-5 col-5">
	<?php
		include('conection.php');
		if(isset($_GET["id"])){
			$query=mysqli_query($db,"SELECT * FROM `users` WHERE id=".$_GET["id"]);
			$row=mysqli_fetch_assoc($query);
		if($row){
		print_r($row);
	?>
    <form action="update_form.php" method="post" class="bg-light p-3 ">
		<input type="hidden" value="<?=$row["id"]?>" name="id">
		<div class="form-group">
			<label for="firstname">firstname</label>
			<input type="text" class="form-control" value="<?php echo $row["first_name"]; ?>" id="firstname" name="f_name" aria-describedby="emailHelp" placeholder="firstname">
		</div>
		<div class="form-group">
			<label for="lastname">lastname</label>
			<input type="text" class="form-control" value="<?=$row["last_name"]?>" id="lastname"  name="l_name" placeholder="lastname">
		</div>
		<div class="form-group">
			<label for="email">email</label>
			<input type="text" class="form-control" value="<?=$row["email_id"]?>" id="email" name="email" placeholder="email">
		</div>
		<div class="form-group">
			<label for="gender">gender</label><br/>
			<div class="row">
			<div class="col-5">
			<input type="radio" class="form-check-input ml-2" id="gender"  name="gender" value="male" <?=($row["xender"]=="male")?"checked":""?>><span class="ml-4">male<span>
			<input type="radio" class="form-check-input ml-2" id="gender"  name="gender" value="female" <?=($row["xender"]=="female")?"checked":""?>><span class="ml-4">female</span>
			</div>
			</div>
		</div>
		
		<div class="form-group">
			<label for="dob">dob</label>
			<input type="date" class="form-control" id="dob" name="dob" value="<?=$row["d_o_b"]?>">
		</div>
		<div class="form-group">
			<div class="form-check">
			  <input class="form-check-input" name="hob[]" type="checkbox" value="caricket" id="cricket" <?=(in_array("caricket",json_decode($row["hobbie"])))?"checked":""?>>
			  <label class="form-check-label" for="cricket">cricket</label>			
			</div>
			
			<div class="form-check">
			  <input class="form-check-input" name="hob[]" type="checkbox" value="travelling" id="travelling" <?=(in_array("travelling",json_decode($row["hobbie"])))?"checked":""?>>
			  <label class="form-check-label" for="travelling">travelling</label>
			</div>
			
			<div class="form-check">
			  <input class="form-check-input" name="hob[]" type="checkbox" value="singing" id="singing" <?=(in_array("singing",json_decode($row["hobbie"])))?"checked":""?>> 
			  <label class="form-check-label" for="singing">singing</label>
			</div>
		
		</div>
		<div class="col-12 text-right">
		 <button type="submit" class="btn btn-outline-primary" name="save" value="submit">Submit</button>
		</div>
	</form>
	<?php
		}
	}
	?>
	</div>
	</div>
	</div>
	</div>
	

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
  </body>
</html>