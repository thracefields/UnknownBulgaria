<?php $title = 'Непознатата България / Градовете във въпроси'; ?>
<?php include('./header.php'); ?>
<?php
   $id = $_GET['id'];
   $townQuery = mysqli_query($connect, "SELECT * FROM map WHERE `id`= '$id'");
   $town = mysqli_fetch_assoc($townQuery);
?>
<form action="question.php?id=<?= $id ?>" method="post" class="pure-form">
    <fieldset>
        <label for="question"><?= $town['question'] ?></label>
        <textarea name="answer" id="question" cols="30" rows="10"></textarea>
        <input type="submit" class="pure-button pure-button-primary" name="submit" value="Изпрати">
    </fieldset>
</form>

<?php
// die;
    $score = 0;
    if(isset($_POST['submit'])) {
        $answer = mysqli_real_escape_string($connect, $_POST['answer']);
        if($answer === $town['answer']) {
            $points = 5;
            $userQuery = mysqli_query($connect, "UPDATE users SET score = score + '$points' WHERE `id`= ". $_SESSION['id']);
            if($userQuery) {
                $_SESSION['success'] = 'Браво! Спечелихте '.$points . ' точки.';
                header('Location: game.php');
            } 
        } else {
            $_SESSION['error'] = 'Не успяхте да отговорите правилно. Опитайте пак.';
            header('Location: /');
        }
            } 

?>
<?php include('./footer.php'); ?>