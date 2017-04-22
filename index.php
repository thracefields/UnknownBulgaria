<?php $title = 'Непознатата България / Начало'; ?>
<?php include('./header.php'); ?>
    <?php if(isset($_SESSION['success'])): ?>
        <p><?= $_SESSION['success'] ?></p>
        <?php session_unset($_SESSION['success']); ?>
    <?php endif; ?>
    <a href="logout.php">Излез</a>
    <div class="game-container">
    
    
    </div>
<?php include('./footer.php'); ?>