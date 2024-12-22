<?php
   include ("./header.php");
   ?>


<tr>
				<td class="navigation">Navigation</td>
				<td colspan="2" rowspan="2">					
	<h2>Commenting Your Code</h2>
	<a href="./lab4.php">Back to LAB 4 - Home</a>
	<p>
		Commenting your code is a good habit to have. Entering comments in HTML documents helps you (and others who might have
		to edit your document later) keep track of what's going on in large documents. Comments also allow you to write notes 
		to yourself during the development process, or to comment out parts of code when you are testing your scripts, so the 
		code is not executed.<br/>
		<br/>
		HTML comments are ignored by the browser and are contained within <!-- and --> tags. For example, the following comment 
		reminds you that the next bit of HTML code contains a logo graphic:
		<br/>
		<!-- logo graphic goes here --><br/>
		PHP uses comments too, which are ignored by the PHP parser. PHP comments are usually preceded by double slashes, like 
		this:<br/>
		<br/>
		// this is a comment in PHP code<br/>
		<br/>
		But you can use other types of comments, such as<br/>
		<br/>
		# This is shell-style style comment<br/>
		<br/>
		and<br/>
		<br/>
		/* This begins a C-style comment that runs<br/>
		onto two lines */<br/>
		<br/>
		Create a script full of comments so that you can see how they're ignored. Yes, I'm telling you to write a script that
		does absolutely nothing!<br/>
		<br/>
	</p>
		<ol>
			<li>Open a new file in your text editor.</li>
			<li>
				Type the following HTML:<br/><br/>
				&lt;HTML&gt;<br/>
				&lt;HEAD&gt;<br/>
				&lt;TITLE>Code Comments&lt;/TITLE&gt;<br/>
				&lt;/HEAD&gt;<br/>
				&lt;BODY&gt;<br/>
				<!-- This is an HTML comment. --><br/>
			</li>
			<li>
				Type the following PHP code:<br/><br/>
				&lt;?<br/>
				// This is a simple PHP comment.<br/>
				/* This is a C-style, multiline comment. You can make this as
				long as you'd like. */<br/>
				# Used to shells? Use this kind of comment.<br/>
				?&gt;<br/>
			</li>		
			<li>
				Add some more HTML so that the document is valid:<br/><br/>
				&lt;/BODY&gt;
				&lt;/HTML&gt;
			</li>
			<li>Save the file with the name comments.php.</li>
			<li>Place this file in the document root of your web server.</li>
			<li>Open your web browser and type http://127.0.0.1/comments.php.</li>
		</ol>
	<p>
		You should see absolutely nothing in your web browser, because all you did was print an HTML comment (which is ignored 
		by the browser). Because the PHP parser ignores comments and the PHP block didn't contain any actual commands, there 
		was no other output to display. If you view the source of this document in your web browser, you will notice that only 
		the HTML comment is visible. Although the PHP code was all comments, it was still parsed and therefore is not visible 
		to the users.<br/>
		<br/>
		HTML and PHP comments are used extensively throughout this book to explain blocks of code. Get used to reading 
		comments, and try to pick up the habit of using them. Writing clean, bug-free code that also contains comments and 
		plenty of white space for easy reading will make you popular among your developer peers, because they won't have to 
		work extra hard to figure out what your code is trying to do. In the next chapter, you'll learn all about variables, 
		or, as I like to call them, "those things with the dollar signs."
	</p>
	<a href="./lab4.php">Back to LAB 4 - Home</a>
	
</td>
			</tr>

                <?php
   include ("./footer.php");
   ?>