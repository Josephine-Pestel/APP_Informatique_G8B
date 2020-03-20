<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="P_Connexion.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu avec requete php -->

<?php
require('ENTETE_MENU.php');

?>

<!-- Milieu -->

<h1 class="titre_connexion"> CONNEXION</h1>

    <section class="bloc_infos1">
        <div class="info_utilisateur1">
            <p class="email"> EMAIL*</p>
            <div class="rectangle_email"> </div>
        </div>
    </section>

    <section class="bloc_infos2">
        <div class="info_utilisateur2">
            <p class="mdp"> MOT DE PASSE*</p>
            <div class="rectangle_mdp"> </div>
        </div>
    </section>

    <section class="souvenir">
        <button class="rectangle_souvenir"> </button>
        <p class="souvenir_de_moi"> Se souvenir de moi ?</p>
    </section>


    <button class="valider"> VALIDER</button>


    <a href="#" >
        <p class="oublie" > Mot de passe oublié ? </p>
    </a>

    <button class="nouvel_utilisateur">
        <a class="text" href="P_Accueil.php">NOUVEL UTILISATEUR - INSCRIPTION </a>
    </button>




</body>

<!-- Appel Footer -->
<?php
require('FOOTER.php');

?>

</html>

