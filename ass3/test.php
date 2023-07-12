<?php
namespace test;
use student\Student,course\Course,manager\Manager;
include('./Course.php');
include('./Student.php');
include('./Manager.php');

    $c1 = new Course("C1");
    $c2 = new Course("C2");
    $c3 = new Course("C3");
    $c4 = new Course("C4");

    $s1 = new Student("Nuha", "nuha@gmail.com", [$c1, $c2]);
    $s2 = new Student("Amal", "amal@gmail.com", [$c3]);
    $s3 = new Student("A", "a@gmail.com", [$c3]);

    $m = new Manager();
   
    echo "******";
    $m->addStudent($s1);
    $m->addStudent($s2);
    $m->addStudent($s3);

    $r= $m->getStudents();
    foreach ($r as $k => $v) {
        echo "K: " . $k  ."V: " . $v->name .": "  .$v->email ;
    }
    $ss =  $m->getStudentById(2);
    echo "Student info : ".$ss->id .$ss->name . $ss->email  ."\n";
    // var_dump($ss);

    // echo " <br> remove    <br>";
    $m->removeStudent(3);
   
    echo "</pre>";
   $m->updateStudent(1,"Khalil","khail@gmail.com",[]);   
    $r= $m->getStudents();
    
    foreach ($r as $k => $v) {
        echo "<pre>  K: " . $k  ."    V: " . $v->name ."   :  "  .$v->email . " SSSSSS</pre>";
    }
