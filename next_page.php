<?php
session_start();
echo "<html>";

	$queryString= $_SERVER["QUERY_STRING"];
	echo "Query string of the incomeing URL".$queryString."\n"; 
	
	echo "Cookies received:\n";
	foreach ($_COOKIE as $name => $value){
		echo " $name = $value\n";
	}
	
	$myLogin = $_SESSION ["myLogin"]; 
	echo "Value of myLogin has been retrieved: ".$myLogin."\n"; 
	
	$myColor = $_SESSION ["myColor"]; 
	echo "Value of myColor has been retrieved: ".$myColor."\n"; 
	
	echo "</html>\n"; 
?>