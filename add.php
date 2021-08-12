<?php
    $errors = array('email'=>'','title'=>'','ingredients'=>'');
    $email = $title = $ingredients = '';
    if (isset($_POST['submit'])) {

        //check email
        if(empty($_POST['email'])){
            $errors['email']= 'email is required <br />';
        }else {
            $email=$_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email']= 'email must be a valid email';
            }
        }

        //check title
        if(empty($_POST['title'])){
            $errors['title']= 'title is required';
        }else {
            $title=$_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$title)) {
                $errors['title']= 'Title must be a valid title';
            }
        }

        //check ingridients
        if(empty($_POST['ingredients'])){
            $errors['ingredients']= 'ingredients is required';
        }else {
            $ingredients=$_POST['ingredients'];

            if (!preg_match('/^([a-zA-Z\s]+),+\s?([,a-zA-Z\s]*)*$/',$ingredients)) {
                $errors['ingredients']= 'ingredients must be a comma separated list';
            }  
        }

        //check if there is any error(s) in the form
        if (array_filter($errors)) {
            //if there is errors
            echo 'there are errors in the form';
        }else{
            //if there is no errors
            header('Location:index.php');
            exit();
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
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email'] ?></div>
            
            <label>Your Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title'] ?></div>

            <label>Ingredients:</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients'] ?></div>

            <div class="center">
                <input name="submit" type="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php') ?>
</html>