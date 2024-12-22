<?php
$file = "lab6.php";
$date = "July 2, 2022";
$task = "";
$banner = "LAB 6 : Self-referring Forms with Data Validation";
?>	
<?php include ("./header.php"); ?>	
	
	<?php
	$error = "";
	$Output = "";
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$First = "";
			$Second = "";
			$Third= "";
		}
		else if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$First = $_POST["First"];
			$Second = $_POST["Second"];
			$Third= $_POST["Third"];
			
			if(!isset($First) || $First == "")
			{
				//if user has not entered anything then this message will displayed.
				$error .= "PLEASE ENTER VALID VALUE";
			}
		
			
			if(!isset($Second) || $Second == "")
			{
					//if user has not entered anything then this message will displayed.
				$error .= "PLEASE ENTER VALID VALUE";
			}
			
			
			if(!isset($Third) || $Third== "")
			{
					//if user has not entered anything then this message will displayed.
				$error .= "PLEASE ENTER VALID VALUE";
			}
			
			$max = ($First + $Second)/2 - $First;
			if($error == "" && $max <= 100)
			{
				if($First>$Second)
				{
					$c = $First;
					$First = $Second;
					$Second = $c;
					if($Third<0)
					{
						$Third= -$Third;
					}
				}
				
				?>
				<p>details after calculation: <?php echo "$Output"; ?> </p>
				<table >
					<tr>
						<th class="borders">C</th>
						<th class="borders">F</th>
					</tr><?php
					for($i=$First; $i <= $Second ; $i += $Third)
					{
						echo "<tr>";
						$celsius = $i;
						$fahrenheit = (9*$celsius/5) + 32;
						echo "<td class = 'borders'>$celsius &deg;</td>";
						echo "<td class = 'borders'>$fahrenheit &deg;</td>";
					echo "</tr>";
					}
				echo "</table>";
				
			}
			else
			{
				if($max>=100)
				{
					$error .= " Iterations exceeds than 100!!";
				}
				echo "<b>$error</b>";
			}
		}	
	?>
	
	
	
	
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
		
			<p>Starting Temperature : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="First" size="10" value="<?php echo $First ?>" /></p>
			<p>Stopping Temperature : &nbsp;&nbsp;&nbsp; <input type="text" name="Second" size="10" value="<?php echo $Second ?>" /></p>
			<p>Temperature Increament : <input type="text" name="Third" size="10" value="<?php echo $Third?>" /></p>
			<p><input type="submit" name="submit" value="Create Temperature Conversion Table" /></p>
		
		</form>
		
<?php include ("./footer.php"); ?>