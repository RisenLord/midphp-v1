<?php

// Create simple string
$name = 'Zura';
$string = "Hello i am $name. I am 28";
echo $string.'<br>';

// String concatenation
echo 'Hello'.' World'.' and Pb'.'<br>';

// String functions

// Multiline text and line breaks
$longTxt = "
Hello, my name is Lord
I am a son of God,
I love serving God
";

echo $longTxt.'<br>'; //or
echo nl2br($longTxt).'<br>';

// https://www.php.net/manual/en/ref.strings.php