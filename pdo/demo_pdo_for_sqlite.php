<?php

	// Include ezSQL core
	include_once "../ez_sql_loader.php";

	// This is how to initialse ezsql for sqlite PDO
	$db = new pdo('sqlite:my_database.sq3','someuser','somepassword');

?>
