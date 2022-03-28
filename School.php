<?php
require_once 'Teacher.php';
require_once 'Student.php';
require_once 'SchoolClass.php';
class School{

    public string $name;
    public string $adress;
    private $teachers = Array();
    private $students = Array();
    private $SchoolClass = Array();
    
    function __construct($name, $adress){
        $this->name = $name;
        $this->adress = $adress;
    }

    function addTeacher($id, $firstname, $middlename, $lastname, $salary):int{
        $rc = -1;
        $t = new Teacher($id, $firstname, $middlename, $lastname, $salary);
        
        if (!isset($this->teachers[$id])){
            $this->teachers[$id] = $t;   
            $rc = 0;
        }
        else{
            echo "this teacher is allready registered\n".$t->__toString(); 
        }        
        return $rc;
    }
    function removeTeacher($id):int{
        $rc = -1;
        if (isset($this->teachers[$id])){
            unset($this->teachers[$id]);   
            $rc = 0;
        }
        else{
            echo "no teacher with index $id was found\n";
        }
        return $rc;
    }
    function addStudent($id, $firstname, $middlename, $lastname){
        $rc = -1;
        $s = new Student($id, $firstname, $middlename, $lastname);
        
        if (!isset($this->students[$id])){
            $this->students[$id] = $s;   
            $rc = 0;
        }
        else{
            echo "this student is already registered\n".$s->__toString(); 
        }        
        return $rc;
    }
    function removeStudent($id):int{
        $rc = -1;
        if (isset($this->students[$id])){
            unset($this->students[$id]);   
            $rc = 0;
        }
        else{
            echo "no student with index $id was found\n";
        }
        return $rc;

    }
    function addSchoolClass($id,$ClassName){
        $rc = -1;
        $Clname = new SchoolClass($id,$ClassName);
        if (!isset($this->SchoolClass[$id])){
            $this->SchoolClass[$id] = $Clname;   
            $rc = 0;
        }
        else{
            echo "this class is already registered\n".$Clname->getSchoolClassName(); 
        }        
        return $rc;
    }
    function removeSchoolClass(){

    }
}

?>