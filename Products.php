<?php
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	$query = "SELECT * FROM Products";
	$result = mysql_query($query);
	
	echo "<div id=\"Grid\">";
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		echo "<div id=\"GridElement\"> <img src =". $row[5]." alt = ". $row[0]. " onclick=\"closeUp('$row[0]');\"/> 
		<span class = \"caption\">". $row[0]."</br><span class = \"price\">$". $row[1]."</span></span>
		</div>" ;
	}
	echo "</div>";
	
	mysql_free_result($result);
	
	mysql_close();
?>