<?php
    $db = new PDO("mysql:host=localhost;dbname=Product","root","");
    $info = [];
    if ($query = $db->query("SELECT * FROM firstCourses")) {
       $info = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первые блюда</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="logo">
        <a href="first-courses.php"><img src="images/logo.png" alt="Логотип"></a>
    </div>
    <div class="container">
    </div>
    <div class="products">
        <div class="container">
            <h2>Первые блюда</h2>
            <div class="products-items">
            <?php foreach ($info as $data): ?>
            <div class="product">
                <img src="<?php echo $data['photo'] ?>" alt="Product 1">
                <p class="product-title"><?php echo $data ['name'] ?></p>
                <p class="product-weight"><?php echo $data ['weight'] ?></p>
                <p class="product-price"><?php echo $data ['price'] ?></p>
                <button class="second-courses-item-button" id="open-modal-btn">Купить</button>
            </div>
            <?php endforeach; ?>
    </div>
    </div>
</div>
</body>
</html>