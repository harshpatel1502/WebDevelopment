<?php
   include ("./header.php");
   ?>


<td >
	<h2><a href="../lab4.php">Lab 4 </a></h2>
	<h2>Assignment Operators</h2>
	<p>
		You've already seen an assignment operator at work: the equals sign is the basic assignment operator. Burn this into 
		your brain: = does not mean "equal to"! Instead, == (two equals signs) means "equal to," and the single = means "is 
		assigned to." In fact, you've also seen the concatenation operator in this chapter, as it is used to put strings 
		together.<br>
		<br>
		Take a look at the assignment operators in Table and prepare to write a new script.<br>
	</p>	
		<table>
			<caption>Assignment Operators</caption>
			<tbody><tr>
				<th >Operator</th>
				<th >Example</th>
				<th >Action</th>
			</tr>
			
			<tr>
				<td >+=</td>
				<td >$a += 3;</td>
				<td >Changes the value of a variable to the current value plus the value on the right side.</td>
			</tr>
			
			<tr>
				<td >-=</td>
				<td >$a -= 3;</td>
				<td >Changes the value of a variable to the current value minus the value on the right side.</td>
			</tr>
			
			<tr>
				<td >.=</td>
				<td >$a .= "string";</td>
				<td >Concatenates (adds on to) the value on the right side with the current value.</td>
			</tr>
		</tbody></table>
		<br><br>
	<p>
		Create a simple script to show how all of these assignment operators work. This script will assign an original value 
		to one variable and then change that value as the script executes, all the while printing the result to the screen.
	</p>	
		<ol>
			<li>
				Open a new file in your text editor and type the following HTML:<br><br>
				&lt;HTML&gt;<br>
				&lt;HEAD&gt;<br>
				&lt;TITLE&gt;Using Assignment Operators&lt;/TITLE&gt;<br>
				&lt;/HEAD&gt;<br>
				&lt;BODY&gt;<br>
			</li>
			<li>
				Start a PHP block. Create a variable with a value of 100 and then print it:<br><br>
				&lt;?<br>
				$origVar = 100;<br>
				echo "&lt;P&gt;Original value is $origVar&lt;/P&gt;";<br>
			</li>		
			<li>
				Add to that value and then print it:<br><br>
				$origVar += 25;<br>
				echo "&lt;P&gt;Added a value, now it's $origVar&lt;/P&gt;";<br>
			</li>
			<li>
				Subtract from that value and then print it:<br><br>
				$origVar -= 12;<br>
				echo "&lt;P&gt;Subtracted a value, now it's $origVar&lt;/P&gt;";<br>
			</li>
			<li>
				Concatenate a string and then print it:<br><br>
				$origVar .= " chickens";<br>
				echo "&lt;P&gt;Final answer: $origVar&lt;/P&gt;";<br>
			</li>
			<li>
				Close your PHP block and add some more HTML so that the document is valid:<br><br>
				?&gt;<br>
				&lt;/BODY&gt;<br>
				&lt;/HTML&gt;<br>
			</li>
			<li>Save the file with the name assignscript.php and place this file in the document root of your web server.</li>
			<li>Open your web browser and type http://127.0.0.1/assignscript.php.</li>
		</ol>
	<p>
		The results of your calculations will be printed to the screen. The next section moves to arithmetic operators, none 
		of which should be strange to you as long as you made it through your first few years of school.
	</p>
	
</td>

                <?php
   include ("./footer.php");
   ?>