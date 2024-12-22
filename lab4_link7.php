<?php
   include ("./header.php");
   ?>
<tr>
				<td class="navigation">Navigation</td>
				<td colspan="2" rowspan="2">					
	<h2>Constants 2</h2>
	<a href="./lab4.php">Back to LAB 4 - Home</a>
	<p>
		Some predefined constants include:<br/>
	</p>
		<ul>
			<li>__FILE__ The name of the script file being parsed.</li>
			<li>__LINE__ The number of the line in the script being parsed.</li>
			<li>PHP_VERSION The version of PHP in use.</li>
			<li>PHP_OS The operating system using PHP.</li>
		</ul>
	<p>	
		Let's test these constants:<br/>
	</p>
		<ol>
			<li>
				Open a new file in your text editor and open a PHP block:<br/><br/>
				&lt;?
			</li>
			<li>
				Use the echo statement to display an introductory string, and concatenate the __FILE__ constant to the end of 
				it:<br/><br/>
				echo "&lt;br>This file is ".__FILE__;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp; <b>Note</b> <i>Concatenate</i> means to add one string to the end of another, making a 
				new string.
			</li>		
			<li>
				Use the echo statement to display an introductory string, and concatenate the __LINE__ constant to the end of 
				it:<br/><br/>
				echo "&lt;br>This is line number ".__LINE__;<br/>
			</li>
			<li>Use the echo statement to display an introductory string, and concatenate the PHP_VERSION constant to the end 
			of it:<br/><br/>
			echo "&lt;br>I am using ".PHP_VERSION;
			</li>
			<li>Use the echo statement to display an introductory string, and concatenate the PHP_OS constant to the end of it. 
			Also close up the PHP block:<br/><br/>
				echo "&lt;br>This test is being run on ".PHP_OS;<br/>
				?&gt;<br/>
			</li>	
			<li>Save the file with the name constants2.php and place this file in the document root of your web server.</li>
			<li>Open your web browser and type http://127.0.0.1/constants2.php.</li>
		</ol>
	<p>
		You should see the strings you typed, plus the values of the constants. Your values will likely differ from those you 
		see here.
	</p>
	<a href="./lab4.php">Back to LAB 4 - Home</a>
	
</td>
			</tr>

                <?php
   include ("./footer.php");
   ?>