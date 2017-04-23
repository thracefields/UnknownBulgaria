<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ? $title : '' ?></title>
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
    <!--<![endif]-->
    <link rel="stylesheet" href="./assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/parsley.css">
    <link rel="stylesheet" href="./assets/css/vendor/animate.css">
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- JS -->
   
</head>
<body>
    <div class="container">
        <header><img class="logo" src="./assets/images/logo.png"></header>
        <nav class="main-navigation">
            <ul>
                <li><a href="/"><i class="fa fa-compass fa-2x" aria-hidden="true"></i><span>Начало</span></a></li>
                <?php if(empty($_SESSION['name']) && !isset($_SESSION['is_logged'])): ?>
                    <li><a href="login.php"><i class="fa fa-flag fa-2x" aria-hidden="true"></i><span>Влез</span></a></li>
                    <li><a href="register.php"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i><span>Регистрация</span></a></li>
                <?php endif; ?>
                 <?php if(isset($_SESSION['name']) && isset($_SESSION['is_logged'])): ?>
                    <li><a href="game.php"><i class="fa fa-flag fa-2x" aria-hidden="true"></i><span>Игрa</span></a></li>
                <?php endif; ?>
                <li><a href="#"><i class="fa fa-tags fa-2x" aria-hidden="true"></i><span>Статистика</span></a></li>
            </ul>
        </nav>
        <main>
            <!--<img src="./assets/images/maps-icon.png">-->
    
