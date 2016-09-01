<?php

    $databaseConnect = @mysql_connect('localhost','root','') or die('Couldn\'t Connect to database');

//	@mysql_select_db('banglare_stockload',$databaseConnect) or die('Couldn\'t Select database');
	@mysql_select_db('db_usbangla',$databaseConnect) or die('Couldn\'t Select database');

//mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>
