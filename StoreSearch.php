<?php
	$host = "localhost";
	$user = "X32466748";
	$password = "X32466748";
	$dbc = mysql_pconnect($host, $user, $password);
	
	$dbname = "X32466748";
	mysql_select_db($dbname);
	
	
	$search = $_GET['search'];
	$count = 0;
	$query = "SELECT * FROM Products WHERE ProdName LIKE '%$search%' OR Description LIKE '%$search%'
	OR Category LIKE '%$search%' OR Colour LIKE '%$search%'" ;
	$result = mysql_query($query) or die(mysql_error());
	
	echo "<div id=\"Grid\">";
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		echo "<div id=\"GridElement\"> <img src =". $row[5]." alt = ". $row[0]. " onclick=\"closeUp('$row[0]');\"/> 
		<span class = \"caption\">". $row[0]."</br><span class = \"price\">$". $row[1]."</span></span>
		</div>" ;
		$count = $count + 1;
	}
	if($count == 0){
		echo "Sorry. Nothing Matches \"".$search."\"";
	}
	echo "</div>";
	
	mysql_free_result($result);
	
	mysql_close();
?>