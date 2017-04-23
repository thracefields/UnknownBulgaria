<?php 
    // if(empty($_SESSION['name']) && empty($_SESSION['is_logged'])) {
    //     header('Location: login.php');
    // }
?>
<?php $title = 'Непознатата България / Начало'; ?>
<?php include('./header.php'); ?>
    <img id="ourmap" src="./assets/images/game-background.png" alt="" usemap="ourmap">
    <map name="ourmap">
        <area shape="circle" coords="78, 221, 30" href="sun.htm" alt="Sun">
    </map>
<?php include('./footer.php'); ?>