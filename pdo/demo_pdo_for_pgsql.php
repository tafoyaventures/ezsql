<?php

	// Include ezSQL core
	include_once "../ez_sql_loader.php";

	// Initialise database object and establish a connection at the same time
	// db_user / db_password / db_name / db_host
	// If you need to specify a custom port, use notation: 'pgsql:host=127.0.0.1;port=5432;dbname=some_db'
	$db = new pdo('pgsql:host=db_host;dbname=db_name', 'db_user', 'db_password');

	/**********************************************************************
	*  ezSQL demo for pgSQL database
	*/

	// Demo of getting a single variable from the db
	// (and using abstracted function sysdate)
	$current_time = $db->get_var("SELECT " . $db->sysdate());
	print "ezSQL demo for pgSQL database run @ $current_time";

	// Print out last query and results..
	$db->debug();

	// Get list of tables from current database..
	$my_tables = $db->get_results("SHOW TABLES",ARRAY_N);

	// Print out last query and results..
	$db->debug();

	// Loop through each row of results..
	foreach ( $my_tables as $table )
	{
		// Get results of DESC table..
		$db->get_results("DESC $table[0]");

		// Print out last query and results..
		$db->debug();
	}

?>
