<!-- do while loop example -->
<?php
$products = [
    ['name' => 'Shampoo', 'Price' => 20],
    ['name' => 'Soap', 'Price' => 10],
    ['name' => 'Toothbrush', 'Price' => 5],
    ['name' => 'Toothpaste', 'Price' => 9]
];
$i = 0;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials - do while loop</title>
</head>

<body>
    <h1>Do While Loop</h1>
    <ul>
        <?php do { ?>
            <h4><?php echo $products[$i]['name']; ?></h4>
            <p>$<?php echo $products[$i]['Price'];
                $i++; ?></p>
        <?php } while (count($products) > $i) ?>
    </ul>
</body>

</html>