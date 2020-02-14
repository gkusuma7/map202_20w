<?php
	
class Course{
	
	 public function __construct() {
        
    }
	
	public function get_Courses()	{
		$db = db_connect();
		
		
		$statement = $db->prepare("select * from courses");
        
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
	
	
}
	
	
	
	
	
?>