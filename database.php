<?php
   
  //  $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

   // $query = "SELECT password FROM users where username = '$_REQUEST['uname']';
   // $stmt = $conn->prepare($query);
   // $stmt->execute();



   // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	
function db_connect() {
	$dbhost = 'remotemysql.com';
    $dbname = 'SJ8fXWp1m3';
    $dbuser = 'SJ8fXWp1m3';
    $dbpass = 'ahMvZabdlT';
		
    try {
        $dbh =  new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);;
        return $dbh;
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
        exit;
    }
}

	
    

?>