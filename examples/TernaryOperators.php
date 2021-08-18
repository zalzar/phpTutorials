<?php
//      http://localhost/Tuts/examples/TernaryOperators.php
//TernaryOperators

$score = 20;

//simple if else statement
// if ($score>40) {
//     echo 'High score!';
// }else {
//     echo 'Low score!';
// }




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>php Tutorials</title>
</head>

<body>
    <p>
        <!-- Ternary Operators -->
        <?php echo $score > 40 ? 'high score' : 'low score'; ?>
    </p>
</body>

</html>