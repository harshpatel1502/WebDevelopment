<?php
   include ("./header.php");
   ?>
<h2><a href="./lab4.php">Lab 4 </a></h2>
<table >
		<caption> Basic PHP Start and End Tags</caption>
		<table>
			<tr>
				<th >Opening Tag</th>
				<th >Closing Tag</th>
			</tr>
			
			<tr>
				<td>&lt;?php</td>
				<td>?&gt;</td>
			</tr>
			
			<tr>
				<td >&lt;?</td>
				<td >?&gt;</td>
			</tr>
			
			<tr>
				<td>&lt;script language="php"&gt;</td>
				<td>&lt;/script?&gt;</td>
			</tr>
		</table>
		<p>
		three different type of script
		</p>
		<ol>
			<li>Open a new file in vs code</li>
			<li>
				first tag type:<br></br>
				&lt;?php<br>
				echo "&lt;P&gt;first tag type Test.&lt;/P&gt;";
				?&gt;
			</li>
			<li>
				second tag type:<br></br>
				&lt;?php<br>
				echo "&lt;P&gt;second tag type Test.&lt;/P&gt;";
				?&gt;
			</li>		
			<li>
				third tag type:<br></br>
				&lt;script language="php"&gt;</br>
				echo "&lt;P&gt;third tag type Test.&lt;/P&gt;";
				&lt;/script&gt;
			</li>
		</ol>

</table>
<?php
   include ("./footer.php");
   ?>