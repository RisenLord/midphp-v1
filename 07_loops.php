<?php

// while
// while (true) {

// } this would be infinite

// Loop with $counter
// $counter = 0;
// while ($counter < 10) {
//     echo $counter . '<br>';
//     $counter++;
//     // if ($counter === 5) {
//     //     break;
//     // }
// }

// do - while
// do {
//     echo $counter . '<br>';
//     $counter++;
// } while ($counter < 20);

// for
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

// foreach
$fruits = ["Bana", "Mango", "Pear"];
foreach ($fruits as $fruit) {
    //echo $fruit;
    echo $i . ' ' . $fruit . '<br>';
}

// Iterate Over associative array.
$person = [
    //'key' => 'value'
    'name' => 'Apostle',
    'surname' => 'Grace',
    'age' => 36,
    'hobbies' => ['Basket', 'Liverpool'],
];
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key . ' ' . implode(",", $value) . '<br>';
    } else {
        echo $key . ' ' . $value . '<br>';
    }
}