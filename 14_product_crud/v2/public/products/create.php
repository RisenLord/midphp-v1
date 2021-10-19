<?php

require_once "../../functions.php";

require_once "../../dbcon.php";

$errors = [];

$title = '';
$price = '';
$description = '';
$product = ['image' => ''];

if (!empty($_POST)) {

    require_once "../../validate-prod.php";

    if (empty($errors)) {

        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
            VALUES (:title, :image, :description, :price, :date)");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));
        $statement->execute();
        header('Location: index.php');
    }
}

?>

<?php include_once "../../views/partials/header.php" ?>

<p>
    <a href="index.php" class="btn btn-secondary">Go Back to Products</a>
</p>

<body>
    <h1>Create New Product</h1>

    <?php include_once "../../views/products/form.php" ?>

</body>

</html>