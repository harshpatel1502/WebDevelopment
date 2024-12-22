<?php
   include ("./header.php");
   ?>

<td colspan="2">
				<h2>Arithmetic Operators</h2>
					<a href="./lab4.php">Back to LAB 4 - Home</a>
					<p>
						Arithmetic operators simply perform basic mathematical tasks. Take a look at Table 5.2, be sure you remember your basic 
						math, and start creating the test script for this section.<br/>
						<br/>
					</p>	
						<table class="border">
							<caption>Arithmetic Operators</caption>
							<tr>
								<th class="borders center">Operator</th>
								<th class="borders center">Example</th>
								<th class="borders center">Action</th>
							</tr>
							
							<tr>
								<td class="borders center">+</td>
								<td class="borders center">$b = $a + 3;</td>
								<td class="borders center">Adds values</td>
							</tr>
							
							<tr>
								<td class="borders center">-</td>
								<td class="borders center">$b = $a - 3;</td>
								<td class="borders center">Subtracts values</td>
							</tr>
							
							<tr>
								<td class="borders center">*</td>
								<td class="borders center">$b = $a * 3;</td>
								<td class="borders center">Multiplies values</td>
							</tr>
							<tr>
								<td class="borders center">/</td>
								<td class="borders center">$b = $a / 3;</td>
								<td class="borders center">Divides values</td>
							</tr>
							
							<tr>
								<td class="borders center">%</td>
								<td class="borders center">$b = $a % 3;</td>
								<td class="borders center">Returns the modulus, or remainder</td>
							</tr>
						</table>
						<br/><br/>
					<p>
						Create a simple script to show how all of these arithmetic operators work. This script assigns original values to two
						variables, performs mathematical operations, and prints the results to the screen.
					</p>
						<ol>
							<li>
								Open a new file in your text editor and type the following HTML:<br/>
								&lt;HTML&gt;<br/>
								&lt;HEAD&gt;<br/>
								&lt;TITLE>Using Arithmetic Operators&lt;/TITLE&gt;<br/>
								&lt;/HEAD&gt;<br/>
								&lt;BODY&gt;<br/>
							</li><br/>
							<li>
								Start a PHP block, create two variables with values, and print the values:<br/>
								&lt;?<br/>
								$a = 85;<br/>
								$b = 24;<br/>
								echo "&lt;P>Original value of \$a is $a and $b&lt;/P>";<br/>
								&nbsp;&nbsp;&nbsp;&nbsp; <b>Note</b> If you escape the dollar sign (\$), it will print literally instead of being interpreted as a variable.
							</li><br/>		
							<li>
								Add the two values and print the result:<br/>
								$c = $a + $b;<br/>
								echo "&lt;P>Added \$a and \$b and got $c&lt;/P>";<br/>
							</li><br/>
							<li>
								Subtract the two values and print the result:<br/>
								$c = $a - $b;<br/>
								echo "&lt;P>Subtracted \$b from \$a and got $c&lt;/P>";<br/>
							</li><br/>
							<li>
								Multiply the two values and print the result:<br/>
								$c = $a * $b;<br/>
								echo "&lt;P>Multiplied \$a and \$b and got $c&lt;/P>";<br/>
							</li><br/>
							<li>
								Divide the two values and print the result:<br/>
								$c = $a / $b;<br/>
								echo "&lt;P>Divided \$a by \$b and got $c&lt;/P>";<br/>
							</li><br/>
							<li>
								Check the modulus of the two values and print the result:<br/>
								$c = $a % $b;<br/>
								echo "&lt;P>The modulus of \$a and \$b and is $c&lt;/P>";<br/>
							</li><br/>
							<li>
								Close your PHP block and add some more HTML so that the document is valid:<br/>
								?><br/>
								&lt;/BODY><br/>
								&lt;/HTML><br/>
							</li><br/>
							<li>Save the file with the name arithmeticscript.php and place this file in the document root of your web server</li>
							<li>Open your web browser and type http://127.0.0.1/arithmeticscript.php.</li>
						</ol>
					<p>
						Your original values, as well as the results of the various calculations, are printed to the screen.<br/>
						<br/>
						Next you move to comparison operators, which are crucial in coding, but not nearly as much fun as arithmetic operators.
					</p>
				
				</td>
                <?php
   include ("./footer.php");
   ?>