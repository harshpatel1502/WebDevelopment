<?php
   include ("./header.php");
   ?>

<td >
	<h2><a href="../lab4.php">Lab 4 </a></h2>
	<h2>Logical Operators</h2>
	<p>
		Logical operators allow your script to determine the status of conditions (such as the comparisons in the preceding 
		section). In the context of if…else or while statements, logical operators execute certain code based on which 
		conditions are true and which are false.<br>
		<br>
		For now, focus on the &amp;&amp; (and) and || (or) operators to determine the validity of a few comparisons.<br>
	</p>
		<br>
		<ol>
			<li>
				Open a new file in your text editor and type the following HTML:<br><br>
				&lt;HTML&gt;<br>
				&lt;HEAD&gt;<br>
				&lt;TITLE&gt;Using Comparison Operators&lt;/TITLE&gt;<br>
				&lt;/HEAD&gt;<br>
				&lt;BODY&gt;<br>
			</li>
			<li>
				Start a PHP block and create two variables with values. The comparisons in this script are based on these two
				variables:<br><br>
				&lt;?<br>
				$degrees = "95";<br>
				$hot = "yes";<br>
			</li>		
			<li>
				if (($degrees &gt; 100) || ($hot == "yes")) {<br>
					echo "&lt;P&gt;TEST 1: It's &lt;strong&gt;really&lt;/strong&gt; hot!&lt;/P&gt;";<br>
				} else {<br>
					echo "&lt;P&gt;TEST 1: It's bearable.&lt;/P&gt;";<br>
				}<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>Note</b> Because this conditional expression is actually made up of two smaller 
				conditional expressions, an extra set of parentheses surrounds it.
			</li>
			<li>
				if (($degrees &gt; 100) &amp;&amp; ($hot == "yes")) {<br>
					echo "&lt;P&gt;TEST 2: It's &lt;strong&gt;really&lt;/strong&gt; hot!&lt;/P&gt;";<br>
				} else {<br>
					echo "&lt;P&gt;TEST 2: It's bearable.&lt;/P&gt;";<br>
				}<br>
			</li>
			<li>
				Close your PHP block and add some more HTML so that the document is valid:<br><br>
				?&gt;<br>
				&lt;/BODY&gt;<br>
				&lt;/HTML&gt;<br>
			</li>
			<li>
				Save the file with the name logicalscript.php, and place this file in the document root of your web server.
			</li>
			<li>Open your web browser and type http://127.0.0.1/logicalscript.php.</li>
			
		</ol>
	<p>
		The text message associated with each comparison result is printed to the screen. In the first test, only one 
		expression has to be true, and that is satisfied by $hot having a value of "yes." In the second test, both expressions 
		have to be true, and they are not; $degrees has a value of 95, which is not greater than 100, even though $hot has a 
		value of "yes." In this case, the second message is displayed.<br>
		<br>
		Numerous other types of operators are used in PHP. They are explained as they appear throughout the book. The operators 
		listed in this chapter give you a solid foundation in the basics of using variables and operators. In the next chapter, 
		you'll use your newly acquired knowledge of variables and operators to build scripts that perform more intriguing 
		actions than those explained so far.
	</p>

</td>
				
				</td>
                <?php
   include ("./footer.php");
   ?>