<?php $title = 'Непознатата България / Начало'; ?>
<?php include('./header.php'); ?>
    <?php if(isset($_SESSION['success'])): ?>
        <p class="alert alert-success"><i class="fa fa-check fa-2x" aria-hidden="true"></i><?= $_SESSION['success'] ?></p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
<?php if(isset($_SESSION['error'])): ?>
        <p class="alert alert-danger"><i class="fa fa-exclamation fa-2x" aria-hidden="true"></i><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
<?php endif; ?>
    <?php if(isset($_SESSION['name']) && isset($_SESSION['is_logged'])): ?>
        <p class="alert alert-info"><i class="fa fa-info fa-2x space" aria-hidden="true"></i>Добре дошли отново!</p>
        <a class="button-secondary pure-button right" href="logout.php">Излез</a>
        <div class="pure-g">
            <div class="pure-u-1-2">
                <div class="pure-g">
                    <div class="pure-u-1">Профил
                    <a class="pure-button button-success" href="image.php">Промени снимката</a></button>
                    </div>
                    <div class="pure-u-1">
                <?php
                    $imageQuery = mysqli_query($connect, "SELECT * from users WHERE id ='". $_SESSION['id'] . "'");
                        $imageResult = mysqli_fetch_assoc($imageQuery);
                        // var_dump($imageResult['image']); die;
                        if(empty($imageResult['image'])) {
                    ?>
                            <img src="./assets/images/default.jpg" class="space avatar" width="300" height="300" alt="">
                        <?php  } else { ?>
                        <img class="space avatar" src="./assets/images/uploads/<?= $imageResult['image'];?>" width="300" height="300">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="pure-u-1-2">
                <p class="alert alert-warning">Брой точки досега: <?= $imageResult['score'] ?>.</p>
            </div>
        </div>
    <?php endif; ?>
    <p class="italic">„Непознатата българия“ има за цел да запознае българите незнайните факти за нашата родина. Родното, милото и драгото тук е на почетно място.</p>
    <p class="italic">Влезте, играйте и опознайте България.</p>
<?php include('./footer.php'); ?>