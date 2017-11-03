<?php
	session_start();
	
	$class_name = "cart_item";
	function __autoload($class_name){
		require_once $class_name.'.php';
	}
	
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	$flag = true;
	
	
	$arrlength = count($_SESSION['cart']);
	for($x = 0; $x < $arrlength; $x++) {
		$name = $_SESSION['cart'][$x]->get_name();
		$query = "SELECT * FROM Products WHERE ProdName = '$name'";
		$result = mysql_query($query) or die(mysql_error());
		while($row=mysql_fetch_array($result, MYSQL_NUM)) {
			if($_SESSION['cart'][$x]->get_quantity() > $row[6]){
				$flag = false;
			}
		}
	}

	if($flag == true){
		$arrlength = count($_SESSION['cart']);
		for($x = 0; $x < $arrlength; $x++) {
		$name = $_SESSION['cart'][$x]->get_name();
		$amount = $_SESSION['cart'][$x]->get_quantity();
		
		$query = "SELECT * FROM Products WHERE ProdName = '$name'";
		$result = mysql_query($query) or die(mysql_error());
		while($row=mysql_fetch_array($result, MYSQL_NUM)) {
			$newamount = $row[6] - $amount;
		}
		$query = "UPDATE Products SET Quantity = '$newamount' WHERE ProdName = '$name'";
		mysql_query($query) or die(mysql_error());
		
		
	}echo "The order has been accepted!";
	}else{
		echo "Your order has been declined due to lack of stock";
	}
	
	unset($_SESSION['cart']);
	
?>