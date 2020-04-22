<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/lancerTest.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu par requete php avec require-->

<?php
//on démarre la session de l'utilisateur
session_start();
require('ENTETE_MENU_Utilisateur.php');

?>

<!-- Milieu -->
<h1 class="titre_moncompte"> Lancez le test de votre choix </h1>
<div class="fond"> </div>



<div class="formulaire">

    <form action="#.php" method="POST">
        <p>
            <label>Type de test :
                <select name="choix">
                    <option value="Temperature">Temperature</option>
                    <option value="Frequence cardiaque">frequence_cardiaque</option>
                    <option value="reconnaissance de tonalité">Mesure de reconnaissance de tonalite</option>
                    <option value="stimulus sonore">Temps de réaction à un stimulus sonore</option>
                    <option value="stimulus visuel">Temps de réaction à un stimulus_visuel</option>
                </select>
            </label>
        </p>
        <button class="lancer"> LANCER</button>

</div>


</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>
