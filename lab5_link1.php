<?php 
   include ("./header.php");
   ?>
   <a href="./lab5.php">Lab 5</a><br/>
		<form method="post" action="./lab5_link1.php">
			<p>Value 1: <input type="text" name="val1" size="10" /></p>
			<p>Value 2: <input type="text" name="val2" size="10" /></p>
			<p>Calculation:<br/></p>
			<p>
			<input type="radio" name="calc" value="add" />add
			<input type="radio" name="calc" value="subtract" />subtract
			<input type="radio" name="calc" value="multiply" />multiply
			<input type="radio" name="calc" value="divide" />divide </p>
			<p><input type="submit" name="submit" value="Calculate" /></p>
		</form>
<?php
   include ("./footer.php");
   ?>