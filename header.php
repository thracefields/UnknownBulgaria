<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ? $title : '' ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
    <!--<![endif]-->
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- JS -->
</head>
<body>
    <div class="container">
        <header>Непознатата България</header>
        <nav class="pure-menu pure-menu-horizontal space">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a class="pure-menu-link" href="/">Начало</a></li>
                <?php if(empty($_SESSION['name']) && !isset($_SESSION['is_logged'])): ?>
                    <li class="pure-menu-item"><a class="pure-menu-link" href="login.php">Влез</a></li>
                    <li class="pure-menu-item"><a class="pure-menu-link" href="register.php">Регистрирай се</a></li>
                <?php endif; ?>
                <li class="pure-menu-item"><a class="pure-menu-link" href="#">Класации</a></li>
            </ul>
        </nav>
        <main>
    
