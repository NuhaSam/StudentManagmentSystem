<?php

namespace manager;

require_once './log.php';

class Manager
{
    use \loggable;

    private static  $students = [];
    public static int $id = 0;

    public static function  addStudent($student)
    {
        // echo "ID:" . self::$id;
        self::$students[self::$id] = $student;
        self::$id++;
    }
    public function removeStudent($id)
    {
        unset(self::$students[$id]);
        $this->log("Student with ID : $id was deleted at " . date('Y-m-d H:i:s') . "\n");
    }

    public function updateStudent($id, $name, $email, array $courses)
    {
        self::$students[$id]->$name = $name;
        self::$students[$id]->$email = $email;
        @self::$students[$id]->$courses = $courses;
        $this->log("Student with ID : $id was updated at " . date('Y-m-d H:i:s') . "\n");
        echo "Student with ID : $id was updated successfully ";
    }

    public function getStudentByID($id)
    {
        return  self::$students[$id];
    }

    public function getStudents()
    {
        return self::$students;
    }
}
