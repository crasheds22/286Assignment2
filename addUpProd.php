<?php
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	$productname = $_GET['prod'];
	$price = $_GET['pric'];
	$category = $_GET['cat'];
	$colour = $_GET['col'];
	$description = $_GET['des'];
	$imageref = "../Images/Products/".$productname.".jpg"; 
	$quantity = 100;
	
	$flag = true;
	
	
	$query = "SELECT * FROM Products" ;
	$result = mysql_query($query) or die(mysql_error());
	
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		if($productname == $row[0]){
			$query = "UPDATE Products SET ProdName = '$productname',Price = '$price',
			Category = '$category', Colour = '$colour', Description = '$description'
			WHERE ProdName = '$productname'";
			mysql_query($query) or die(mysql_error());
			echo "Product: ".$productname." has been updated";
			$flag = false;
		}
	}
	
	if($flag == true){
		$query = "INSERT INTO Products VALUES ('$productname','$price','$category',
		'$colour', '$description', '$imageref','$quantity')" ;
		mysql_query($query) or die(mysql_error());
		echo "The product has been added";
	}
	
	
	mysql_close();
?>
