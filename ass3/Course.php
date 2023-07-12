<?php
namespace course;
class Course
{
    public readonly int $id;
    public string $name;

    static $nextId = 1;

    public function __construct($name)
    {
        $this->id = self::$nextId;
        self::$nextId++;
        $this->name = $name;
    }
}
