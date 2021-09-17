<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>switch_pattern_mix_post method</title>
  </head>
  <body>
  
  <form method="post">
  <div class="form-group">
    <label for="Email1">row</label>
    <input type="number" class="form-control" name="row" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="colum">colum</label>
    <input type="number" class="form-control" name="colum">
  </div>
   <div class="form-group">
    <label for="patern">patern type</label>
    <select class="form-control" name="patern">
		<option>/</option>
		<option>*</option>
		<option>-</option>
	</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
<?php
	if(isset($_POST["patern"]))
	{
		$row=$_POST["row"];
		$col=$_POST["colum"];
		$patern=$_POST["patern"];
		
		switch($patern)
		{
			case "/":
					for($i=0;$i<$row;$i++)
					{
						for($j=0;$j<$col;$j++)
						{
							echo"/";
						}
						echo"<br>";
					}
			break;
			case "*":
					for($i=0;$i<$row;$i++)
					{
						for($j=0;$j<$col;$j++)
						{
							echo"*";
						}
						echo"<br>";
					}
			break;
			case "-":
					for($i=0;$i<$row;$i++)
					{
						for($j=0;$j<$col;$j++)
						{
							echo"-";
						}
						echo"<br>";
					}
			break;

			default:
					echo"envalid choice";		
			break;
		}
	}
?>