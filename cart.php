<?php
	
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
	
	session_start();
	$totalprice = 0;
	$orderprice = 0;
	
	if(isset($_SESSION['cart'])){
		echo "<div class='cartdiv'>";
		echo "<div class=\"fourcol\">Product Name</div>";
		echo "<div class=\"fourcol\">Quantity</div>";
		echo "<div class=\"fourcol\">Price</div>";
		echo "<div class=\"fourcol\">Total Price</div>";
		echo "</div>";
		
		$query = "SELECT * FROM Products" ;
		$result = mysql_query($query) or die(mysql_error());
		
		$arrlength = count($_SESSION['cart']);
		for($x = 0; $x < $arrlength; $x++) {
		
			while($row=mysql_fetch_array($result, MYSQL_NUM)) {
				if($_SESSION['cart'][$x]->get_name() == $row[0]){
					$_SESSION['cart'][$x]->set_price($row[1]);
				}
			}
			
			$totalprice = $_SESSION['cart'][$x]->get_quantity() * $_SESSION['cart'][$x]->get_price();
			echo "<div class='cartdiv'>";
			echo "<div class=\"fourcol\">".$_SESSION['cart'][$x]->get_name()."</div>";
			echo "<div class=\"fourcol\">".$_SESSION['cart'][$x]->get_quantity()."</div>";
			echo "<div class=\"fourcol\">$".$_SESSION['cart'][$x]->get_price()."</div>";
			echo "<div class=\"fourcol\">$".$totalprice."</div>";
			echo "</div>";
			$orderprice = $orderprice + $totalprice;
		}
		
		echo"<hr/><div class='orderprice'><div><div class='quatercolumn'>Total order price<br/>$".$orderprice."<br/>
		<input type='button' value='Submit Order' onclick=\"return submitOrder()\"/>
		<input type='button' value='Clear Cart' onclick=\"return resetOrder()\"/>
		</div></div></div>";
		
	}else {
		echo"There are currently no items in your cart";
	}

	mysql_close();
?>