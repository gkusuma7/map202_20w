<?php

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
			session_start();
			header('Location:alogin.php');
			
		} 
		else
		{
			echo "Please give the correct username and password";
			session_start();
			
			
				
				session_start();
		if( isset( $_SESSION['counter'] ) ) 
			{
			
			echo '<html> <br>  </html>';
				
      				$_SESSION['counter'] += 1;
			
   					}
			else {
				
    			  $_SESSION['counter'] = 1;
 				  }
			
						
			
		}
		
			if($_SESSION['counter'] > 3)
		{
			echo "You exceeded maximum attempts, Please try after some time";
		}
		
		
			

				}
		
	}

?>