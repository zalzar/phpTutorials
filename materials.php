<?php
    $ninjas = ['Ali','Rali','Nadim'];

    // $products=[
    //     ['name'=>'Shampoo','Price'=>20],
    //     ['name'=>'Soap','Price'=>10],
    //     ['name'=>'Toothbrush','Price'=>5],
    //     ['name'=>'Toothpaste','Price'=>9]
    // ];


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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?> 
            <h4><?php echo $product['name']; ?></h4>
            <p>$<?php echo $product['Price']; ?></p>
        <?php } ?>    
    </ul>
</body>
</html>