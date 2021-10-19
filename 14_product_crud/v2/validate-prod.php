<?php

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$imagePath = '';

if (!$title) {
    $errors[] = 'Product title is required';
}
if (!$price) {
    $errors[] = 'Product price required';
}

if (!is_dir(__DIR__ . '/images')) {
    mkdir(__DIR__ . '/images');
}

if (empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];

    if ($image && $image['tmp_name']) {
        if ($product['image']) {
            unlink(__DIR__ . '/' . $product['image']);
        } //just added the magic __DIR__. to remain posting images in the super home img dir

        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname(__DIR__ . '/' . $imagePath));

        move_uploaded_file($image['tmp_name'], __DIR__ . '/' . $imagePath);
    }
}