<?php 
	// output: localhost
	$hostName = $_SERVER['SERVER_NAME']; 
	
	//Routes
	define("BASE_URL", 'http://' . $hostName . '/');
	
	//Routes
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
?>
