<?php

function db_connect() {
	
	
	/*
  	$dbhost = 'remotemysql.com';
    $dbname = 'SJ8fXWp1m3';
    $dbuser = 'SJ8fXWp1m3';
    $dbpass = 'ahMvZabdlT';
	*/
		
		$dbhost = 'salt.db.elephantsql.com';
    $dbname = 'ozalquby';
    $dbuser = 'ozalquby';
    $dbpass = '2WckI5YwZAw4_4egDdn0zaSGauZq6cnL';
		
		
		
		
	try {
		$dbh = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}
