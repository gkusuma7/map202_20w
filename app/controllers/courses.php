
<?php
	
class Courses extends Controller{
	
public function index($department = null, $program = null) {	
	$course = $this->model('Course');	
	if(isset($program))
	{
		$program = rawurldecode($program);
		$courses = $course->get_AllCourses($program);
		$this->view('courses/displayCourses',['courses' => $courses,'programName' => $program]);
		die;
	}
	
	if(isset($department))
	{
				if($department=='insert'){
						$this->view('courses/insert');
						die;
					}
		$department = rawurldecode($department);
		$programs = $course->get_Programs($department);
		$this->view('courses/displayPrograms',['programs' => $programs, 'departmentName' => $department]);
		die;
	}
	
	$course_array = $course->get_Courses();
	
	$dept_array= $course->get_Departments();
	
	
$this->view('courses/index', ['departments'=> $dept_array]);
	
	   
}
	
	
	
}





?>

