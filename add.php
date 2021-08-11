<?php
    $erros = array('email'=>"",'title'=>"",'ingredients'=>"");
    if (isset($_POST['submit'])) {

        //check email
        if(empty($_POST['email'])){
            echo 'email is required <br />';
        }else {
            $email=$_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'email must be a valid email';
            }
        }

        //check title
        if(empty($_POST['title'])){
            echo 'title is required';
        }else {
            $title=$_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$title)) {
                echo 'Title must be a valid title';
            }
        }

        //check ingridients
        if(empty($_POST['ingredients'])){
            echo 'ingredients is required';
        }else {
            $ingredients=$_POST['ingredients'];
            if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)) {
                echo 'ingredients must be a comma separated list';
            }        
        }
    } // end of the post check
?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php') ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" method="POST" class="white">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Your Title:</label>
            <input type="text" name="title">
            <label>Ingredients:</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input name="submit" type="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php') ?>
</html>