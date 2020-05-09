<link type="text/css" rel="stylesheet" href="../CSS_files/FAQ.css?t=<? echo time(); ?>" media="all">

<?php
$req = $bdd->query('SELECT question, reponse FROM faq');
while ($donnees = $req->fetch()) { ?>
    <div class="menu">
        <div >

            <p class="titre_question"> &#11166; <?php echo  $donnees['question'] ?></p>

        </div>

        <div id="sousmenu2" >
            <div class="sousmenu">
                <?php echo  $donnees['reponse'] ?>
            </div>
        </div>

    </div>
    <?php
}
$req->closeCursor();
?>