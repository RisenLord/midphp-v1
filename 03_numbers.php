<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $c) * $b.'<br>';
echo $a - $b .'<br>';
echo $a * $c . '<br>';
echo $c / $b.'<br>';
echo $c % $b.'<br>';

// Assignment with math operators (combining ops)
//$a *= $b; echo $a.'<br>'; // $a = 20

// Increment operator
echo $a++.'<br>';
echo ++$a.'<br>';

// Decrement operator
echo $a--.'<br>';
echo --$a.'<br>';

// Number checking functions
is_float(1.24);
is_double(1.22);
is_int(5);
is_numeric("4.5");

// Conversion of one datatype into another
$strNo = '12.54';
$no = (string)$strNo;
var_dump($no);
echo "<br>";

// Number functions
// abs(-15) = absolute number, pow(2,3) = power of, sqrt(16) = squareroot, max/min(2, 9. 4), , round(2.5) = round off, floor(2.6) = round down, ceil(2.7) = round up

// Formatting numbers
$no = 23456.7894;
echo number_format($no, 3, '.', ','); // no, decplaces, dec seper, thou seper

//A link to almost all the php math functions
// https://www.php.net/manual/en/ref.math.php