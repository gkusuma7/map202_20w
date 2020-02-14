<?php
	
class Courses extends Controller{
	
public function index($department = null, $program = null) {	
	
	if(isset($department))
	{
		
		
	}
	
		$course = $this->model('Course');
	
	$course_array = $course->get_Courses();
	
	$dept_array= $course->get_Departments();
	
	foreach($dept_array as $dept)
	{
		echo $dept[department]. '<br>';
	}
	
	
	foreach($course_array as $course)
	{
		echo $course[course_id]. '<br>';
	}
	
	
	
	
	
    }
	
	
	

	
	
}





?>