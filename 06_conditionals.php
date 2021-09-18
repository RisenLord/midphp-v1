<?php

$age = 20;
$salary = 300000;

// // Sample if
// if ($age === 20) {
//     echo '1';
// }

// // Without circle braces
// if ($age === 20) echo '2';

// // Sample if-else
// if ($age > 20) {
//     echo 'right';
// } else {echo 'well...';}

// Difference between == and ===
// if ($age == 20) {
//     echo "yo".'<br>';
// }
// if ($age == '20') {
//     echo "2".'<br>';
// }
$age == 20; //true
$age == '20'; //true

$age === 20; //true
$age === '20'; //false

// if AND
if ($age > 20 || $salary === 300000) {
    echo "Bro, do something.<br>";
}

// if OR

// Ternary if
echo $age < 19 ? 'Younger' : 'Old';

// Short ternary
$myAge = $age ?: 18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';

// switch
$userRole = 'admin'; // editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}