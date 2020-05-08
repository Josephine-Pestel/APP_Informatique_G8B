<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS_files/Ajouter_discussion.css" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>

<body>
<!-- header et menu -->
<?php include("ENTETE_MENU_Utilisateur.php"); ?>


<!--  ---------------------- FORMULAIRE DE DISCUSSION---------------------------------------   -->
<section>
    <h1 id="titre_forum"> FORUM </h1>
    <div id="description">
        <p>Remplissez le formulaire afin de lancer une nouvelle discussion  </p>
    </div>

    <div class="formulaire">
    <form method="post" action="traitement.php">
        <p>
            <label for="titre">Entrez votre question : </label><br />
            <textarea name="titre" id="titre"></textarea>
        </p>
    </form>

    <form method="post" action="traitement.php">
        <p>
            <label for="Theme">Thème de la discussion : </label><br />
            <select name="Theme" id="Theme">
                <option value="Température">Température</option>
                <option value="Capteur_cardiaque">Capteur cardiaque</option>
                <option value="Reconnaissance_tonalite">Reconnaissance de tonalité</option>
                <option value="Temps_recation_visuel">Temps de réaction à un stimulus visuel</option>
                <option value="Temps_reaction_sonore">Temps de réaction à un stimulus sonore</option>
                <option value="Authentification">Authentification</option>
                <option value="Mon_compte">Mon compte</option>
                <option value="Langue">Langue</option>
                <option value="autres">autres</option>
            </select>
        </p>
    </form>
    </div>

    <button class="bouton_discussion">Créer le fil de discussion</button>





</section>

<!------------------------------Fin de la section ------------------------------------->
<footer>
    <?php
    require('FOOTER_Utilisateur.php');

    ?>
</footer>


</body>
</html>