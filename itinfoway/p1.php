<?php
	echo "hii";
?>
<br>
<?= "hiii"?>
<br>

<?php
	for($i=1;$i<=5;$i++){
		for($j=1;$j<=$i;$j++){
			echo " *";
		}
		echo "<br>";
	}
?>
<br>
<?php
	for($i=1;$i<=5;$i++)
	{
		for($j=1;$j<=6-$i;$j++)
		{
			echo " *";
		}
		echo "<br>";
	}
?>

<?php
	for($i=1;$i<=5;$i++)
	{
		for($j=1;$j<=5-$i;$j++)
		{
			echo "&nbsp;";
		}
		for($k=1;$k<=$i;$k++)
		{
			echo "-";
		}
		for($j=1;$j<=$i;$j++){
			echo "-";
		}
		echo "<br>\n";
	}
	for($i=1;$i<=5;$i++)
	{
		for($j=1;$j<=$i;$j++){
			echo "&nbsp;";
		}
		for($j=1;$j<=6-$i-1;$j++)
		{
			echo "-";
		}
		for($j=1;$j<=6-$i-1;$j++)
		{
			echo "-";
		}
		echo "<br>";
	}
?>
<br>
<?php
	for($i=1;$i<=5;$i++)
	{
		for($j=1;$j<=6-$i;$j++)
		{
			echo "$";
		}
		for($k=1;$k<=$i;$k++)
		{
			echo "+";
		}
		for($j=1;$j<$i;$j++)
		{
			echo "+";
		}
		for($j=5;$j>=$i;$j--)
		{
			echo "$";
		}
		echo "<br>";
	}
	//-----------------------------------------------------------------------------
	for($i=1;$i<=5;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo "$";
		}
		for($j=1;$j<=6-$i;$j++)
		{
			echo "+";
		}
		for($j=5;$j>$i;$j--)
		{
			echo "+";
		}
		for($j=5;$j>=6-$i;$j--)
		{
			echo "$";
		}
		echo "<br>";
	}
//----------------------------------------------------
for($i=1;$i<=5;$i++)
{
	
}

?>
<hr>
<?php
	$i=0;
	
	while($i<20)
	{ 
		if($i%2!=0)
		{
			echo $i;
		}
		$i++;
	}
?>
<?php
	for($i=0;$i<20;$i++)
	{
		if($i%2==0)
		{
			echo "$i<br>";
		}
	}
?>
<?php
	for($i=0;$i<20;$i++)
		if($i%2!=0)
		{
			echo "$i<br>";
		}
		
?>
<hr>
<?php
	$a=0;
	for($i=0;$i<=5;$i++)
	{
		for($j=0;$j<20;$j++)
		{
			if($a%2!=0)
			{
				echo "&nbsp;$a";
				
			}
			$a++;
		}
		echo "<br>";
	}
?>
<hr>
<?php
$a=0;
	for($i=1;$i<=5;$i++)
	{
		for($j=1;$j<=5-$i;$j++)
		{
			echo "&nbsp;";
		}
		for($k=1;$k<=$i;$k++)
		{
			echo $a;
			$a++;
		}
		
		
		echo "<br>\n";
	}
	
?>