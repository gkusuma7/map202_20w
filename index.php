<!DOCTYPE html>

<?php
	
date_default_timezone_set('America/Toronto');
$name ='Kusuma Garlapati';
$date = date('Y-m-d H:i:s');
$id = '19051848';
$string1= 'Welcome to PHP LAB1';


?>
	
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>PHP LAB1 </title>
</head>

<body>
	
	<header>
		
		<h1>
		 My Details
	</h1>
		
	</header>
	
	<main>
		
		<section>
		
			<h2>
				<?php echo $string1; ?>
			</h2>
			
		<br>
		

			<h3>
				My name is <?php echo $name; ?>
		</h3>
	
	<br>
	
		<h4>
			My student id is <?php echo $id; ?>
		
	</h4>
			
			<br>
			
			<p>
					
			<strong> Today date is <?php echo $date; ?> </strong>
			</p>

		
		</section>
		
		
		
	</main>
	
	
	</body>


	
</html>