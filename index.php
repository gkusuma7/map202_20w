<!DOCTYPE html>

<?php
	
$films = array(
            "comedy" => array (
                            0 => "Pink Panther",
                           1 => "johnny English",
                            2 => "Tommy Boy"),
            "action" => array (
                            0 => "Die Hard",
                            1 => "Expendables"),
            "epic" => array (
                            0 => "The Lord of the Rings"),
            "Romance" => array (
                            0 => "Romeo and Juliet")
);

$favorites = array(
   array(
       "name" => "Dave Punk",
       "phone" => "5689741523",
       "email" => "davepunk@gmail.com",
   ),
   array(
       "name" => "Monty Smith",
       "phone" => "2584369721",
       "email" => "montysmith@gmail.com",
   ),
   array(
       "name" => "John Flinch",
       "phone" => "9875147536",
       "email" => "johnflinch@gmail.com",)
);
?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PHP LAB2 </title>
    </head>
    <body>
		<h1>
			 Movies Array Table
		</h1>
        <table width:450px;margin:0; cellpadding="0" cellspacing="0"  border: 1px solid orange;>
            <tr>
                <th>Name</th>
                <th>Genre</th>
            </tr> 
            <?php
				foreach ($films as $genre => $film) {
					foreach ($film as $movie) {
						echo '<tr>';
						echo '<td style="height:40px; width:200px; margin:0;">' . $movie . '</td>';
						echo '<td style="height:40px; width:200px; margin:0;">' . $genre . '</td>';
						echo '</tr>';
					}

				}
			?>

        </table>
		
		<h1>
			Favourites Array Table
		</h1>
		
		
		<table width:450px;margin:0; cellpadding="0" cellspacing="0" border="0">
            <tr>
                <th>Name</th>
                <th>Phone</th>
				<th>Email</th>
            </tr> 
		
            <?php
				foreach($favorites as $person)
				{
					echo'<tr>';
					foreach($person as $details )
					{
						echo '<td style="height:40px; width:100px; margin:0;">' . $details . '</td>';
					}
					echo'</tr>';
				}
			?>

        </table>
		
    </body>
		

		

    </html>