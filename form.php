<?php
require_once 'database.php';


$password='KG123@';

$hash = password_hash($password, PASSWORD_DEFAULT);


echo $hash;
	
?>

<html>
	<head>
		<meta charset="utf-8">
        <title>PHP LAB3 </title>
	</head>
	
	
	<body>
		<h3>
			 Application form for Queries, Please Submit the Form.
		</h3>
		
		
		
	<form action="submittedform.php" method="post">
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
		Phone Number: <input type ="number" name="number"><br>
		Email: <input type="email" name="email"> <br>
		
		Favourite Actors: <select name="Actors">
<?php
		foreach($result  as $actors)
		{
			echo '<option value ="'. $actors['actor_name']  .'">' .$actors['actor_name'] . '</option>';
		}
		
		
		
		?>
</select>
		
		
		
		
		
  <input type="submit" value="Submit">
</form> 
		
		
	</body>
	
	
</html>