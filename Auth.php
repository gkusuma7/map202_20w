<?php
session_start();
require_once ('database.php');
	class Auth {

	public function __construct($param = false) {  }
		
	public function authenticate ($username,$password) {
		
		
		$db = db_connect();
		
		$searchterm = $username;
		$query = "SELECT password FROM users WHERE username = :searchterm";
		$stmt = $db->prepare($query);
		$stmt->bindParam(':searchterm', $username);
		$stmt->execute();
		
		$details = $stmt->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $details['password'])) {
              //require_once 'alogin.php';
			header('Location:alogin.php');
			
		} 
		else
			echo "Please give the correct username and password";
			
			

				}
		
	}

?>