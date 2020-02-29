<?php
	class Insert extends Controller {
		 public function index() {
			$courseid = $_REQUEST['courseid'];
			 $program = $_REQUEST['program'];
        	$coursename = $_REQUEST['coursename'];
			 
			$course = $this->model('Course');
			 
			 
			$department = $_REQUEST['department'];
			
			$course->saveData($courseid,$coursename,$program,$department);			
			
				header('Location: /courses/insert');
				die;
			
		 }				
	}
?>