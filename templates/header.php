<?php
session_start();

if ($_SERVER['QUERY_STRING'] == 'noname') {
    unset($_SESSION['name']);
}

// null coalesce
$name = $_SESSION['name'] ?? 'Guest';
//$gender = $_SESSION['name'] ?? 'Guest';

// get cookie
//$gender = $_COOKIE['gender'];


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xoload</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand {
            background: #cbb09c !important;
            border-radius: 5px;
        }

        .brand-text {
            color: #cbb09c !important;
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;

        }

        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>

<body class="grey lighten-4">
    <nav class="purple darken-3 z-depth-0">
        <div class="container">
            <a href="./index.php" class="brand-logo brand-text">xoload</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a><?php echo htmlspecialchars($name); ?></a></li>
                <!-- <li>(<?php echo htmlspecialchars($gender); ?>)</li> -->
                <li><a href="./add.php" class="btn brand grey darken-3">Add a Pizza</a></li>
                <p>
            </ul>
        </div>
    </nav>