<?php

// Print current date
echo date('Y-m-d H:i:s') . '<br>';

// Print yesterday
echo date('d-m-y H:i:s', time()
    - 60 * 60 * 24) . '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';

// Print current timestamp
echo time() . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2020-10-12 09:00:09');
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'Feb 4 2020 12:45:00';

$parsedet = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedet);
echo '</pre>';