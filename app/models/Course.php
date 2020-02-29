<?php
	
class Course{
	
	 public function __construct() {
        
    }
	
	public function get_Courses()	{
		$db = db_connect();
		
		$statement = $db->prepare("select * from courses");
		//$statement->bindValue(':program', $program);
        
        $statement->execute();
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		return $courses;
		
	}
	
	public function get_AllCourses($program)
	{
		$db = db_connect();
		$statement = $db->prepare("select * from courses where program=:program");
		$statement->bindValue(':program', $program);
        
        $statement->execute();
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		return $courses;
		
		
	}
	
	public function get_Departments()
	{
		$db = db_connect();
		
		
		$statement = $db->prepare("select distinct department from courses");
        
        $statement->execute();
        $dept = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		return $dept;
	}
	
		public function get_Programs($department)
	{
		$db = db_connect();
		
		
		$statement = $db->prepare("select distinct program from courses where department=:department");
        $statement->bindValue(':department', $department);
        $statement->execute();
        $program = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		return $program;
	}
	
	
	public function saveData($courseid,$coursename,$program,$department){
		
		
		$db = db_connect();
			
		$statement =$db->prepare("INSERT INTO courses(courseid, coursename, program, department) VALUES (:searchterm1,:searchterm2,:searchterm3,:searchterm4)");
				
			$statement->bindParam(':searchterm1', $courseid);
		
		$statement->bindParam(':searchterm2', $coursename);
			$statement->bindParam(':searchterm3', $program);
		
		$statement->bindParam(':searchterm4', $department);
		
			$statement->execute();			
		
		
		
		}
}
	
	
	
	
	
?>