<?php

class Signup extends Controller{
	
	
	public function index()
	{
		$this-> view('login/register');
	}
	
	public function verify()
	{
		$username= $_REQUEST['username'];
		
		
		$password=$_REQUEST['password'];
		
	
		
		$hash= password_hash($password,PASSWORD_DEFAULT);
		
			
		$user = $this -> model('User');
		
		
		
		$result = $user->usernamecheck($username);
		
		if (empty($result))
		{
			$user -> userinsert($username,$hash);
			$user -> authenticate($username,$password);
			
			unset($_SESSION['usernameused']);
			die;
			
			
			
		}
		
		else
		{
			$_SESSION['usernameused'] = 1;
			header('Location:/signup');
			
			die;
		}
		
		
		
	}
	
	
	
	
	
	
	
	
}




?>