<?php
//	include('insert.php');

?>

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
	
    <form action="insert.php" method="post" class="bg-light p-3 ">
		<div class="form-group">
			<label for="firstname">firstname</label>
			<input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="emailHelp" placeholder="firstname">
		</div>
		<div class="form-group">
			<label for="lastname">lastname</label>
			<input type="text" class="form-control" id="lastname"  name="lastname" placeholder="lastname">
		</div>
		<div class="form-group">
			<label for="email">email</label>
			<input type="text" class="form-control" id="email" name="email" placeholder="email">
		</div>
		<div class="form-group">
			<label for="gender">gender</label><br/>
			<div class="row">
			<div class="col-5">
			<input type="radio" class="form-check-input ml-2" id="gender"  name="gender" value="male"><span class="ml-4">male<span>
			<input type="radio" class="form-check-input ml-2" id="gender"  name="gender" value="female"><span class="ml-4">female</span>
			</div>
			</div>
		</div>
		
		<div class="form-group">
			<label for="dob">dob</label>
			<input type="date" class="form-control" id="dob" name="dob">
		</div>
		<div class="form-group">
			<div class="form-check">
			  <input class="form-check-input" name="hobbies[]" type="checkbox" value="caricket" id="cricket">
			  <label class="form-check-label" for="cricket">cricket</label>			
			</div>
			
			<div class="form-check">
			  <input class="form-check-input" name="hobbies[]" type="checkbox" value="travelling" id="travelling">
			  <label class="form-check-label" for="travelling">travelling</label>
			</div>
			
			<div class="form-check">
			  <input class="form-check-input" name="hobbies[]" type="checkbox" value="singing" id="singing">
			  <label class="form-check-label" for="singing">singing</label>
			</div>
		
		</div>
		<div class="col-12 text-right">
		 <button type="submit" class="btn btn-outline-primary" name="save" value="submit">Submit</button>
		</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
  </body>
</html>