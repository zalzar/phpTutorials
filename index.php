<?php
include('config/db_connect.php');
//write the query
$sql = ' SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make the query
$result = mysqli_query($conn, $sql);

//fetch the result
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//close mysqli connection
mysqli_close($conn);

//free $result from memory
mysqli_free_result($result);

?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>

<h4 class="center">Pizzas</h4>

<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) : ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <img src="img/pizza.svg" class="pizza" alt="">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
                                <li><?php echo htmlspecialchars($ing);   ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">more info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- <?php if (count($pizzas) >= 3) : ?>
            <p>There are 2 or more pizzas</p>
        <?php else : ?>
            <p>There are less than 3 pizzas</p>
        <?php endif; ?> -->
    </div>
</div>

<?php include('templates/footer.php') ?>

</html>

<!-- <p>
    <label>
        <input type="checkbox" />
        <span>Red</span>
    </label>
</p> -->