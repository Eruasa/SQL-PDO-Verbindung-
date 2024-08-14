<?php
	$db_username = 'example_user';
	$db_password = 'example_password';
	$conn = new PDO( 'mysql:host=localhost;dbname=inventory_system', $db_username, $db_password );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>
