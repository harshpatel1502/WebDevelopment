<?php
   include ("./header.php");
   ?>

<td>
<h2><a href="../lab4.php">Lab 4 </a></h2>
<h2>Constants</h2>
	<p>
		A <i>constant</i> is an identifier for a value that cannot change during the course of a script. Once a constant has a value, 
		it remains through the constant's execution lifetime. Constants can be user-defined, or you can use some of the 
		predefined constants that PHP always has available. Unlike simple variables, constants do not have a dollar sign 
		before their names, and they are usually uppercase to show their difference from scalar variables. Next, you'll test 
		the user-defined type.<br>
	</p>	
		<ol>
			<li>
				Open a new file in your text editor and open a PHP block:<br><br>
				&lt;?
			</li>
			<li>
				The function used to define a constant is called define(), and it requires the name of the constant and 
				the value you want to give it. Here you define a constant called MYCONSTANT with a value of "This is a 
				test of defining constants.".<br><br>
				define("MYCONSTANT", "This is a test of defining constants.");
			</li>		
			<li>
				Print the value of the constant, and then close the PHP block:<br><br>
				echo MYCONSTANT;<br>
			</li>
			<li>Save the file with the name constants.php and place this file in the document root of your web server.</li>
			<li>Open your web browser and type http://127.0.0.1/constants.php.</li>
		</ol>	
	
</td>

                <?php
   include ("./footer.php");
   ?>