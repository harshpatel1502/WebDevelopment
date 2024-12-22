<?php
$file = "termtest2.php";
$date = "July 6, 2022";
$activity = "the termtest 2 is about discount calculator";
$title = "Test : Term Test 2";
?>	
<?php  include ("./header.php"); ?>	



	<p>	The term discount can be used to refer to many forms of reduction in price of a good or service.<br/>
    <br/>
    <br/>
	Two most common types of discounts are discounts in which you get a percent off, or a fixed amount off.<br/>
	<br/>
    <br/>
	A fixed amount off of a price refers to subtracting whatever the fixed amount is from the original price.<br/>
    <br/>
    <br/>
	A percent off of a price typically refers to getting some percent, say 10%, off of the original price of the product or service.<br/>
	</p>
	
	<?php
	$error = "";//is there any wrong in data then this will work
	$output = "";//if entered data is correct then this will work

    //here is the get and post methods applied




		if($_SERVER["REQUEST_METHOD"] == "GET")
		{
			$First = "";  //selling price
			$Second = ""; //discount price
			$Third = "";  //type of discount
		}
		else if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$First = $_POST["First"];//selling price
			$Second = $_POST["Second"];//discount price
			$Third = $_POST["Third"];//type of discount
			
        //validation of entered data
            


            if(!isset($First) || $First == "")
			{
				//Please enter a valid value
				$error .= " You must enter something in <u>Selling Price</u>!<br/>";
			}
			else if(!is_numeric($First))
			{
				//Please enter a valid value which must be a number
				//Instructions for data entry
				$error .= " The value entered <u>MUST</u> be a number in <u>Selling Price</u>!<br/>";
				//error because entered data is not valid, you have to enter valid value
				$First = "";
			}
			


			if(!isset($Second) || $Second == "")
			{
				//Please enter a valid value
				$error .= " You must enter something in <u>Discount</u>!<br/>";
			}
			else if(!is_numeric($Second))
			{
				//Please enter a valid value which must be a number
				//Instructions
				$error .= " The value entered <u>MUST</u> be a number in <u>Discount</u>!<br/>";
				//error because entered data is not valid
				$Second = "";
			}
			




			if(!isset($Third) || $Third == "")
			{
				//Please enter a valid value
				$error .= " You must select the <u>Discount type</u>!<br/>";
			}
			
//end of validations

//
//
//

//main calculation part

			if($error == "")
			{	
				if($Third == "percent")
				{
					$discountedprice = $First - $First*$Second/100;//discount counter
					$benefit = $First - $discountedprice;//benefit counter
				}
				else
				{
					$discountedprice = $First -$Second;//if the entered data is not in percentage form then it will automatically goes to fixed form
					$benefit = $Second;
				}


//end of calculation part


				?>
				
            
				<h3>amount You have to Pay: $<?php echo "$discountedprice"; ?> </h3>
				<h3>Your benefit after discount: $<?php echo "$benefit"; ?> </h3>
				<?php
				
			}
			else
			{	
				echo "<h3><b>$error</b></h3>";
			}
		}	

//end of the code. after this below is output details discribed.

	?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
		
			<p><b>Selling Price: $</b><input type="text" name="First" size="10" value="<?php echo $First ?>" /></p>
			<p><b>Discount: $</b><input type="text" name="Second" size="10" value="<?php echo $Second ?>" /></p>
			<p><b>Discount Type:</b></p>
			<input type="radio" name="Third" value="percent" /> <b>Percent</b><br />
			<input type="radio" name="Third" value="fixed" /> <b>Fixed</b><br />
			<input type="radio" name="Third" value="Data" /> <b>Data</b><br />
			
			<p><input type="submit" name="submit" value="Calculate" /></p>
		
		</form>
		
<?php include ("./footer.php"); ?>