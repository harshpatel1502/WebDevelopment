<?php
$file = "index(2).php";
$date = "23/07/2022";
$title = "Lab 7: Database Intro: ";
$desc = "This web page is for my lab 4.";
$banner = "Lab 7: Database Intro";
include("./header.php");
?>
<!-- Name = Harsh Patel 
     Student id = 100852669  
-->

<center>
<p>
This page utilizes several postgreSQL method calls.  Such as pg_connect(),
pg_query(), and pg_fetch_result().
</p>
<!-- setup the table -->
<table border="1" width="75%">
<tr><th width="5%">sr.no</th>
	<th width="25%">Manufacturer</th>
	<th width="25%">Model</th>
	<th width="10%">Year</th>
	 <th width="25%">Owner</th>
	 <th width="10%">Price</th></tr>
<?php
$output = ""; //Set up a variable to store the output of the loop 
//connect
$conn = pg_connect("host=127.0.0.1 dbname=patelh3_db user=patelh3 password=aaaa");  
//N.B. replace the YOUR variables with your specific information
//for access on localhost pleae select right path

//issue the query
$sql = "select * from automobile";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);

//creat the table
	for($i = 0; $i < $records; $i++){  //loop all and displaythe output variable
		echo "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, 0)."</td>"; 
		echo "\n\t\t<td>".pg_fetch_result($result, $i, 1)."</td>"; 
		echo "\n\t\t<td>".pg_fetch_result($result, $i, 2)."</td>";
        echo "\n\t\t<td>".pg_fetch_result($result, $i, 3)."</td>";
        echo "\n\t\t<td>".pg_fetch_result($result, $i, 4)."</td>";
        echo "\n\t\t<td>".pg_fetch_result($result, $i, 5)."</td>\n\t</tr>"; 
	}

	
?>
</table>
<!-- end the table -->
</center>
   <?php
   include ("./footer.php");
   ?>