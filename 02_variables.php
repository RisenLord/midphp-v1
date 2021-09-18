<?php

// What is a variable
# a dynamic container that stores values
// Variable types + Declare variables
$name = 'zura'; #string
$age = 30; #int
$isMale = true; #boolean
$height = 5.7; #float/double
$salary = null; #null

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = true;

// Print type of the variable
echo gettype($name);
echo "<hr><br>";

// Variable checking functions
is_string($name); #false
is_int($salary); #false
is_float($height); #true
is_null($isMale); #flase

// Check if variable is defined
isset($name); #true
isset($address); #false

// Constants
define('God', 'love');
echo God.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';