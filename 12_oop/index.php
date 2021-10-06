<?php

// What is class and instance
require_once "person.php";
require_once "student.php";

$p = new Person("Jesus", "Son of Man");
$p->setAge(33);
echo '<pre>';
var_dump($p);
echo '</pre>';
echo '<pre>';
echo $p->getAge();
echo '</pre>';
// $p->name = 'Jesus';
// $p->username = 'Son of Man';

$p2 = new Person('Lord', 'Eadwald');
echo '<pre>';
var_dump($p2);
echo '</pre>';

echo Person::getCounter();
// $p2->name = 'Lord';
// $p2->username = 'Son Of God';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter