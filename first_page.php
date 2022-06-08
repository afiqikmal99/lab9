<?php
session_start();
echo "<html>";

	$_SESSION ["myLogin"] = "myWebsite"; 
	"myWebsite"; 
	echo "A value saved the session named as myLogin.<br>"; 
	
	$_SESSION ["myColor"] = "Blue";
	echo "A value saved the session named as myColour.<br>"; 
	
	echo "Click <a href=next_page.php> Next page </a>"
	. " to retrieve the values.<br>";
	echo "</html><br>" ; 
?>