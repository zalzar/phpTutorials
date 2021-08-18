<!-- foreach loop example -->
<?php
$products = [
    ['name' => 'Shampoo', 'Price' => 20],
    ['name' => 'Soap', 'Price' => 10],
    ['name' => 'Toothbrush', 'Price' => 5],
    ['name' => 'Toothpaste', 'Price' => 9]
];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials - foreach loop</title>
</head>

<body>
    <h1>Foreach loop</h1>
    <ul>
        <?php foreach ($products as $product) { ?>
            <h4><?php echo $product['name']; ?></h4>
            <p>$<?php echo $product['Price']; ?></p>
        <?php } ?>
    </ul>
</body>

</html>