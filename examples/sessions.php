
<?php
//      http://localhost/Tuts/examples/sessions.php
//Sessions

// Sessions are killed when we close the page

if (isset($_POST['submit'])) {
    session_start();
    $_SESSION['name']=$_POST['name'];
    header('Location: ../index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>php Tutorials</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>