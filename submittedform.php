<?php
require_once 'database.php';
	
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	
{
		
$firstname = $_REQUEST['fname'];
$lastname = $_REQUEST['lname'];
$number = $_REQUEST['number'];
	$email = $_REQUEST['email'];
$actor =$_POST['Actors'];

echo 'Your name is ' . $firstname . ' ' . $lastname . '<br>';


echo 'This is your contact number: '  . $number .  '<br>'; 

echo 'If you do not pickup the call we will contact you with you email : '  . $email . '<br>'; 
	
echo 'Your Favourite Actor is  :' . $actor . '<br>'	;
	
}

else {
	
	echo "Please submit the form";

}

?>