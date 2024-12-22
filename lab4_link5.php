<?php
   include ("./header.php");
   ?>


<th colspan="2" class="forwidth80 , header"> 
				<h1>Lab 4: PHP Chapter Files From Textbook</h1> 
				</th>
				
			</tr>
			
			<tr>
				
				<td class="nagivation textaligntop textalignleft">		
					<h1> <br/> Navigation </h1>
					<br/> <a href ="./index.php">Web_Development Index Page</a>
					<br/> <a href ="./lab1.php">Lab 1: Basic XHTML Pages </a>
					<br/> <a href="./lab2.php"> Lab 2: HTML TAG </a>
					<br/> <a href="./lab3.php"> Lab 3: Formating and Layout with Styles </a>
					<br/> <a href="./lab4.php"> Lab 4: PHP Chapter Files From Textbook </a>
					<br/> <a href="./lab5.php"> Lab 5: Basic of PHP Scripting </a>
					<br/>
				</td>

				<td colspan="2">
					<h2>PHP Variable and Value Types </h2>
					<a href="./lab4.php">Back to LAB 4 - Home</a>
					
					<br/> When you assign a value to a variable, you usually assign a value of one of the following types:
					<ul>
						<li><b>Integers.</b> Whole numbers (numbers without decimals). Examples are 1, 345, 
						     and 9922786.
						</li>
						<li><b>Floating-point numbers ("floats" or "doubles").</b> Numbers with decimals. 
						    Examples are 1.5, 87.3446, and 0.88889992.
						</li>
						
						<li><b>Strings.</b> Text and/or numeric information, specified within double quotes (" ") or single quotes (' ').
						</li>
					</ul>
					
					<br/>As you begin your PHP script, plan your variables and variable names carefully, and use comments 
					    in your code to remind yourself of the assignments you have made.
					<br/>
					<br/>Create a simple script that assigns values to different variables and then simply prints the values to the screen.
					<ol>
						<li>Open a new file in your text editort ype the following HTML:
							<br/> &lt;HTML&gt;
							<br/> &lt;Head&gt;
							<br/> &lt;Title&gt;Printing Varaiables&lt;/Title&gt;
							<br/> &lt;/Head&gt;
							<br/> &lt;/Body&gt;
						</li><br/>
						<li> Add a PHP block and create a variable that holds an integer:
						<br/>&lt;?
						<br/>$intVar = "9554215464";
						<br/><br/>
						</li>
						<li> Create a variable that holds a floating-point number:
						<br/>$floatVar = "1542.2232235";
						<br/>
						<br/>
						</li>
						<li>
							Create a variable that holds a string:
							
							<br/>$stringVar = "This is a string.";
						</li>
						<br/>
						<li>
							Add an echo statement for each variable:
							<br/> echo "&lt;P&gt;integer: $intVar&lt;/p&gt;";
							<br/> echo "&lt;P&gt;integer: $floatVar&lt;/p&gt;";
							<br/> echo "&lt;P&gt;integer: $stringVar&lt;/p&gt;";
						</li><br/>
						<li>
							Close your PHP block and add some more HTML so that the document is valid:
							<br/>?&gt;
							<br/>&lt;/BODY&gt;
							<br/>&lt/HTML&gt;
						</li><br/>
						<li> Save the file with the name printvarscript.php. </li>
						<li> Place this file in the document root of your web server.</li>
						<li> Open your web browser and type http://127.0.0.1/comments.php. In your web
						     browser, you should see the results of your script.
						</li><br/>
					</ol>
					
				</td>
		
</tr>

                <?php
   include ("./footer.php");
   ?>