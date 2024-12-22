<?php
   include ("./header.php");
   ?>

<tr>
				<td class="navigation">Navigation</td>
				<td colspan="2" rowspan="2">					
	<h2>Relational Operators</h2>
	<a href="./lab4.php">Back to LAB 4 - Home</a>
	<p>
		It should come as no surprise to you that comparison operators compare two values. As with the arithmetic operators,
		you have probably already seen most of the comparison operators, but might not know what they are called. Take a look 
		at Table 5.3, and then you can start creating the test script for this section.<br/>
		<br/>
	</p>	
		<table class="border">
			<caption>Relational Operators</caption>
			<tr>
				<th class="borders center">Operator</th>
				<th class="borders center">Definition</th>
			</tr>
			
			<tr>
				<td class="borders center">==</td>
				<td class="borders center">Equal to</td>
			</tr>
			
			<tr>
				<td class="borders center">!=</td>
				<td class="borders center">Not equal to</td>
			</tr>
			
			<tr>
				<td class="borders center">&gt;</td>
				<td class="borders center">Greater than</td>
			</tr>
			<tr>
				<td class="borders center">&lt;</td>
				<td class="borders center">Less than</td>
			</tr>
			
			<tr>
				<td class="borders center">&gt;=</td>
				<td class="borders center">Greater than or equal to</td>
			</tr>
			<tr>
				<td class="borders center">&lt;=</td>
				<td class="borders center">Less than or equal to</td>
			</tr>
		</table>
		<br/><br/>
	<p>
		The result of any of these comparisons is either true or false. This isn't much fun, but you can act on the result 
		using control statements such as if…else and while to perform a specific task.<br/>
		<br/>
		Create a simple script to show the result of some comparisons, using the if…else control statements to print a result
		to the screen.<br/>
	</p>
		<ol>
			<li>
				Open a new file in your text editor and type the following HTML:<br/><br/>
				&lt;HTML&gt;<br/>
				&lt;HEAD&gt;<br/>
				&lt;TITLE>Using Comparison Operators&lt;/TITLE&gt;<br/>
				&lt;/HEAD&gt;<br/>
				&lt;BODY&gt;<br/>
			</li>
			<li>
				Start a PHP block, create two variables with values, and print the values:<br/><br/>
				&lt;?<br/>
				$a = 21;<br/>
				$b = 15;<br/>
				echo "&lt;P>Original value of \$a is $a and $b&lt;/P>";<br/>
			</li>		
			<li>
				Within an if…else statement, test whether $a is equal to $b. Depending on the answer (true or false), one of 
				the echo statements will print:<br/><br/>
				if ($a == $b) {<br/>
					echo "&lt;P>TEST 1: \$a equals \$b&lt;/P>";<br/>
				} else {<br/>
					echo "&lt;P>TEST 1: \$a is not equal to \$b&lt;/P>";<br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>Note</b> Conditional expressions are enclosed in parentheses, such as this:<br/><br/>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if ($a == $b)
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and not this:

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if $a == $b
			</li>
			<li>
				Within an if…else statement, test whether $a is equal to $b. Depending on the answer (true or false), one of 
				the echo statements will print:<br/><br/>
				if ($a != $b) {<br/>
					echo "&lt;P>TEST 2: \$a is not equal to \$b&lt;/P>";<br/>
				} else {<br/>
					echo "&lt;P>TEST 2: \$a is equal to \$b&lt;/P>";<br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>Note</b> The curly braces { and } separate the blocks of statements within a control
				structure.
			</li>
			<li>
				Within an if…else statement, test whether $a is equal to $b. Depending on the answer (true or false), one of 
				the echo statements will print:<br/><br/>
				if ($a &gt; $b) {<br/>
					echo "&lt;P>TEST 3: \$a is greater than to \$b&lt;/P>";<br/>
				} else {<br/>
					echo "&lt;P>TEST 3: \$a is not greater than \$b&lt;/P>";<br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>Note</b> The curly braces { and } separate the blocks of statements within a control
				structure.
			</li>
			<li>
				Within an if…else statement, test whether $a is equal to $b. Depending on the answer (true or false), one of 
				the echo statements will print:<br/><br/>
				if ($a &lt; $b) {<br/>
					echo "&lt;P>TEST 4: \$a is less than \$b&lt;/P>";<br/>
				} else {<br/>
					echo "&lt;P>TEST 4: \$a is not less than \$b&lt;/P>";<br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>Note</b> The curly braces { and } separate the blocks of statements within a control
				structure.
			</li>
			<li>
				Within an if…else statement, test whether $a is equal to $b. Depending on the answer (true or false), one of 
				the echo statements will print:<br/><br/>
				if ($a &gt;= $b) {<br/>
					echo "&lt;P>TEST 5: \$a is greater than or equal to \$b&lt;/P>";<br/>
				} else {<br/>
					echo "&lt;P>TEST 5: \$a is not greater than or equal to \$b&lt;/P>";<br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>Note</b> The curly braces { and } separate the blocks of statements within a control
				structure.
			</li>
			<li>
				Within an if…else statement, test whether $a is equal to $b. Depending on the answer (true or false), one of 
				the echo statements will print:<br/><br/>
				if ($a &lt;= $b) {<br/>
					echo "&lt;P>TEST 6: \$a is less than or equal to \$b&lt;/P>";<br/>
				} else {<br/>
					echo "&lt;P>TEST 6: \$a is not less than equal to \$b&lt;/P>";<br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>Note</b> The curly braces { and } separate the blocks of statements within a control
				structure.
			</li>
			<li>
				Close your PHP block and add some more HTML so that the document is valid:<br/><br/>
				?><br/>
				&lt;/BODY><br/>
				&lt;/HTML><br/>
			</li>
			<li>Save the file with the name comparisonscript.php, and place this file in the document root of your web server.</li>
			<li>Open your web browser and type http://127.0.0.1/comparisonscript.php.</li>
			
		</ol>
	<p>
		The original values, as well as the results of the various comparisons, are printed to the screen. The last group 
		of operators you'll tackle are logical operators, which are also used frequently inside blocks of code.
	</p>
	<a href="./lab4.php">Back to LAB 4 - Home</a>
	
</td>
				
				</td>
                <?php
   include ("./footer.php");
   ?>