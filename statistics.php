<?php 
    // if(empty($_SESSION['name']) && empty($_SESSION['is_logged'])) {
    //     header('Location: login.php');
    // }
?>
<?php $title = 'Непознатата България / Начало'; ?>
<?php include('./header.php'); ?>
    <?php 
        $highestScoreQuery = mysqli_query($connect, 'SELECT name, score from users ORDER BY score DESC LIMIT 1');
        $highestScore = mysqli_fetch_assoc($highestScoreQuery);

        $highestTriesQuery = mysqli_query($connect, 'SELECT name, tries from users ORDER BY tries DESC LIMIT 1');
        $highestTries = mysqli_fetch_assoc($highestTriesQuery);
        $_SESSION['highest_score'] = $highestScore;
    ?>
    <div class="summary">
        <h3 class="alert alert-success"><i class="fa fa-trophy fa-3x space" aria-hidden="true"></i>Най-висок резултат</h3>
        <p class="alert alert-info"><?php echo $highestScore['name']. ' - ' . $highestScore['score']; ?> точки</p>
    </div>

     <div class="summary">
        <h3 class="alert alert-success"><i class="fa fa-gamepad fa-3x space" aria-hidden="true"></i>Най-много изиграни игри</h3>
        <p class="alert alert-info"><?php echo $highestTries['name']. ' - ' . $highestTries['tries']; ?> изиграни игри</p>
    </div>
<?php include('./footer.php'); ?>