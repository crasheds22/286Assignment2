<?php
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	$username = $_GET['uname'];
	$firstname = $_GET['fnam'];
	$lastname = $_GET['lnam'];
	$address = $_GET['add'];
	$phone = $_GET['phon'];
	$email = $_GET['emai'];
	$password = $_GET['pass'];
	$flag = true;
	
	
	
	$query = "SELECT * FROM Customer" ;
	$result = mysql_query($query) or die(mysql_error());
	
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		if($username == $row[0]){
			echo "Username taken try again.";
			$flag = false;
		}
	}
	
	if($flag == true){
		$query = "INSERT INTO Customer VALUES ('$username','$firstname','$lastname',
		'$address', '$phone', '$email','$password','$flag')" ;
		mysql_query($query) or die(mysql_error());
		echo "Your account has been created. <br/> You can now log in ".$firstname;
	}
	
	
	mysql_close();
?>