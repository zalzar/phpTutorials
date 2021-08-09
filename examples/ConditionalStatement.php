<?php
    $products=[
        ['Name'=>'Shampoo','Price'=>20],
        ['Name'=>'Soap','Price'=>10],
        ['Name'=>'Toothbrush','Price'=>5],
        ['Name'=>'Blade','Price'=>15],
        ['Name'=>'Mirror','Price'=>150],
        ['Name'=>'Air freshener','Price'=>35],
        ['Name'=>'Toothpaste','Price'=>9]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Tutorials - Conditional Statements</title>
</head>
<body>
    
    <?php foreach ($products as $product) { 
        if($product['Price']<=30 && $product['Price']>5) {?>
        <h4><?php echo $product['Name']; ?></h4>
        <p> <?php echo $product['Price']; ?></p>
    <?php } } ?>
</body>
</html>