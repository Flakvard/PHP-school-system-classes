<?php 

require_once 'School.php';
$s = new School("UCL Seebladsgade","Seebladsgade 1, 5000 Odense C");

#test add remove teacher 
#add a teacher - expected $rc = 0
$rc0 = $s->addTeacher(1,"Kim","Vestergård","Mogensen",500);
#try to add same teacher - expected $rc = -1
$rc1 = $s->addTeacher(2,"Christine","?","?",300);
#remove teacher - expected $rc = 0
$rc2 =$s->removeTeacher(3); 
#remove not existing teacher - expected $rc = -1
$rc3 =$s->removeTeacher(2);

#test add remove student 
#add a teacher - expected $rc = 0
$rc0 = $s->addStudent(1,"Marni","Falkvard","Joensen");
#try to add same student - expected $rc = -1
$rc1 = $s->addStudent(1,"Marni","Falkvard","Joensen");
#remove student - expected $rc = 0
$rc2 = $s->removeStudent(2);
#remove not existing student - expected $rc = -1
$rc3 =$s->removeStudent(2);

#test add SchoolClass
$rc0 = $s->addSchoolClass("Softwarekonstruktion");
#try to add same student - expected $rc = -1

#test add teacher then add a SchoolClass to the teacher 
#test add teacher then add a same SchoolClass to the teacher - fail
#test add teacher then remove same SchoolClass to the teacher - success

#test add student then add a SchoolClass to the student 
#...

echo "test ends!";