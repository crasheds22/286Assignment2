<?php
	session_start();	
	echo "Hello " . $_SESSION["firstName"];
	
	echo "<span class=\"logout\">
	Username: ". $_SESSION["currentUser"]." 
	<input type='button' value='LogOut' onclick=\"return showRegAndLog()\"/>
	</span>";
	
	echo "<hr/>";
	
	
	echo "Update your details here...";
	echo "<form name='UpdateForm'>
			
			<label for='fName'>First Name:</label><br />
			<input type='text' id='fName' name='fName' 
				value='".$_SESSION["firstName"]."' />
			
			<br />
			
			<label for='lName'>Last name:</label><br />
			<input type='text' id='lName' name='lName'
				value='".$_SESSION["lastName"]."' />

			<br />
			
			<label for='address'>Address:</label><br />
			<input type='text' id='address' name='address'
				value='".$_SESSION["Address"]."' />
			
			<br />
			
			<label for='phon'>Phone Number:</label><br />
			<input type='text' id='phon' name='phon'
				value='".$_SESSION["PhoneNumber"]."' />
			
			<br />
			
			<label for='email'>Email:</label><br />
			<input type='text' id='email' name='email'
				value='".$_SESSION["Email"]."' />
			
			<br />
			
			<label for='RegPass'>Password:</label><br />
			<input type='password' id='RegPass' name='RegPass'
				placeholder='\"Password...\"' />
				
			<br />
				
			<input type='button' value='Update' onclick=\"return updateDetails()\"/>
		</form>";
		
		if($_SESSION["Type"] == 2){
			echo "<hr/>";
			echo "Staff Section... <br/><br/>";
			
			echo"
			<div class='staff' id=\"addupcustdiv\">
			Update or Add Customer
			<form name='addUpCustForm'>
				
				<label for='upUsername'>UserName:</label><br />
				<input type='text' id='upUsername' name='upUsername' 
					placeholder='\"username...\"' />
				
				<br />
				
				<label for='upfName'>First Name:</label><br />
				<input type='text' id='upfName' name='upfName' 
					placeholder='\"first name...\"' />
				
				<br />
				
				<label for='uplName'>Last name:</label><br />
				<input type='text' id='uplName' name='uplName'
					placeholder='\"last name...\"' />

				<br />
				
				<label for='upaddress'>Address:</label><br />
				<input type='text' id='upaddress' name='upaddress'
					placeholder='\"address...\"' />
				
				<br />
				
				<label for='upphon'>Phone Number:</label><br />
				<input type='text' id='upphon' name='upphon'
					placeholder='\"phone number...\"' />
				
				<br />
				
				<label for='upemail'>Email:</label><br />
				<input type='text' id='upemail' name='upemail'
					placeholder='\"email...\"' />
				
				<br />
				
				<label for='upPass'>Password:</label><br />
				<input type='password' id='upPass' name='upPass'
					placeholder='\"Password...\"' />
					
				<br />
				
				<label for='upType'>Role:</label><br />
				<select id='upType' name='Type'>
					<option value=\"Customer\">Customer</option>
					<option value=\"Staff\">Staff</option>
				</select>
					
				<br />	
				<input type='button' value='Add/Update' onclick=\"return addUpCust()\"/>
			</form>
		</div>

		<div class='staff' id=\"addUpProd\">
			Update or Add Products
			<form name='addUpProdForm' action=''>
				
				<label for='prodname'>Product Name:</label><br />
				<input type='text' id='prodname' name='prodname' 
					placeholder='\"Product Name...\"' />
				
				<br />
				
				<label for='price'>Price:</label><br />
				<input type='text' id='price' name='price' 
					placeholder='\"XXXX.XX\"' />
				
				<br />
				
				<label for='category'>Category:</label><br />
				<input type='text' id='category' name='category' 
					placeholder='\"Category...\"' />
				
				<br />
				
				<label for='colour'>Colour:</label><br />
				<input type='text' id='colour' name='colour' 
					placeholder='\"Colour...\"' />
				
				<br />
				
				<label for='description'>Description:</label><br />
				<textarea id='description' name='description' 
					placeholder='\"Brief description...\"' /></textarea>
				
				<br />
				
					
				<input type='button' value='Add/Update' onclick=\"return addUpProd()\" />
			</form>
		
		</div>";
			
			
		
		}
?>