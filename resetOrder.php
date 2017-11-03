<?php
	session_start();
	unset($_SESSION['cart']);
	echo"Your cart has been cleared";
?>