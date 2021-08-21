<?php
//      http://localhost/Tuts/examples/cookies.php
//Cookies

// Sessions are killed when we close the page

//session starts here
if (isset($_POST['submit'])) {

    //cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();
    $_SESSION['name'] = $_POST['name'];
    header('Location: ../index.php');
    //exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>php Tutorials</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>