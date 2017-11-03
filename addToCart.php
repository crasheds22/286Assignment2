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
	
	$flag = false;
	
	$query = "SELECT * FROM Customer" ;
	$result = mysql_query($query) or die(mysql_error());
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		if(isset($_SESSION["currentUser"])){
			if($_SESSION["currentUser"] == $row[0]){
				$flag = true;
			}
		}
	}
	
	if($flag == false){
		echo "Must register or log-in before add item to cart!";
	}
	
	if($flag == true){
		
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array(NULL);
		}
		
		$productname = $_GET['prod'];
		$amount = $_GET['amo'];
		$price = $_GET['pri'];
		
		$item = new cart_item();
		$item->set_name($productname);
		$item->set_quantity($amount);
		$item->set_price($price);
		
		if($_SESSION['cart'][0] == NULL){
			$_SESSION['cart'][0] = $item;
		} else {
			array_push($_SESSION['cart'], $item);
		}
		
		
		echo $amount." X ".$productname." added to cart";
		
		
	}
	
	mysql_close();
	
?>