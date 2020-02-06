<?php

function db_connect() {
  	$dbhost = 'remotemysql.com';
    $dbname = 'SJ8fXWp1m3';
    $dbuser = 'SJ8fXWp1m3';
    $dbpass = 'ahMvZabdlT';
	try {
		$dbh = new PDO('mysql:host=remotemysql.com;dbname=SJ8fXWp1m3', $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}
