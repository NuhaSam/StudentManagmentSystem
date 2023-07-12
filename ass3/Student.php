<?php
namespace student;
class Student
{
    public readonly int $id;
    public $name;
    public $email;
    public $courses;

    static int  $nextId = 1;

    public function __construct($name, $email, $courses)
    {
        $this->id = self::$nextId;
        self::$nextId++;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
    }
}
