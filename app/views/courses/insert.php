<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">			
            <div class="col-lg-12">
                <h1>Enter Complete Information</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
			</div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
			<form action="/insert" method="post">
			<fieldset>
			<div class="form-group">
				<label for="name">CourseID</label>
				<input required type="text" class="form-control" name="courseid">
			</div>
			<div class="form-group">
				<label for="name">CourseName</label>
				<input required type="text" class="form-control" name="coursename">
			</div>
			<div class="form-group">
				<label for="name">Program</label>
				<input required type="text" class="form-control" name="program">
			</div>
			<div class="form-group">
				<label for="name">Department</label>
				<input required type="text" class="form-control" name="department">
			</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</fieldset>
		</form> 
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>