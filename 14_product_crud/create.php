<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'lord', 'luk@MySQL2de');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// exit;
// $method = $_SERVER['REQUEST_METHOD'];
//Answer for down here = https://forums.phpfreaks.com/topic/269169-_serverrequest_method-not-in-index/?do=findComment&comment=1383448 but also did not work out as intended

//either this short guy-> post request } or;
//$requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
//if ($requestMethod === 'post') //{

$errors = [];

$title = '';
$price = '';
$description = '';
$image = '';

if (!empty($_POST)) {
    // post request
    ////echo $_SERVER['REQUEST_METHOD'] . '<br>';
    //if ($_SERVER['REQUEST_METHOD'] === 'POST') //{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    // The amature's way of doing it;
    // $pdo->exec("INSERT INTO products (title, image, description, price, create_date)
    // VALUES ('$title', '', 'description', $price, '$date')
    // ");

    if (!$title) {
        $errors[] = 'Product title is required';
    }
    if (!$price) {
        $errors[] = 'Prodcut price required';
    }

    if (empty($errors)) {

        $image = $_FILES['image']?? null?
        if ($image) {
            move_uploaded_file($image[''], 'test.png');
        }

        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
 VALUES (:title, :description, :price, :date')
 ");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', '');
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
        //}
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="pc.css">

    <title>Products CRUD</title>
</head>

<body>
    <h1>Create New Product</h1>

    <?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error) : ?>
        <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Product Image</label><br>
            <input type="file" name="image" value="<?php echo $image ?>">
        </div>
        <div class="mb-3">
            <label>Product Title</label>
            <input type="text" name="title" value="<?php echo $title ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Product Description</label>
            <textarea class="form-control" value="<?php echo $description ?>" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label>Product Price</label>
            <input type="number" step=".01" name="price" value="<?php echo $price ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>