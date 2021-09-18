<?php

// // Create array
// $fruits = ["Banana", "Apple", "Orange"];

// // Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Get element by index
// echo $fruits[1].'<br>';

// // Set element by index
// $fruits[0] = 'Peach';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Check if array has element at index 2
// isset($fruits[2]);

// // Append element
// $fruits[] = 'Angelo';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Print the length of the array
// echo count($fruits).'<br>';

// // Add element at the end of the array
// array_push($fruits, 'Life');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Remove element from the end of the array
// echo array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Add element at the beginning of the array
// array_unshift($fruits, 'Tree');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Remove element from the beginning of the array
// echo array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Split the string into an array
// $string = "Banana,Mand,Kobo";
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// // Combine array elements into string
// echo implode("&", $fruits);

// // Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('Kobo', $fruits));
// echo '</pre>';

// // Search element index in the array
// echo '<pre>';
// var_dump(array_search('Apple', $fruits));
// echo '</pre>';

// // Merge two arrays
// $vegs = ["Potato", "Cheese"];
// echo '<pre>';
// var_dump(array_merge($fruits, $vegs));
// var_dump([...$fruits, ...$vegs]);
// echo '</pre>';


// // Sorting of array (Reverse order also)
// rsort($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Pb',
    'surname' => 'TrueSteward',
    'age' => 30,
    'hobbies' => ['Worship', 'Sermons', 'Study', 'Work', 'Traveling']
];

echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'Pasbanc';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
//if (isset($person[$address])){
//    $person['address'] = 'unknown';
//} //or
//$person['address'] ?? = 'unkonwn';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
    ['title' => 'Todot1', 'completed' => true], ['title' => 'Todot2', 'completed' => false]
];
echo '<pre>';
var_dump($todos);
echo '</pre>';