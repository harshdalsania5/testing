<form method="get">
	<p>Name</p>
	<input type="text" name="name">
	<br>
	
	<br>
	<button type="submit">Submit</button>
</form>
<?php
if(isset($_GET["name"])){
	$name=$_GET["name"];
	switch($name){
		case "oo":
			for($i=0;$i<5;$i++)
			{
				for($j=0;$j<=$i;$j++)
				{
					echo"+";
				}
				for($k=5;$k>$i;$k--)
				{
					echo"k";
				}
				for($j=5;$j>$i;$j--)
				{
					echo"k";
				}
				echo"<br>";
			}
			break;
		case 2:
			echo "hi 2";
			break;
		default:
			echo "default";
			break;
	}
}
?>