<?php
		session_start();
		session_destroy();
		echo"
		<div class='reg' id=\"regdiv\">
		New Customer
		<form name='RegisterForm'>
			
			<label for='RegUsername'>UserName:</label><br />
			<input type='text' id='RegUsername' name='RegUsername' 
				placeholder='\"Choose a Username..\"' />
			
			<br />
			
			<label for='fName'>First Name:</label><br />
			<input type='text' id='fName' name='fName' 
				placeholder='\"Your first name...\"' />
			
			<br />
			
			<label for='lName'>Last name:</label><br />
			<input type='text' id='lName' name='lName'
				placeholder='\"Your last name...\"' />

			<br />
			
			<label for='address'>Address:</label><br />
			<input type='text' id='address' name='address'
				placeholder='\"Your address...\"' />
			
			<br />
			
			<label for='phon'>Phone Number:</label><br />
			<input type='text' id='phon' name='phon'
				placeholder='\"Your phone number...\"' />
			
			<br />
			
			<label for='email'>Email:</label><br />
			<input type='text' id='email' name='email'
				placeholder='\"Your email...\"' />
			
			<br />
			
			<label for='RegPass'>Password:</label><br />
			<input type='password' id='RegPass' name='RegPass'
				placeholder='\"Password...\"' />
				
			<br />
				
			<input type='button' value='Register' onclick=\"return validateAndRegister()\"/>

			<br />
		</form>
	</div>

	<div class='exist' id=\"exist\">
		Returning Customer
		<form name='LoginForm' action=''>
			
			<label for='LogUsername'>UserName:</label><br />
			<input type='text' id='LogUsername' name='LogUsername' 
				placeholder='\"Your Username..\"' />
			
			<br />
			
			<label for='LogPass'>Password:</label><br />
			<input type='password' id='LogPass' name='LogPass'
				placeholder='\"Password...\"' />
				
			<br />
				
			<input type='button' value='Login' onclick=\"return validateAndLogin()\" />
		</form>
	
	</div>";

?>