<?php
   include ("./header.php");
   ?>


<p>
		escape  characters sis as imp as semicolon such as 
		as quotation marks. When you use quotation marks inside quotation marks, the inner pair must delineated 
		from the outside  by using the pair of escape (\) character (aka backslash).
		
		<br><br>
	     how to solve escape caractr error<br>
	</p>
		<ol>
			<li>Open a new file in vs code.</li>
			<li>
				use following code HTML:<br><br>
				&lt;HTML&gt;<br>
				&lt;HEAD&gt;<br>
				&lt;TITLE&gt;Trying For Another Error&lt;/TITLE&gt;<br>
				&lt;/HEAD&gt;<br>
				&lt;BODY&gt;
			</li>
			<li>
			use following code PHP code:<br><br>
				&lt;?<br>
				echo "&lt;P&gt;It is "fantastic!"&lt;/P&gt;";<br>
				?&gt;
			</li>		
			<li>
				Add some more HTML so that the document is valid:<br><br>
				&lt;/BODY&gt;
				&lt;/HTML&gt;
			</li>
			<li>Save as errorscript2.php.</li>
		</ol><br>
	<p>
		Another parse error. look at the PHP code:<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp; echo "&lt;P&gt;It is "fantastic"!&lt;/P&gt;";<br><br>	
		Because code  have a set of quotation marks within another set of quotation marks, that inner set has to be escaped.<br>
		do simple fix:<br><br>
	</p>
		<ol>
			<li>Open the errorscript2.php file.</li>
			<li>
				On line 9, escape the inner quotation marks by placing a backslash before each one:<br><br>
				
				echo "&lt;P&gt;It is  \"fantastic\"!&lt;/P&gt;";<br>
			
			</li>
	<p>
		inner quotation marks are escaped, the PHP parser  skip them
	</p>

                <?php
   include ("./footer.php");
   ?>