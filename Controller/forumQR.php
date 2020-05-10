<link type="text/css" rel="stylesheet" href="../CSS_files/#.css?t=<? echo time(); ?>" media="all">

<?php
require('../../../Model/forumQR.php');

$recup_requete=recupFAQ_discussion();
$donnees = $recup_requete->fetch();

//recupération de la discussion
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
}

//récupération des commentaires liés à la discussion
function recup(){
    $recupReq = recupComDiscussion();

//On fait une boucle pour tout afficher
    while($donnees = $recupReq->fetch()){
        ?>

        <p class="titre_question"> &#11166; De <em> <?php echo $donnees['auteur'] ?></em> le
            <?php echo htmlspecialchars($donnees['date_post']); ?>
        </p>
        <?php echo htmlspecialchars($donnees['post']);

    }

//On arrête la requête
    $recupReq->closeCursor();
}

?>




