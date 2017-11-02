<?php
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	
	$item = $_GET['item'];
	$query = "SELECT * FROM Products WHERE ProdName = '$item'";
	$result = mysql_query($query) or die(mysql_error());
	
	echo "<div id=\"Grid\">";
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		echo "<div id=\"GridElement\"> <img src =". $row[5]." alt = ". $row[0]. " /> 
		<span class = \"caption\">". $row[0]."</br><span class = \"price\">$". $row[1]."</span></span>
		<span class = \"description\">". $row[4]."</span>
		<span class = \"ATC\">
		<form name=\"orderform\" action=\" \">
		<label for=\"amount\">Quantity</label>
		<select id= \"amount\" name=\"amount\">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	<input type=\"button\" name=\"atcButton\" value=\"Add to Cart\" onclick=\"catStore('$row[2]')\"/></span></span>
		</form>
		</div>"; 
		
	}
	echo "</div>";
	
	mysql_free_result($result);
	
	mysql_close();
?>