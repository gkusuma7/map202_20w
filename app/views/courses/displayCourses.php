<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">


<?php
	
	foreach($data[courses] as $course)
	{
		echo '<p>'. $course[course_name]. '</p>';
	}
	
					
	
	
	
	?>
	
            </div>
        </div>
    </div>


    <?php require_once 'app/views/templates/footer.php' ?>
