<?php
class SchoolClass{
    public string $name;

    function __construct($id,$name){
        $this->id = $id;
        $this->name = $name;
    }
    public function getSchoolClassName()
    {
        return $this->name;
    }
}

?>