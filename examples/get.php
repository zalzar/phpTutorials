<?php
    if(isset($_GET['submit'])){
        echo$_GET['email'];
        echo$_GET['title'];
        echo$_GET['ingredients'];
    }

    
?>

<html lang="en">
    
    <section>
        <h4>Add a Pizza</h4>
        <form action="get.php" method="GET">
            <label>Your email:</label><br>
            <input type="text" name="email">
            <br>
            <label>Pizza title:</label><br>
            <input type="text" name="title">
            <br>
            <label>Ingredients (comma separated):</label><br>
            <input type="text" name="ingredients">
            <br>
            <div class="center">
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
    </section>

</html>