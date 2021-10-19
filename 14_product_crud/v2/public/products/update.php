<?php

//require_once "functions.php";

require_once "../../dbcon.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
//exit;
// $method = $_SERVER['REQUEST_METHOD'];
//Answer for down here = https://forums.phpfreaks.com/topic/269169-_serverrequest_method-not-in-index/?do=findComment&comment=1383448 but also did not work out as intended

//either this short guy-> if (!empty($_POST)) { //post req } or;
//$requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
//if ($requestMethod === 'post') { // post req }

$errors = [];

$title = $product['title'];
$price = $product['price'];
$description = $product['description'];
//$image = $product['image'];

//if (!empty($_POST)) //{
// post request
////echo $_SERVER['REQUEST_METHOD'] . '<br>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once "../../validate-prod.php";

    if (empty($errors)) {

        $statement = $pdo->prepare("UPDATE products SET  title = :title, image = :image, description = :description, price = :price WHERE id = :id");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('Location: index.php');
    }
}

function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }
    return $str;
}

?>

<?php include_once ".../../views/partials/header.php" ?>


<body>

    <p>
        <a href="index.php" class="btn btn-secondary">Go Back to Products</a>
    </p>

    <h1>Update Product <b><?php echo $product['title'] ?></b></h1>

    <?php include_once "../../views/products/form.php" ?>

</body>

</html>