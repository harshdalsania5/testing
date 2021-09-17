<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>galary user formjkdhsk</title>
  </head>
  <body>
  <div class="col-12 mx-auto">
    <div class="col-6 bg-warning">
		<form action="add.php" method="post">
			  <div class="form-group">
				<label for="firstname">firstname</label>
				<input type="text" class="form-control" id="firstname" name="firstname">
			  </div>
			  
			  <div class="form-group">
				<label for="lastname">lastname</label>
				<input type="text" class="form-control" id="lastname" name="lastname">
			  </div>
			  
			   <div class="form-group">
				<label for="username">username</label>
				<input type="text" class="form-control" id="username" name="username">
			  </div>
			  
			   <div class="form-group">
				<label for="emailid">email id</label>
				<input type="text" class="form-control" id="emailid" name="emailid">
			  </div>
			  
			   <div class="form-group">
				<label for="password">password</label>
				<input type="text" class="form-control" id="password" name="password">
			  </div>
			  
			<div class="form-check">
				<label for="gender">gender</label>
			
			<div class="form-check">
				  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
				  <label class="form-check-label" for="exampleRadios1">male</label>
			</div>
			<div class="form-check">
				  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
				  <label class="form-check-label" for="exampleRadios2">female</label>
			</div>
			 </div>
			  <div class="form-group">
				<label for="dob">date of birth</label>
				<input type="date" class="form-control" id="dob" name="dob">
			  </div>
			  
			  <div class="form-group">
				<label for="creteid">create id</label>
				<input type="number" class="form-control" id="creteid" name="creteid">
			  </div>
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>