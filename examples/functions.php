<?php
    
    function sayHello($name = 'Ali',$time='morning'){
        echo "good $time $name";
    }
    sayHello('Rali','night');

    function formatProduct($products){
        //echo "{$products['Name']} cost $"."{$products['Price']} to buy <br/>"; 
        return "{$products['Name']} cost $"."{$products['Price']} to buy <br/>"; 
    }

//     $formated = formatProduct(['Name'=>'Samsung phone','Price'=>20]);
//     echo $formated;
   ?>
    

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    

    


</body>
</html>