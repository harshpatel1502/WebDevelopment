<?php
   include ("./header.php");
   ?>
			
	        <table border="1" align="center">
			<caption>HTML Table Tags</caption>
		    <tbody>
		    <tr>
		    <th>Tag</th>
			<th>Description</th>
			</tr>
			<tr>
			<td>table</td>
		    <td>
			Denotes the start of an HTML table in a web page
		    </td>
			</tr>
			<tr>
			<td>tr</td>
		    <td>
			Denotes the start of a row in an HTML table (NOTE: these tags must exist inside <.table>...<./table>tags in order to be valid, and work correctly)			   
		    </td>
			</tr>
			<tr>
			<td>td</td> 
		    <td>
			Denotes a cell (ot Table Data)in an HTML table(NOTE: these tags must exist inside <.tr>...<./tr> tags in order to be valid,and work correctly
			</td>
			</tr>
			<tr>
			<td>th</td>
			<td>
		    The HTML td tag is used for specifying a cell or table data within a table
		    </td>
			</tr>
			<tr>
			<td>caption</td>
			<td>Will place a caption on an HTML table (NOTE: this tag must be implemented right after the opening <.table> tag in order to be valid and work correctly</td>
			</tr>
			</tbody>
			</table>
			
			
			<table border="1" align="center">
			<tbody>
			<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Year of publication</th>
			<th>Description</th>
			</tr>
			<tr>
			<td>Catcher in the Rye</td>
			<td>J.D.Salinger</td>
			<td>1951</td>
			<td>
			he Catcher in the Rye is a novel by J. D. Salinger, partially published in serial form in 1945–1946 and as a novel in 1951. It was originally intended for adults but is often read by adolescents for its themes of angst, alienation, and as a critique of superficiality in society.
			</td>
			</tr>
			<tr>
			<td>Vimy</td>
			<td>Pierre Beton</td>
			<td>1986</td>
			<td>
			the Battle of Vimy Ridge was part of the Battle of Arras, in the Nord-Pas-de-Calais region of France, during the First World War. 
			</td>
			</tr>
			<tr>
			<td>Hunt for Red October</td>
			<td>Tom Clancy</td>
			<td>1984</td>
			<td>
            the Hunt for Red October is the debut novel by American author Tom Clancy, first published on October 1, 1984, by the Naval Institute Press
			</td>
			</tr>
			</tbody>
			</table>
			<!-- This will create a table of Time Table-->





<table border="4" cellspacing="1" align="center" width="40%" cellpadding="10">
<tr>
<th>time</th>
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
</tr>
<tr>
<td>10am</td>
<td></td>
<td rowspan="2" colspan="2" align="center"> WEBD2201<br/> 33141 Class<br/>C-wing</td>
<td></td>
<td></td>
</tr>
<tr>
<td>11am</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>12pm</td>
<td></td>
<td>DCOM 2100-01</td>
<td>LINU 4100-01<br/> 33188 Class<br/>C-wing</td>
<td>CSYS 212200-04<br/> 32936 Class<br/>H-wing</td>
<td></td>
</tr>
<tr>
<td>1pm</td>
<td></td>
<td></td>
<td></td>
<td>LINU 4100-01<br/> 33188 Class<br/>H-wing</td>
<td>DCOM 2100-01<br/> 32988 Class<br/>H-wing</td>
</tr>
</table>
<hr/>


<?php
            include ("./footer.php");
            ?>

		