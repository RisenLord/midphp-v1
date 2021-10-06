<?php
class Person
{
    public $name;
    public $username;
    private $age;
    public static $counter = 0;

    public function __construct($name, $username)
    {
        $this->name = $name;
        $this->username = $username;
        self::$counter++;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}