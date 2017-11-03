
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
	$type = $_GET['typ'];
	
	if($type == 'Staff'){
		$type = 2;
	}else{
		$type = 1;
	}
	$flag = true;
	
	
	$query = "SELECT * FROM Customer" ;
	$result = mysql_query($query) or die(mysql_error());
	
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		if($username == $row[0]){
			$query = "UPDATE Customer SET Firstname = '$firstname',Lastname = '$lastname',
			Address = '$address', PhoneNumber = '$phone',Email = '$email',Password = '$password',Type = '$type'
			WHERE Username = '$username'";
			mysql_query($query) or die(mysql_error());
			echo "User: ".$username." has been updated";
			$flag = false;
		}
	}
	
	if($flag == true){
		$query = "INSERT INTO Customer VALUES ('$username','$firstname','$lastname',
		'$address', '$phone', '$email','$password','$type')" ;
		mysql_query($query) or die(mysql_error());
		echo "The account has been added";
	}
	
	
	mysql_close();
?>