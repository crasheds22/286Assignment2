<?php
	session_start();
	
	
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	$flag = false;
	
	
	$query = "SELECT * FROM Customer" ;
	$result = mysql_query($query) or die(mysql_error());
	
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		if(isset($_SESSION["currentUser"])){
			if($_SESSION["currentUser"] == $row[0]){
				echo "true";
				$flag = true;
			}
		}
	}
	
	if($flag == false){
		echo "false";
	}
	
	mysql_close();
	
?>