<?php
session_start();

// echo session_id();

// $_SESSION['name'] = 'Lord';

// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

// unset($_SESSION['name']);

// session_unset();

$_SESSION['page_counter'] = $_SESSION['page_counter'] ?? 0;
$_SESSION['page_counter']++;

$pageCounter = $_SESSION['page_counter'] ?? 0;
if ($_SESSION['page_counter'] === 10) {
    echo 'Thanks for visiting us 10x' . '<br>';
    session_unset();
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <i>
        <p>visited <?php echo $pageCounter ?> times</p>
    </i>
    <h1>Awesome</h1>
</body>

</html>