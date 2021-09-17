<table border="1" width="300px">
<?php
	for($i=0;$i<5;$i++)
	{
		?>
			<tr>
		<?php
		for($j=0;$j<5;$j++)
		{
			if($j<=$i)
			{
		?>
			<td><?=$i?></td>
		<?php
			}
			else
			{
		?>
			<td></td>	
			<?php
			}
			
		}
		?>
		</tr>
		<?php
	}
?>
</table>
<hr>
<table>
<?php
	for($i=0;$i<5;$i++)
	{
	
			echo "<tr>";
		for($j=0;$j<5;$j++)
		{
			echo "<td>".$i."</td>";
		
		}
		
			echo "</tr>";
		
	}
?>
</table>
<hr>
<table>
	<?php
		for($i=0;$i<10;$i++)
		{
		?>
			<tr>
		<?php
			for($j=0;$j<10;$j++)
			{
		?>
				<td><?=$j?></td>
		<?php
			}
		?>
			</tr>
		<?php
		}
	?>
</table>
<hr>
<table>
<?php
	for($i=0;$i<4;$i++)
	{
		?>
		<tr>
		<?php
		for($j=0;$j<5;$j++)
		{
			?>
			<td><?=$i?></td>
			<?php
		}
		?>
		</tr>
		<?php
	}
?>
</table>
<hr>


<table border="1" width="300px">
<?php
	for($i=0;$i<5;$i++)
	{
		?>
		<tr>
		<?php
		for($j=0;$j<5;$j++)
		{
		?>
		<?php
		if($j<=$i)
		{
		?>
			<td><?="j"?></td>
		<?php
		}
		else
		{
			?>
			<td></td>
			<?php
		}
		?>
		<?php
		}
		?>
		</tr>
		<?php
	}
?>
</table>