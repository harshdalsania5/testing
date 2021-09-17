<?php
	include("DB.php");
		$objdb=new DB();
		$data=$objdb->view("users","id=".$_GET["id"]);
		$dd=$data[0];
		print_r($dd);
		
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="container">
  <div class="bg-warning  col-12">
  <div class="row justify-content-center ">
	<div class="col p-5 col-5">
	
    <form action="update.php" method="post" class="bg-light p-3 ">
		<input type="hidden" name="id" value="<?=$dd["id"]?>">
		<div class="form-group">
			<label for="firstname">firstname</label>
			<input type="text" class="form-control" id="firstname" name="first_name" aria-describedby="emailHelp" value="<?=$dd["first_name"]?>" placeholder="firstname">
		</div>
		<div class="form-group">
			<label for="lastname">lastname</label>
			<input type="text" class="form-control" value="<?=$dd["last_name"]?>" id="lastname"  name="last_name" placeholder="lastname">
		</div>
		<div class="form-group">
			<label for="email">email</label>
			<input type="text" class="form-control" id="email" value="<?=$dd["email_id"]?>" name="email_id" placeholder="email">
		</div>
		<div class="form-group">
			<label for="gender">gender</label><br/>
			<div class="row">
			<div class="col-5">
			<input type="radio" class="form-check-input ml-2" id="xender"  name="xender" value="male" <?=($dd["xender"]=="male")?"checked":""?>><span class="ml-4">male<span>
			<input type="radio" class="form-check-input ml-2" id="xender"  name="xender" value="female" <?=($dd["xender"]=="female")?"checked":""?>><span class="ml-4">female</span>
			</div>
			</div>
		</div>
		
		<div class="form-group">
			<label for="dob">dob</label>
			<input type="date" class="form-control" id="dob" value="<?=$dd["d_o_b"]?>" name="d_o_b">
		</div>
		<div class="form-group">
			<div class="form-check">
			  <input class="form-check-input" name="hobbie[]" type="checkbox" value="caricket" id="cricket" <?=(in_array("caricket",json_decode($dd["hobbie"])))?"checked":""?>>
			  <label class="form-check-label" for="cricket">cricket</label>			
			</div>
			
			<div class="form-check">
			  <input class="form-check-input" name="hobbie[]" type="checkbox" value="travelling" id="travelling" <?=(in_array("travelling",json_decode($dd["hobbie"])))?"checked":""?>>
			  <label class="form-check-label" for="travelling">travelling</label>
			</div>
			
			<div class="form-check">
			  <input class="form-check-input" name="hobbie[]" type="checkbox" value="singing" id="singing" <?=(in_array("singing",json_decode($dd["hobbie"])))?"checked":""?>>
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
	