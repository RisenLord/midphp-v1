<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';

echo __LINE__ . '<br>';

// Create directory
//mkdir('testr');

// Rename directory
//rename('testr', 'test');

// Delete directory
//rmdir('test');

// Read files and folders inside directory
$files = scandir(__DIR__);
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
//echo file_get_contents('lorem.txt');
//file_put_contents('sample', 'Jesus is Lord');

// file_get_contents from URL
$userJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $userJson;
$users = json_decode($userJson);
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file