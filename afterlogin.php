<?php

require_once ('Auth.php');

$authenticate = new Auth();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_REQUEST['uname'];
	$password = $_REQUEST['password'];
	$authenticate->authenticate ($username, $password);
} else {
	echo "Please login ";
}

?>
	

   

