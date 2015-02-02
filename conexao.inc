<?php
	
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set("display", "off");

	$servername="localhost";
	$username="root";
	$password="root";
	$dbname="renting";

	$link=mysql_connect($servername, $username, $password);
	if(!$link){
		die("Not connected : ".mysql_error());
	}

	$db_selected=mysql_select_db($dbname, $link);
	if(!$db_selected){
		die("Can't use".$dbname." : ".mysql_error());
	}



?>