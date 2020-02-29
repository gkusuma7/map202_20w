<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">


<?php
	
	foreach($data[programs] as $program)
	{
		$link2 = rawurlencode($program[program]);
		$link = rawurlencode($data[departmentName]);
		
		echo '<p> <a href="/courses/' .$link. '/'.  $link2  .' ">'. $program[program]. '</a></p>';
	}
	
					
	
	
	
	?>
	
            </div>
        </div>
    </div>


    <?php require_once 'app/views/templates/footer.php' ?>