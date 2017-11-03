<?php
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	$username = $_GET['uname'];
	$password = $_GET['pass'];
	$flag = false;
	
	
	
	$query = "SELECT * FROM Customer" ;
	$result = mysql_query($query) or die(mysql_error());
	
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		if($username == $row[0] && $password == $row[6]){
			session_start();
			$_SESSION["currentUser"] = $row[0];
			$_SESSION["firstName"] = $row[1];
			$_SESSION["lastName"] = $row[2];
			$_SESSION["Address"] = $row[3];
			$_SESSION["PhoneNumber"] = $row[4];
			$_SESSION["Email"] = $row[5];
			$_SESSION["Password"] = $row[6];
			$_SESSION["Type"] = $row[7];
			
			$flag = true;
			echo "true";
		}
	}
	
	
	if($flag == false){
		echo "Invalid Login. Please try again";
	}
	
	mysql_close();
	
	
	
	
?>