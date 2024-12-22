<?php
$file = "lab7auto.temp.php";
$date = "July 24, 2022";
$task = "";
$banner = "LAB 7 auto";
?>	
<?php include ("./header.php"); ?>	
<center>
	hello
<p>
This page utilizes several postgreSQL method calls.  Such as pg_connect(),
pg_query(), and pg_fetch_result().
</p>
<!-- setup the table -->
<table border="1" width="75%">
	<tr><th width="50%">Manufacturer</th><th width="15%">Year</th><th width="35%">Owner</th></tr>

<?php
$output = ""; //Set up a variable to store the output of the loop 
//connect
$conn = pg_connect("host=127.0.0.1 dbname=patelh3_db user=patelh3 password=aaaa"  );  
//N.B. replace the YOUR variables with your specific information
//NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead

//issue the query
$sql = "SELECT movies.title, movies.year, actors.name
			FROM movies, actors
			WHERE movies.actor=actors.id
			ORDER BY movies.year ASC";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);

//generate the table
	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>\n\t</tr>"; 
	}

	echo $output; //display the output
?>
</table>
<!-- end the table -->
</center>
<?php include ("./footer.php"); ?>
