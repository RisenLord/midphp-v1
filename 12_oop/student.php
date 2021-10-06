<?php

require_once "person.php";

class Student extends Person
{
    public string $studentId;

    // public function __construct($name, $username, $studentId);
    // {
    //     parent::__construct($name, $username);
    //     $this->studentId = $studentId;
    // }
}