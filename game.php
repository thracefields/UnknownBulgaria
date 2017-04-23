<?php 
    // if(empty($_SESSION['name']) && empty($_SESSION['is_logged'])) {
    //     header('Location: login.php');
    // }
?>
<?php $title = 'Непознатата България / Начало'; ?>
<?php include('./header.php'); ?>
<?php if(isset($_SESSION['success'])): ?>
        <p class="alert alert-success"><i class="fa fa-check fa-2x" aria-hidden="true"></i><?= $_SESSION['success'] ?></p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
    <img id="ourmap" src="./assets/images/game-background.png" alt="" usemap="ourmap">
<map name="ourmap">
<area  alt="" title="" href="question.php?id=1" shape="rect" coords="107,67,133,91" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=2" shape="rect" coords="165,175,191,199" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=3" shape="rect" coords="210,206,236,230" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=4" shape="rect" coords="172,299,198,323" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=5" shape="rect" coords="133,313,159,337" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=6" shape="rect" coords="82,367,108,391" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=7" shape="rect" coords="133,418,159,442" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=8" shape="rect" coords="311,388,337,412" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=9" shape="rect" coords="367,224,393,248" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=10" shape="rect" coords="358,178,384,202" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=11" shape="rect" coords="451,274,477,298" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=12" shape="rect" coords="371,400,397,424" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=13" shape="rect" coords="364,497,390,521" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=14" shape="rect" coords="504,232,530,256" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=15" shape="rect" coords="493,351,519,375" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=16" shape="rect" coords="486,424,512,448" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=17" shape="rect" coords="454,487,480,511" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=18" shape="rect" coords="535,99,561,123" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=19" shape="rect" coords="619,161,645,185" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=20" shape="rect" coords="625,208,651,232" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=21" shape="rect" coords="593,310,619,334" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=22" shape="rect" coords="615,345,641,367" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=23" shape="rect" coords="672,202,702,232" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=24" shape="rect" coords="800,147,830,177" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=25" shape="rect" coords="809,213,839,243" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=26" shape="rect" coords="748,331,778,361" style="outline:none;" target="_self"     />
<area  alt="" title="" href="question.php?id=27" shape="rect" coords="715,48,745,78" style="outline:none;" target="_self"     />
</map>

    <canvas id="ourmap2"></canvas>
<?php include('./footer.php'); ?>