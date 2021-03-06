<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/Forum.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>
<!-- Milieu -->
<!-- Bannière -->

<?php
session_start();
require('ENTETE_MENU_Utilisateur.php'); ?>

<a href="ajouterDiscussion_Forum.php">
    <button class="ajouter">Ajouter une discussion </button>
</a>

<div>
    <table class="tableau">
        <tr>
            <th><p class="num">Fil de discussion</p></th>
            <th><p class="theme">Thème</p></th>
            <th><p class="date">Date</p></th>
            <th><p class="lancement">Lancée par</p></th>
            <th><p class="Go">Go</p></th>
        </tr>

        <?php
        require('../../../Model/Forum.php');

        $recupDiscussionForum=recupDiscussionForum();

        while ($donnees = $recupDiscussionForum->fetch()) { ?>
            <tr>
                <th><p class="Score"><?php echo $donnees['idDiscussion'] ?></p></th>
                <th><p class="Score"><?php echo $donnees['theme'] ?></p></th>
                <th><p class="Score"><?php echo $donnees['date_discussion'] ?></p></th>
                <th><p class="Date"><?php echo $donnees['originaire'] ?></p></th>
                <th>
                    <a class="Go" href="forumQR.php?num_de_la_discussion=<?php echo $donnees['idDiscussion']; ?>" class="Date">
                        <p >&#8594;</p>
                    </a>
                </th>
            </tr>
            <?php
        }

        $recupDiscussionForum->closeCursor();
        ?>

    </table>

</div>

</body>
<?php
require('FOOTER_Utilisateur.php');

?>

</html>




