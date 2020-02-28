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
	
	
	
}
	
	
	
	
	
?>