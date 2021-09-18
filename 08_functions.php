<?php

// Function which prints "Hello I am Zura"
// function hello()
// {
//     echo "Hello i am pasbanc";
// }
// hello();

// Function with argument
function hello($me)
{
    echo "Hello i am $me";
}
echo hello('Dev') . '<br>';
echo hello('Pb') . '<br>';

// Create sum of two functions
// function sum($a, $b)
// {
//     return $a + $b;
// }
// echo sum(6, 7);
// Create function to sum all numbers using ...$nums
// function sum(...$nums)
// {
//     $sum = 0;
//     foreach ($nums as $n) {
//         $sum += $n;
//     }
//     return $sum;
// }
// echo sum(1, 2, 3, 4, 5, 6, 7);

// Arrow functions
function sum(...$nums)
{
    return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}
echo sum(5, 6, 7, 5);