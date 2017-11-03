<?php
	session_start();
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	$firstname = $_GET['fnam'];
	$lastname = $_GET['lnam'];
	$address = $_GET['add'];
	$phone = $_GET['phon'];
	$email = $_GET['emai'];
	$password = $_GET['pass'];
	
	$currentuser = $_SESSION["currentUser"];
	$type = $_SESSION["Type"];
	
	$query = "UPDATE Customer SET Firstname = '$firstname',Lastname = '$lastname',
	Address = '$address', PhoneNumber = '$phone',Email = '$email',Password = '$password'
	WHERE Username = '$currentuser'";
	mysql_query($query) or die(mysql_error());
	echo "Your account has been updated";

	$_SESSION["firstName"] = $firstname;
	$_SESSION["lastName"] = $lastname;
	$_SESSION["Address"] = $address;
	$_SESSION["PhoneNumber"] = $phone;
	$_SESSION["Email"] = $email;
	$_SESSION["Password"] = $password;
	
	mysql_close();
?>