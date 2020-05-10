<link type="text/css" rel="stylesheet" href="../CSS_files/FAQ.css?t=<? echo time(); ?>" media="all">

<?php
require('../../../Model/forumQR.php');

$recup_requete=recupFAQ_discussion();
$donnees = $recup_requete->fetch();

if(empty($donnees)){
    echo 'Ce numéro de billet n\'existe pas.';
}
else
{?>
    <!-- Affichage du billet -->
    <div class="news">
        <h3>
            Thème  :
            <?php echo htmlspecialchars($donnees['theme'])?>
        </h3>
        <h4>
            Créateur :
            <?php echo htmlspecialchars($donnees['originaire'])?>
            le <em><?php echo $donnees['date_discussion']?></em>
        </h4>

    </div>
    </br>


    <!-- On arrête la requête -->
    <?php $recup_requete->closeCursor();
}?>