<?php
    //connect to database
    $conn = mysqli_connect('localhost','ali','test123','ninja_pizza');

    //check connection
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }

    //write the query
    $sql = ' SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    //make the query
    $result = mysqli_query($conn, $sql);

    //fetch the result
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    myseqli_free_result($result);
    mysqli_clsoe($conn);

    print_r($pizzas);
    
?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php') ?>



    <?php include('templates/footer.php') ?>
</html>