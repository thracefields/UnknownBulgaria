<?php $title = 'Непознатата България / Начало'; ?>
<?php include('./header.php'); ?>
    <?php if(isset($_SESSION['name']) && isset($_SESSION['is_logged'])): ?>
    <?php if(isset($_SESSION['success'])): ?>
        <p class="alert alert-success"><i class="fa fa-check fa-2x" aria-hidden="true"></i><?= $_SESSION['success'] ?></p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
        <p class="alert alert-info"><i class="fa fa-info fa-2x space" aria-hidden="true"></i>Добре дошли отново!</p>
        <a class="button-secondary pure-button right" href="logout.php">Излез</a>
    <?php endif; ?>
<?php include('./footer.php'); ?>